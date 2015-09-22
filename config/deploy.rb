# config valid only for current version of Capistrano
lock '3.4.0'

set :application, 'mobile_factory'
set :repo_url, 'git@github.com:Fayne/mobile-factory.git'

# Default branch is :master
ask :branch, `git rev-parse --abbrev-ref HEAD`.chomp

# Default deploy_to directory is /var/www/my_app_name
set :deploy_to, '/var/www/html/mobile_factory'

# Default value for :scm is :git
set :scm, :git

# Default value for :format is :pretty
# set :format, :pretty

# Default value for :log_level is :debug
set :log_level, :debug

# Default value for :pty is false
set :pty, true

# Default value for :linked_files is []
# set :linked_files, fetch(:linked_files, []).push('config/database.yml', 'config/secrets.yml')

# Default value for linked_dirs is []
set :linked_dirs, fetch(:linked_dirs, []).push('public/uploads', 'app/storage/cache', 'app/storage/logs', 'app/storage/meta', 'app/storage/sessions', 'app/storage/views')

# Default value for default_env is {}
# set :default_env, { path: "/opt/ruby/bin:$PATH" }

# Default value for keep_releases is 5
# set :keep_releases, 5

namespace :deploy do

  desc 'Get stuff ready prior to symlinking'
  task :move_vendor_and_config do
    on roles(:app), in: :sequence, wait: 1 do
      within release_path do
        execute "cp -r #{fetch(:composer_vendor)}/vendor #{fetch(:release_path)}/vendor"
        execute "cp #{fetch(:config_dir)}/env.php #{fetch(:release_path)}/.env.#{fetch(:app_environment)}.php"
        execute "cp -r #{fetch(:release_path)}/public/src #{fetch(:release_path)}/public/dist"
      end
    end
  end

  after :updated, :move_vendor_and_config

  before "deploy:updated", "deploy:set_permissions:acl"

  namespace :ops do

    namespace :config do

      desc 'Upload environment configuration to servers.'
      task :upload_env do
        on roles(:app), in: :sequence, wait: 1 do
          upload! "./config/env.#{fetch(:app_environment)}.php", "#{fetch(:config_dir)}/env.php"
        end
      end

    end

    namespace :composer do

      desc 'Install/Update composer dependencies'
      task :install_no_dev do
        on release_roles(:app) do
          within fetch(:release_path) do
            execute :composer, 'update --no-dev --prefer-dist --no-interaction --quiet --optimize-autoloader'
          end
        end
      end

      desc 'Copy vendor folder to servers.'
      task :upload_vendor do
        on roles(:app), in: :sequence, wait: 1 do
          system("mkdir build && tar -zcf ./build/vendor.tar.gz ./vendor")
          upload! './build/vendor.tar.gz', fetch(:composer_vendor), :recursive => true
          execute "cd #{fetch(:composer_vendor)}
          tar -zxf #{fetch(:composer_vendor)}/vendor.tar.gz
          rm #{fetch(:composer_vendor)}/vendor.tar.gz"
          system("rm -rf build")
        end
      end

    end

    namespace :supervisord do

      desc 'Restart all supervisor commands'
      task :restart_all do
        on roles(:app) do
          execute 'supervisorctl restart all'
        end
      end

    end

  end

  after "deploy:finished", "deploy:ops:supervisord:restart_all"

end

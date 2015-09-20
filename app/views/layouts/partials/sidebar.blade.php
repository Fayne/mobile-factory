<div class="static-sidebar-wrapper sidebar-default">
    <div class="static-sidebar">
        <div class="sidebar">
            <div class="widget">
                <div class="widget-body">
                    <div class="userinfo">
                        <div class="avatar">
                            @if (App::environment('local'))
                                <img src="/src/img/header_icon.png" class="img-responsive img-circle">
                            @else
                                <img src="/dist/img/header_icon.png" class="img-responsive img-circle">
                            @endif
                        </div>
                        <div class="info">
                            <span class="username">{{ $currentUser->first_name }} {{ $currentUser->last_name }}</span>
                            <span class="useremail">{{ $currentUser->email }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="widget stay-on-collapse" id="widget-sidebar">
                <nav role="navigation" class="widget-body">
                    <ul class="acc-menu">
                        <li class="nav-separator"><span>Explore</span></li>
                        <li><a href="{{ route('dashboard.home') }}"><i class="ti ti-home"></i><span>Dashboard</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
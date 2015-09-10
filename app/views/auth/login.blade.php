@extends('layouts.minimal')

@section('content')
    <div class="container" id="login-form">
        <div class="login-logo">
            @if (App::environment('local'))
                <img src="/src/img/logo-big.png">
            @else
                <img src="/dist/img/logo-big.png">
            @endif
        </div>

        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">

                    {{ Form::open(['route' => 'dashboard.login', 'id' => 'validate-form', 'class' => 'form-horizontal']) }}

                    <div class="panel-heading">
                        <h2>Login Form</h2>
                    </div>
                    <div class="panel-body">

                        @if($errors->any())
                            <p class="alert alert-danger text-left">{{$errors->first()}}</p>
                        @endif

                        @if(Session::has('message'))
                            <p class="alert alert-info text-left">{{Session::get('message')}}</p>
                        @endif

                        <div class="form-group mb-md">
                            <div class="col-xs-12">
                                <div class="input-group">
										<span class="input-group-addon">
											<i class="ti ti-user"></i>
										</span>
                                    {{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email', 'data-parsley-minlength' => 6, 'required' => true]) }}
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-md">
                            <div class="col-xs-12">
                                <div class="input-group">
										<span class="input-group-addon">
											<i class="ti ti-key"></i>
										</span>
                                    {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password', 'required' => true]) }}
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-n">
                            <div class="col-xs-12">
                                <a href="extras-forgotpassword.html" class="pull-left hide">Forgot password?</a>

                                <div class="checkbox-inline icheck pull-right p-n">
                                    <label for="">
                                        <input name="remember" type="checkbox"/>
                                        Remember me
                                    </label>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="panel-footer">
                        <div class="clearfix">
                            <input type="submit" class="btn btn-primary pull-right"/>
                        </div>
                    </div>

                    {{ Form::close() }}

                </div>

            </div>
        </div>
    </div>

@stop
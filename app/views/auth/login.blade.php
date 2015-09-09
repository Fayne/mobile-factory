@extends('layouts.minimal')

@section('content')
    <div class="container" id="login-form">
        <a href="index.html" class="login-logo">
            @if (App::environment('local'))
                <img src="/src/img/logo-big.png">
            @else
                <img src="/dist/img/logo-big.png">
            @endif
        </a>

        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>Login Form</h2>
                    </div>
                    <div class="panel-body">

                        <form action="" class="form-horizontal" id="validate-form">
                            <div class="form-group mb-md">
                                <div class="col-xs-12">
                                    <div class="input-group">
										<span class="input-group-addon">
											<i class="ti ti-user"></i>
										</span>
                                        <input type="text" class="form-control" placeholder="Username"
                                               data-parsley-minlength="6" placeholder="At least 6 characters" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mb-md">
                                <div class="col-xs-12">
                                    <div class="input-group">
										<span class="input-group-addon">
											<i class="ti ti-key"></i>
										</span>
                                        <input type="password" class="form-control" id="exampleInputPassword1"
                                               placeholder="Password">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mb-n">
                                <div class="col-xs-12">
                                    <a href="extras-forgotpassword.html" class="pull-left">Forgot password?</a>

                                    <div class="checkbox-inline icheck pull-right p-n">
                                        <label for="">
                                            <input type="checkbox"></input>
                                            Remember me
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="panel-footer">
                        <div class="clearfix">
                            <a href="extras-login.html" class="btn btn-primary pull-right">Login</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@stop
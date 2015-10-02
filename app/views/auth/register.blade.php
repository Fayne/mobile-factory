@extends('layouts.minimal')

@section('content')
    <div class="container" id="registration-form">
        <a href="{{ route('orders.my_orders') }}" class="login-logo">
            @if (App::environment('local'))
                <img src="/src/img/Fanuc_Robot.png">
            @else
                <img src="/dist/img/Fanuc_Robot.png">
            @endif
        </a>

        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    {{ Form::open(['route' => 'dashboard.register', 'class' => 'form-horizontal']) }}
                    <div class="panel-heading">
                        <h2>Registration Form</h2>
                    </div>
                    <div class="panel-body">
                        @if($errors->any())
                            <p class="alert alert-danger text-left">{{$errors->first()}}</p>
                        @endif

                        @if(Session::has('message'))
                            <p class="alert alert-info text-left">{{Session::get('message')}}</p>
                        @endif
                        <div class="form-group mb-md">
                            <label for="FirstName" class="col-xs-4 control-label">First Name</label>

                            <div class="col-xs-8">
                                {{ Form::text('first_name', null, ['id' => 'FirstName', 'class' => 'form-control', 'placeholder' => 'First name', 'required' => true]) }}
                            </div>

                        </div>
                        <div class="form-group mb-md">
                            <label for="LastName" class="col-xs-4 control-label">Last Name</label>

                            <div class="col-xs-8">
                                {{ Form::text('last_name', null, ['id' => 'LastName', 'class' => 'form-control', 'placeholder' => 'Last name', 'required' => true]) }}
                            </div>
                        </div>
                        <div class="form-group mb-md">
                            <label for="Email" class="col-xs-4 control-label">Email</label>

                            <div class="col-xs-8">
                                {{ Form::email('email', null, ['id' => 'Email', 'class' => 'form-control', 'placeholder' => 'Email', 'required' => true]) }}
                            </div>
                        </div>
                        <div class="form-group mb-md">
                            <label for="Password" class="col-xs-4 control-label">Password</label>

                            <div class="col-xs-8">
                                {{ Form::password('password', ['id' => 'Password', 'class' => 'form-control', 'placeholder' => 'Password', 'required' => true]) }}
                            </div>
                        </div>
                        <div class="form-group mb-md">
                            <label for="ConfirmPassword" class="col-xs-4 control-label">Confirm</label>

                            <div class="col-xs-8">
                                {{ Form::password('password_confirmation', ['id' => 'ConfirmPassword', 'class' => 'form-control', 'placeholder' => 'Password', 'required' => true]) }}
                            </div>
                        </div>
                        <div class="form-group mb-n">
                            <div class="col-xs-12">

                            </div>
                        </div>

                    </div>
                    <div class="panel-footer">
                        <div class="clearfix">
                            {{ link_to_route('dashboard.login', 'Already Registered? Login', $parameters = array(), $attributes = array('class' => 'btn btn-default pull-left')) }}
                            <input type="submit" class="btn btn-primary pull-right"/>
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>

@stop
@extends('layouts.master')

@section('content')

    <div class="static-content">
        <div class="page-content">
            <ol class="breadcrumb">

                <li><a href="index.html">Home</a></li>
                <li>New order</li>

            </ol>
            <div class="container-fluid">

                <div data-widget-group="group1">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default" data-widget='{"draggable": "false"}'>
                                @if(Session::has('order_code'))
                                    <div class="panel-heading">
                                        <h2>Order information</h2>

                                        <div class="panel-ctrls" data-actions-container=""
                                             data-action-collapse='{"target": ".panel-body"}'></div>
                                    </div>
                                    <div class="panel-body">

                                        <div class="alert alert-success">
                                            <h4>Well done!</h4>

                                            <p>Your order number is :
                                                <strong>{{ Session::get('order_code') }}</strong></p>
                                            <br>
                                            <p>
                                                <img src="/src/img/Robot_example.png" alt="" />
                                            </p>
                                        </div>

                                    </div>
                                @else
                                    <div class="panel-body">
                                        <div class="alert alert-danger">
                                            <h4>Oh Snap!</h4>

                                            <p>You see this page because you refresh this page with mistake.
                                                Please go back.</p>
                                            <br>

                                            <p><a class="btn btn-danger"
                                                  href="{{ route('orders.my_orders') }}">Back</a></p>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- .container-fluid -->
        </div>
        <!-- #page-content -->
    </div>
@stop
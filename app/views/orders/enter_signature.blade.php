@extends('layouts.master')

@section('content')

    <div class="static-content">
        <div class="page-content">
            <ol class="breadcrumb">

                <li><a href="{{ route('orders.my_orders') }}">Home</a></li>
                <li class="active">Create order</li>

            </ol>
            <div class="container-fluid">

                <div data-widget-group="group1">

                    <div class="panel panel-default" data-widget='{"draggable": "false"}'>
                        {{ Form::open(['route' => 'orders.create', 'id' => 'validate-form', 'class' => 'form-horizontal']) }}
                        <div class="panel-heading">
                            <h2>Please enter your signature:</h2>

                            <div class="panel-ctrls" data-actions-container=""
                                 data-action-collapse='{"target": ".panel-body"}'></div>
                        </div>
                        <div class="panel-editbox" data-widget-controls=""></div>
                        <div class="panel-body">
                            @if($errors->any())
                                <p class="alert alert-danger text-left">{{$errors->first()}}</p>
                            @endif

                            @if(Session::has('message'))
                                <p class="alert alert-info text-left">{{Session::get('message')}}</p>
                            @endif
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="Signature">Signature</label>

                                <div class="col-sm-8">
                                    {{ Form::text('signature', null, ['class' => 'form-control', 'placeholder' => 'Signature', 'id' => 'Signature', 'required' => true]) }}
                                </div>
                            </div>

                        </div>
                        <div class="panel-footer">
                            <div class="row">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <input type="submit" class="btn btn-primary pull-right"/>
                                </div>
                            </div>
                        </div>
                        {{ Form::close() }}
                    </div>

                </div>

            </div>
            <!-- .container-fluid -->
        </div>
        <!-- #page-content -->
    </div>
@stop
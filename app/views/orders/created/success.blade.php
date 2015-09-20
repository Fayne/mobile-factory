@extends('layouts.master')

@section('content')

    @include('layouts.partials.navbar')
    <div id="wrapper">
        <div id="layout-static">
            @include('layouts.partials.sidebar')
            <div class="static-content-wrapper">
                <div class="static-content">
                    <div class="page-content">
                        <ol class="breadcrumb">

                            <li><a href="{{ route('dashboard.home') }}">Home</a></li>

                        </ol>
                        <div class="container-fluid">

                            <div data-widget-group="group1">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel panel-default" data-widget='{"draggable": "false"}'>
                                            <div class="panel-heading">
                                                <h2>Order information</h2>
                                                <div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'></div>
                                            </div>
                                            <div class="panel-body">

                                                <div class="alert alert-dismissable alert-success">
                                                    <i class="ti ti-info-alt"></i>&nbsp; 订单申请成功！
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div> <!-- .container-fluid -->
                    </div> <!-- #page-content -->
                </div>
            </div>
            @include('layouts.partials.options')
        </div>
    </div>
    @include('layouts.partials.foot')
@stop
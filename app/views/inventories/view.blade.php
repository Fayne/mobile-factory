@extends('layouts.master')

@section('content')

    @if (App::environment('local'))
        <link type="text/css" href="/src/css/progress.css" rel="stylesheet">
    @else
        <link type="text/css" href="/dist/css/progress.css" rel="stylesheet">
    @endif

    <div class="static-content">
        <div class="page-content">
            <ol class="breadcrumb">

                <li><a href="{{ route('orders.my_orders') }}">Home</a></li>
                <li>Inventory</li>

            </ol>
            <div class="container-fluid">

                <div data-widget-group="group1">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="panel panel-default" data-widget='{"draggable": "false"}'>
                                <div class="panel-heading">
                                    <h2>Inventory</h2>
                                    <div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'></div>
                                </div>
                                <div class="panel-body">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="panel panel-default" data-widget='{"draggable": "false"}'>
                                                <div class="panel-heading">
                                                    <h2>Catalogue 1</h2>
                                                    <div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'></div>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="row mb">
                                                        <div class="col-xs-6">
                                                            物品1
                                                        </div>
                                                        <div class="col-xs-6">
                                                        </div>
                                                    </div>
                                                    <div class="row mb">
                                                        <div class="col-xs-6">
                                                            物品2
                                                        </div>
                                                        <div class="col-xs-6">
                                                        </div>
                                                    </div>
                                                    <div class="row mb">
                                                        <div class="col-xs-6">
                                                            物品3
                                                        </div>
                                                        <div class="col-xs-6">
                                                        </div>
                                                    </div>
                                                    <div class="row mb">
                                                        <div class="col-xs-6">
                                                            物品4
                                                        </div>
                                                        <div class="col-xs-6">
                                                        </div>
                                                    </div>
                                                    <div class="row mb">
                                                        <div class="col-xs-6">
                                                            物品5
                                                        </div>
                                                        <div class="col-xs-6">
                                                        </div>
                                                    </div>
                                                    <div class="row mb">
                                                        <div class="col-xs-6">
                                                            物品6
                                                        </div>
                                                        <div class="col-xs-6">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="panel panel-default" data-widget='{"draggable": "false"}'>
                                                <div class="panel-heading">
                                                    <h2>Panel</h2>
                                                    <div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'></div>
                                                </div>
                                                <div class="panel-body">
                                                    Asperiores porro eveniet debitis quas sed harum nobis libero voluptatibus dolorum odio at veniam aut id corrupti hic amet consectetur adipisicing tenetur ex ea dignissimos volupta elit esse quisquam fugiat.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="panel panel-default" data-widget='{"draggable": "false"}'>
                                                <div class="panel-heading">
                                                    <h2>Panel</h2>
                                                    <div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'></div>
                                                </div>
                                                <div class="panel-body">
                                                    Asperiores porro eveniet debitis quas sed harum nobis libero voluptatibus dolorum odio at veniam aut id corrupti hic amet consectetur adipisicing tenetur ex ea dignissimos volupta elit esse quisquam fugiat.
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
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
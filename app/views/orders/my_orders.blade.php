@extends('layouts.master')

@section('content')

    <div class="static-content">
        <div class="page-content">
            <ol class="breadcrumb">

                <li><a href="{{ route('dashboard.home') }}">Home</a></li>
                <li>My orders</li>

            </ol>
            <div class="container-fluid">

                <div data-widget-group="group1">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-sky" data-widget="{&quot;draggable&quot;: &quot;false&quot;}"
                                 data-widget-static=""
                                 style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">
                                <div class="panel-heading">
                                    <h2>My Orders</h2>

                                    <div class="panel-ctrls" data-actions-container=""
                                         data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span
                                                class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>Order name</th>
                                                <th>Order code</th>
                                                <th>Signature</th>
                                                <th>Order description</th>
                                                <th>Product code</th>
                                                <th>Required Date</th>
                                                <th>Quantity</th>
                                                <th>Status</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($orders as $order)
                                                <tr>
                                                    <td>{{ $order->order_name }}</td>
                                                    <td>{{ $order->order_code }}</td>
                                                    <td>{{ $order->signature }}</td>
                                                    <td>{{ $order->order_desc }}</td>
                                                    <td>{{ $order->product_code }}</td>
                                                    <td>{{ $order->required_date }}</td>
                                                    <td>{{ $order->quantity }}</td>
                                                    <td>{{ $order->status }}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
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
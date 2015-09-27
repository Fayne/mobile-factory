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
                                                <th>Order code</th>
                                                <th>Signature</th>
                                                <th>Required Date</th>
                                                <th>Status</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($orders as $order)
                                                <tr>
                                                    <td>{{ $order->order_code }}</td>
                                                    <td>{{ $order->signature }}</td>
                                                    <td>{{ $order->required_date }}</td>
                                                    <td>
                                                        <a data-toggle="modal" href="#orderDetail{{ $order->order_code }}" class="btn btn-primary">Detail</a>
                                                        <div class="modal fade" id="orderDetail{{ $order->order_code }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                        <h2 class="modal-title">Detail</h2>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <ul class="mini-timeline">
                                                                            <li class="mini-timeline-lime">
                                                                                <div class="timeline-icon"></div>
                                                                                <div class="timeline-body">
                                                                                    <div class="timeline-content">
                                                                                        <a href="#/" class="name">Vincent Keller</a> added new task
                                                                                        <span class="time">4 mins ago</span>
                                                                                    </div>
                                                                                </div>
                                                                            </li>

                                                                            <li class="mini-timeline-deeporange">
                                                                                <div class="timeline-icon"></div>
                                                                                <div class="timeline-body">
                                                                                    <div class="timeline-content">
                                                                                        <a href="#/" class="name">Shawna Owen</a> added <a href="#/" class="name">Alonzo Keller</a>
                                                                                        <span class="time">6 mins ago</span>
                                                                                    </div>
                                                                                </div>
                                                                            </li>

                                                                            <li class="mini-timeline-info">
                                                                                <div class="timeline-icon"></div>
                                                                                <div class="timeline-body">
                                                                                    <div class="timeline-content">
                                                                                        <a href="#/" class="name">Christian Delgado</a> commented on thread
                                                                                        <span class="time">12 mins ago</span>
                                                                                    </div>
                                                                                </div>
                                                                            </li>

                                                                            <li class="mini-timeline-indigo">
                                                                                <div class="timeline-icon"></div>
                                                                                <div class="timeline-body">
                                                                                    <div class="timeline-content">
                                                                                        <a href="#/" class="name">Jonathan Smith</a> added <a href="#/" class="name">Frend Pratt</a>
                                                                                        <span class="time">6 hours ago</span>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li class="mini-timeline-lime">
                                                                                <div class="timeline-icon"></div>
                                                                                <div class="timeline-body">
                                                                                    <div class="timeline-content">
                                                                                        <a href="#/" class="name">Vincent Keller</a> added new task
                                                                                        <span class="time">4 mins ago</span>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </div><!-- /.modal-content -->
                                                            </div><!-- /.modal-dialog -->
                                                        </div>
                                                    </td>
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
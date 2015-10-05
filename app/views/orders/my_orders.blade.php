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
                <li>My orders</li>

            </ol>
            <div class="container-fluid">

                <div data-widget-group="group1">
                    <div class="row">
                        <div class="col-md-12">
                            @foreach($orders as $order)

                                <?php
                                $orderTracks = OrderTrack::findByOrderId($order->order_id);
                                ?>

                                <div class="panel panel-sky" data-widget="{&quot;draggable&quot;: &quot;false&quot;}"
                                     data-widget-static=""
                                     style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">
                                    <div class="panel-heading">
                                        <h2>Created at <i>{{ date('Y-m-d', strtotime($order->created_at)) }}</i></h2>

                                        <div class="panel-ctrls" data-actions-container=""
                                             data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}">
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table mb-xxl">
                                                <tbody>
                                                <tr>
                                                    <th width="50%">Order code</th>
                                                    <td width="*">{{ $order->order_code }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Signature</th>
                                                    <td>{{ $order->signature }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Required Date</th>
                                                    <td>{{  $order->required_date }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Progress</th>
                                                    <td style="vertical-align: middle; padding-right: 30px;">
                                                        <div class="progressbar" data-perc="{{ $order->progress }}">
                                                            <div class="bar"><span></span></div>
                                                            <div class="label"><span></span></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Status</th>
                                                    <td>
                                                        <a data-toggle="modal"
                                                           href="#orderDetail{{ $order->order_code }}"
                                                           class="btn btn-primary">Detail</a>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <?php echo $orders->links(); ?>

            </div>
            <!-- .container-fluid -->
        </div>
        <!-- #page-content -->
    </div>

    @foreach($orders as $order)
        <div class="modal fade" id="orderDetail{{ $order->order_code }}"
             tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        {{--<button type="button" class="close"--}}
                        {{--data-dismiss="modal" aria-hidden="true">--}}
                        {{--×--}}
                        {{--</button>--}}
                        <h2 class="modal-title">订单追踪</h2>

                        {{--<div class="progress">--}}
                        {{--<div class="progress-bar progress-bar-success" style="width: {{ $order->progress }}%"></div>--}}
                        {{--</div>--}}
                    </div>
                    <div class="modal-body">
                        @if(!count($orderTracks))
                            <p>系统正在处理您的订单，稍后请查看详细。</p>
                        @else
                        <ul class="mini-timeline">
                            <?php
                            $orderTracks = OrderTrack::findByOrderId($order->order_id);
                            foreach ($orderTracks as $orderTrack):
                            ?>
                            <li class="mini-timeline-info">
                                <div class="timeline-icon"></div>
                                <div class="timeline-body">
                                    <div class="timeline-content">
                                        {{ $orderTrack->order_track_name }}
                                        <span class="time">{{ $orderTrack->created_at }}</span>
                                    </div>
                                </div>
                            </li>
                            <?php endforeach;?>

                        </ul>
                        @endif
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default"
                                data-dismiss="modal">Close
                        </button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
    @endforeach


@stop
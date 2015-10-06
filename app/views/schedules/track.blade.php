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
                <li>Schedule track</li>

            </ol>
            <div class="container-fluid">

                <div data-widget-group="group1">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="panel panel-sky" data-widget="{&quot;draggable&quot;: &quot;false&quot;}"
                                 data-widget-static=""
                                 style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">
                                <div class="panel-heading">
                                    <h2>最近一班</h2>

                                    <div class="panel-ctrls" data-actions-container=""
                                         data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}">
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table mb-xxl">
                                            <tbody>
                                            <tr>
                                                <th>计划产量</th>
                                                <td>{{ $track->product_plan }}</td>
                                            </tr>
                                            <tr>
                                                <th>实际产量</th>
                                                <td>{{ $track->product_actual }}</td>
                                            </tr>
                                            <tr>
                                                <th>目标产量</th>
                                                <td>{{ $track->product_target }}</td>
                                            </tr>
                                            <tr>
                                                <th>完成率</th>
                                                <td>
                                                    {{ (int)round($track->product_actual / $track->product_target * 100) }}
                                                    %
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="text-center">
                                                    <div id="productivity" class="pie-chart"></div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-sky" data-widget="{&quot;draggable&quot;: &quot;false&quot;}"
                                 data-widget-static=""
                                 style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table mb-xxl">
                                            <tbody>
                                            <tr>
                                                <th>总可用时间</th>
                                                <td>{{ $track->total_available_time }}</td>
                                            </tr>
                                            <tr>
                                                <th>总运行时间</th>
                                                <td>{{ $track->total_run_time }}</td>
                                            </tr>
                                            <tr>
                                                <th>总停机时间</th>
                                                <td>{{ $track->total_down_time }}</td>
                                            </tr>
                                            <tr>
                                                <th>总等待时间</th>
                                                <td>{{ $track->total_wait_time }}</td>
                                            </tr>
                                            <tr>
                                                <th>OEE</th>
                                                <td>
                                                    {{ (int)round($track->total_run_time / $track->total_available_time * $track->total_FTP * 100) }}
                                                    %
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="text-center">
                                                    <div id="oee" class="pie-chart"></div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-sky" data-widget="{&quot;draggable&quot;: &quot;false&quot;}"
                                 data-widget-static=""
                                 style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table mb-xxl">
                                            <tbody>
                                            <tr>
                                                <th>总停线时间</th>
                                                <td>{{ $track->total_wait_time + $track->equipment_down_time + $track->quality_down_time }}</td>
                                            </tr>
                                            <tr>
                                                <th>等待时间</th>
                                                <td>{{ $track->total_wait_time }}</td>
                                            </tr>
                                            <tr>
                                                <th>故障时间</th>
                                                <td>{{ $track->equipment_down_time }}</td>
                                            </tr>
                                            <tr>
                                                <th>质检时间</th>
                                                <td>{{ $track->quality_down_time }}</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="text-center">
                                                    <div id="equipment" class="pie-chart"></div>
                                                </td>
                                            </tr>
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

    <script>
        var productivityData = [];

        productivityData[0] = {label: '已完成', color: '#4DA74D', data: <?php echo (int)round($track->product_actual / $track->product_target * 100); ?>};
        productivityData[1] = {label: '未完成', color: '#A1A1A1', data: <?php echo 100 - (int)round($track->product_actual / $track->product_target * 100); ?>};

        $.plot('#productivity', productivityData, {
            series: {
                pie: {
                    show: true
                }
            }
        });

        var oeeData = [];

        oeeData[0] = {label: 'OEE', color: '#4DA74D', data: <?php echo (int)round($track->total_run_time / $track->total_available_time * $track->total_FTP * 100); ?>};
        oeeData[1] = {label: '', color: '#A1A1A1', data: <?php echo 100 - (int)round($track->total_run_time / $track->total_available_time * $track->total_FTP * 100); ?>};

        $.plot('#oee', oeeData, {
            series: {
                pie: {
                    show: true
                }
            }
        });

        var downData = [];

        downData[0] = {label: '等待时间', data: <?php echo $track->total_wait_time; ?>};
        downData[1] = {label: '故障时间', data: <?php echo $track->equipment_down_time; ?>};
        downData[2] = {label: '质检时间', data: <?php echo $track->quality_down_time; ?>};

        $.plot('#equipment', downData, {
            series: {
                pie: {
                    show: true
                }
            }
        });
    </script>

@stop
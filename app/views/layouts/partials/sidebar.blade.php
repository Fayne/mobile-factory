<div class="static-sidebar-wrapper sidebar-default">
    <div class="static-sidebar">
        <div class="sidebar">
            <div class="widget">
                <div class="widget-body">
                    <div class="userinfo">
                        <div class="avatar">
                            @if (App::environment('local'))
                                <img src="/src/img/header_icon.png" class="img-responsive img-circle">
                            @else
                                <img src="/dist/img/header_icon.png" class="img-responsive img-circle">
                            @endif
                        </div>
                        <div class="info">
                            <span class="username">{{ $currentUser->first_name }} {{ $currentUser->last_name }}</span>
                            <span class="useremail">{{ $currentUser->email }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="widget stay-on-collapse" id="widget-sidebar">
                <nav role="navigation" class="widget-body">
                    <ul class="acc-menu">
                        <li class="nav-separator"><span>Explore</span></li>
                        {{--<li>--}}
                            {{--<a href="{{ route('orders.my_orders') }}"><i class="ti ti-home"></i><span>Dashboard</span></a>--}}
                        {{--</li>--}}
                        <li class="hasChild"><a href="javascript:;"><i class="ti ti-shopping-cart"></i><span>Orders</span></a>
                            <ul class="acc-menu">
                                <li><a href="{{ route('orders.my_orders') }}">My orders</a></li>
                                <li><a href="{{ route('orders.create.signature') }}">Create new order</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('orders.my_orders') }}"><i class="ti ti-package"></i><span>库存</span></a>
                        </li>
                        <li>
                            <a href="{{ route('orders.my_orders') }}"><i class="ti ti-cup"></i><span>绩效</span></a>
                        </li>
                        <li>
                            <a href="{{ route('orders.my_orders') }}"><i class="ti ti-bar-chart-alt"></i><span>质量</span></a>
                        </li>
                        <li>
                            <a href="{{ route('orders.my_orders') }}"><i class="ti ti-agenda"></i><span>设备</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
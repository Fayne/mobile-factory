<?php
    $message = Session::get('message', '');
?>
<header id="topnav" class="navbar navbar-default navbar-fixed-top" role="banner">

    <div class="logo-area">
		<span id="trigger-sidebar" class="toolbar-trigger toolbar-icon-bg">
			<a data-toggle="tooltips" data-placement="right" title="Toggle Sidebar">
				<span class="icon-bg">
					<i class="ti ti-menu"></i>
				</span>
            </a>
		</span>

        <a class="navbar-brand" href="{{ route('orders.my_orders') }}">
            移动工厂
        </a>

    </div>
    <!-- logo-area -->

    <ul class="nav navbar-nav toolbar pull-right">

        <li class="toolbar-icon-bg hidden-xs" id="trigger-fullscreen">
            <a href="#" class="toggle-fullscreen"><span class="icon-bg"><i class="ti ti-fullscreen"></i></span></i></a>
        </li>

        <li class="dropdown toolbar-icon-bg">
            <a href="#" class="hasnotifications dropdown-toggle" data-toggle='dropdown'>
                <span class="icon-bg"><i class="ti ti-bell"></i></span>
                @if(!empty($message))
                    @if(is_string($message))
                        <span class="badge badge-deeporange">1</span>
                    @elseif(is_array($message))
                        <span class="badge badge-deeporange">{{ count($message) }}</span>
                    @endif
                @endif
            </a>

            @if(!empty($message))
                <div class="dropdown-menu notifications arrow">
                    <div class="topnav-dropdown-header">
                        <span>Notifications</span>
                    </div>
                    <div class="scroll-pane">
                        <ul class="media-list scroll-content">
                            @if(is_string($message))
                                <li class="media notification-success">
                                    <a href="#">
                                        <div class="media-left">
                                            <span class="notification-icon"><i class="ti ti-check"></i></span>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="notification-heading">{{ $message }}</h4>
                                        </div>
                                    </a>
                                </li>
                            @elseif(is_array($message))
                                @foreach($message as $m)
                                    <li class="media notification-success">
                                        <a href="#">
                                            <div class="media-left">
                                                <span class="notification-icon"><i class="ti ti-check"></i></span>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="notification-heading">{{ $m }}</h4>
                                            </div>
                                        </a>
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
            @endif
        </li>

        <li class="dropdown toolbar-icon-bg">
            <a href="#" class="hasnotifications dropdown-toggle" data-toggle='dropdown'><span class="icon-bg"><i
                            class="ti ti-layout-grid3-alt"></i></span></a>
            <ul class="dropdown-menu userinfo arrow">
                <li><a href="#/"><i class="ti ti-user"></i><span>Profile</span><span
                                class="badge badge-info pull-right">80%</span></a></li>
                <li><a href="#/"><i class="ti ti-panel"></i><span>Account</span></a></li>
                <li><a href="#/"><i class="ti ti-settings"></i><span>Settings</span></a></li>
                <li class="divider"></li>
                <li><a href="{{ route('dashboard.logout') }}"><i class="ti ti-shift-right"></i><span>Sign Out</span></a>
                </li>
            </ul>
        </li>

    </ul>

</header>
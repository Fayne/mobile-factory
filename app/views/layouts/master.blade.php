@include('layouts.partials.head')

<body class="animated-content">
@include('layouts.partials.navbar')
<div id="wrapper">
    <div id="layout-static">
        @include('layouts.partials.sidebar')
        <div class="static-content-wrapper">
            @yield('content')

            @include('layouts.partials.foot')
        </div>
    </div>
    @include('layouts.partials.options')
</div>

@if (App::environment('local'))
    <script type="text/javascript" src="/src/js/jquery-1.10.2.min.js"></script>
    <!-- Load jQuery -->
    <script type="text/javascript" src="/src/js/jqueryui-1.10.3.min.js"></script>
    <!-- Load jQueryUI -->
    <script type="text/javascript" src="/src/js/bootstrap.min.js"></script>
    <!-- Load Bootstrap -->
    <script type="text/javascript" src="/src/js/enquire.min.js"></script>
    <!-- Load Enquire -->
    <script type="text/javascript" src="/src/plugins/velocityjs/velocity.min.js"></script>
    <!-- Load Velocity for Animated Content -->
    <script type="text/javascript" src="/src/plugins/velocityjs/velocity.ui.min.js"></script>
    <script type="text/javascript" src="/src/plugins/wijets/wijets.js"></script>
    <!-- Wijet -->
    <script type="text/javascript" src="/src/plugins/codeprettifier/prettify.js"></script>
    <!-- Code Prettifier  -->
    <script type="text/javascript" src="/src/plugins/bootstrap-switch/bootstrap-switch.js"></script>
    <!-- Swith/Toggle Button -->
    <script type="text/javascript" src="/src/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js"></script>
    <!-- Bootstrap Tabdrop -->
    <script type="text/javascript" src="/src/plugins/iCheck/icheck.min.js"></script>
    <!-- iCheck -->
    <script type="text/javascript" src="/src/plugins/nanoScroller/js/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script type="text/javascript" src="/src/js/application.js"></script>
    <!-- End loading site level scripts -->
    <!-- Load page level scripts-->

    <script type="text/javascript" src="/src/plugins/sparklines/jquery.sparklines.min.js"></script>
    <!-- Sparkline -->
    <script type="text/javascript" src="/src/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <!-- jVectorMap -->
    <script type="text/javascript" src="/src/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jVectorMap -->
    <script type="text/javascript" src="/src/plugins/switchery/switchery.js"></script>
    <!-- Switchery -->
    <script type="text/javascript" src="/src/plugins/fullcalendar/moment.min.js"></script>
    <!-- Moment.js Dependency -->
    <script type="text/javascript" src="/src/plugins/fullcalendar/fullcalendar.min.js"></script>
    <!-- Calendar Plugin -->
    {{--<script type="text/javascript" src="/src/demo/demo-index.js"></script>--}}
    <!-- Initialize scripts for this page-->
    <!-- End loading page level scripts-->
@else
    <script type="text/javascript" src="/dist/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="/dist/js/jqueryui-1.10.3.min.js"></script>
    <script type="text/javascript" src="/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/dist/js/enquire.min.js"></script>
    <script type="text/javascript" src="/dist/plugins/velocityjs/velocity.min.js"></script>
    <script type="text/javascript" src="/dist/plugins/velocityjs/velocity.ui.min.js"></script>
    <script type="text/javascript" src="/dist/plugins/wijets/wijets.js"></script>
    <script type="text/javascript" src="/dist/plugins/codeprettifier/prettify.js"></script>
    <script type="text/javascript" src="/dist/plugins/bootstrap-switch/bootstrap-switch.js"></script>
    <script type="text/javascript" src="/dist/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js"></script>
    <script type="text/javascript" src="/dist/plugins/iCheck/icheck.min.js"></script>
    <script type="text/javascript" src="/dist/plugins/nanoScroller/js/jquery.nanoscroller.min.js"></script>
    <script type="text/javascript" src="/dist/js/application.js"></script>
    <script type="text/javascript" src="/dist/plugins/sparklines/jquery.sparklines.min.js"></script>
    <script type="text/javascript" src="/dist/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script type="text/javascript" src="/dist/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script type="text/javascript" src="/dist/plugins/switchery/switchery.js"></script>
    <script type="text/javascript" src="/dist/plugins/fullcalendar/moment.min.js"></script>
    <script type="text/javascript" src="/dist/plugins/fullcalendar/fullcalendar.min.js"></script>
    {{--<script type="text/javascript" src="/dist/demo/demo-index.js"></script>--}}
@endif
</body>
</html>
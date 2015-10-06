@include('layouts.partials.head_with_scripts')

<body class="animated-content sidebar-collapsed">
@include('layouts.partials.navbar')
<div id="wrapper">
    <div id="layout-static">
        @include('layouts.partials.sidebar')
        <div class="static-content-wrapper">
            @yield('content')

            @include('layouts.partials.foot')
        </div>
    </div>
</div>

</body>
</html>
<!DOCTYPE html>
<html lang="en" class="coming-soon">
<head>
    <meta charset="utf-8">
    <title>Login Form</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="author" content="KaijuThemes">

    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600' rel='stylesheet'
          type='text/css'>
    @if (App::environment('local'))
        <link type="text/css" href="/src/plugins/iCheck/skins/minimal/blue.css" rel="stylesheet">
        <link type="text/css" href="/src/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link type="text/css" href="/src/fonts/themify-icons/themify-icons.css" rel="stylesheet">
        <!-- Themify Icons -->
        <link type="text/css" href="/src/css/styles.css" rel="stylesheet">
    @else
        <link type="text/css" href="/dist/plugins/iCheck/skins/minimal/blue.css" rel="stylesheet">
        <link type="text/css" href="/dist/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link type="text/css" href="/dist/fonts/themify-icons/themify-icons.css" rel="stylesheet">
        <!-- Themify Icons -->
        <link type="text/css" href="/dist/css/styles.css" rel="stylesheet">
    @endif

</head>

<body class="focused-form animated-content">

@yield('content')

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
    <script type="text/javascript" src="/src/demo/demo.js"></script>
    <script type="text/javascript" src="/src/demo/demo-switcher.js"></script>

    <!-- End loading site level scripts -->
    <!-- Load page level scripts-->
@else
    <script type="text/javascript" src="/dist/js/jquery-1.10.2.min.js"></script>
    <!-- Load jQuery -->
    <script type="text/javascript" src="/dist/js/jqueryui-1.10.3.min.js"></script>
    <!-- Load jQueryUI -->
    <script type="text/javascript" src="/dist/js/bootstrap.min.js"></script>
    <!-- Load Bootstrap -->
    <script type="text/javascript" src="/dist/js/enquire.min.js"></script>
    <!-- Load Enquire -->

    <script type="text/javascript" src="/dist/plugins/velocityjs/velocity.min.js"></script>
    <!-- Load Velocity for Animated Content -->
    <script type="text/javascript" src="/dist/plugins/velocityjs/velocity.ui.min.js"></script>

    <script type="text/javascript" src="/dist/plugins/wijets/wijets.js"></script>
    <!-- Wijet -->

    <script type="text/javascript" src="/dist/plugins/codeprettifier/prettify.js"></script>
    <!-- Code Prettifier  -->
    <script type="text/javascript" src="/dist/plugins/bootstrap-switch/bootstrap-switch.js"></script>
    <!-- Swith/Toggle Button -->

    <script type="text/javascript" src="/dist/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js"></script>
    <!-- Bootstrap Tabdrop -->

    <script type="text/javascript" src="/dist/plugins/iCheck/icheck.min.js"></script>
    <!-- iCheck -->

    <script type="text/javascript" src="/dist/plugins/nanoScroller/js/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->

    <script type="text/javascript" src="/dist/js/application.js"></script>
    <script type="text/javascript" src="/dist/demo/demo.js"></script>
    <script type="text/javascript" src="/dist/demo/demo-switcher.js"></script>

@endif

            <!-- End loading page level scripts-->
</body>
</html>
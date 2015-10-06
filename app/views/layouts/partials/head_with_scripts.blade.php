<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Mobile Factory</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="description" content="Avenxo Admin Theme">
    <meta name="author" content="KaijuThemes">

    <link type='text/css' href='http://fonts.useso.com/css?family=Source+Sans+Pro:300,400,400italic,600'
          rel='stylesheet'>

    @if (App::environment('local'))
        <link type="text/css" href="/src/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link type="text/css" href="/src/fonts/themify-icons/themify-icons.css" rel="stylesheet">
        <!-- Themify Icons -->
        <link type="text/css" href="/src/css/styles.css" rel="stylesheet">
        <!-- Core CSS with all styles -->

        <link type="text/css" href="/src/plugins/codeprettifier/prettify.css" rel="stylesheet">
        <!-- Code Prettifier -->
        <link type="text/css" href="/src/plugins/iCheck/skins/minimal/blue.css" rel="stylesheet">
        <!-- iCheck -->

        <!--[if lt IE 10]>
        <script type="text/javascript" src="/src/js/media.match.min.js"></script>
        <script type="text/javascript" src="/src/js/respond.min.js"></script>
        <script type="text/javascript" src="/src/js/placeholder.min.js"></script>
        <![endif]-->
        <!-- The following CSS are included as plugins and can be removed if unused-->

        <link type="text/css" href="/src/plugins/fullcalendar/fullcalendar.css" rel="stylesheet">
        <!-- FullCalendar -->
        <link type="text/css" href="/src/plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">
        <!-- jVectorMap -->
        <link type="text/css" href="/src/plugins/switchery/switchery.css" rel="stylesheet">
        <!-- Switchery -->

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
        <script src="/src/plugins/charts-flot/jquery.flot.min.js"></script>
        <script src="/src/plugins/charts-flot/jquery.flot.pie.min.js"></script>

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
        <script type="text/javascript" src="/src/js/main.js"></script>
        <!-- Initialize scripts for this page-->
        <!-- End loading page level scripts-->
    @else
        <link type="text/css" href="/dist/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link type="text/css" href="/dist/fonts/themify-icons/themify-icons.css" rel="stylesheet">
        <link type="text/css" href="/dist/css/styles.css" rel="stylesheet">
        <link type="text/css" href="/dist/plugins/codeprettifier/prettify.css" rel="stylesheet">
        <link type="text/css" href="/dist/plugins/iCheck/skins/minimal/blue.css" rel="stylesheet">
        <link type="text/css" href="/dist/plugins/fullcalendar/fullcalendar.css" rel="stylesheet">
        <link type="text/css" href="/dist/plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">
        <link type="text/css" href="/dist/plugins/switchery/switchery.css" rel="stylesheet">

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
        <script type="text/javascript" src="/dist/plugins/charts-flot/jquery.flot.min.js"></script>
        <script type="text/javascript" src="/dist/plugins/charts-flot/jquery.flot.pie.min.js"></script>
        <script type="text/javascript" src="/dist/plugins/sparklines/jquery.sparklines.min.js"></script>
        <script type="text/javascript" src="/dist/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
        <script type="text/javascript" src="/dist/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <script type="text/javascript" src="/dist/plugins/switchery/switchery.js"></script>
        <script type="text/javascript" src="/dist/plugins/fullcalendar/moment.min.js"></script>
        <script type="text/javascript" src="/dist/plugins/fullcalendar/fullcalendar.min.js"></script>
        <script type="text/javascript" src="/dist/js/main.js"></script>
@endif

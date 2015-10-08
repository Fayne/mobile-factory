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

    {{--<link type='text/css' href='http://fonts.useso.com/css?family=Source+Sans+Pro:300,400,400italic,600'--}}
          {{--rel='stylesheet'>--}}

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
    @else
        <link type="text/css" href="/dist/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link type="text/css" href="/dist/fonts/themify-icons/themify-icons.css" rel="stylesheet">
        <link type="text/css" href="/dist/css/styles.css" rel="stylesheet">
        <link type="text/css" href="/dist/plugins/codeprettifier/prettify.css" rel="stylesheet">
        <link type="text/css" href="/dist/plugins/iCheck/skins/minimal/blue.css" rel="stylesheet">
        <link type="text/css" href="/dist/plugins/fullcalendar/fullcalendar.css" rel="stylesheet">
        <link type="text/css" href="/dist/plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">
        <link type="text/css" href="/dist/plugins/switchery/switchery.css" rel="stylesheet">
    @endif
</head>
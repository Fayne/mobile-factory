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
    <meta name="author" content="Fayne">

    @if (App::environment('local'))
        <link type="text/css" href="/src/css/landing.css" rel="stylesheet">
    @else
        <link type="text/css" href="/dist/css/landing.css" rel="stylesheet">
    @endif

</head>

<body>

@yield('content')

</body>
</html>
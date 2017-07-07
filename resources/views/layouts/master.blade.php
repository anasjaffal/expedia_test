<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Expedia - Anas Jaffal</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="shortcut icon" href="img/favicon.ico" />
    <!-- CSS FILES -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/supersized.css">
    <link rel="stylesheet" href="css/supersized.shutter.css">
    <link rel="stylesheet" href="css/flexslider.css">
    <link rel="stylesheet" href="css/prettyPhoto.css">
    <link rel="stylesheet" href="css/datepicker.css">
    <link rel="stylesheet" href="css/selectordie.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/2035.responsive.css">

    <script src="js/vendor/modernizr-2.8.3-respond-1.1.0.min.js"></script>
    <!-- Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="wrapper">

        @include('layouts.partials._navigation')

        @include('layouts.partials._header')

        @yield('content')
        <!--[if lt IE 7]>
        <![endif]-->

@include('layouts.partials._footer')
</div>

</body>
</html>
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
    <link rel="shortcut icon" href="{{asset('/img/favicon.ico')}}" />
    <!-- CSS FILES -->
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/supersized.css')}}">
    <link rel="stylesheet" href="{{asset('/css/supersized.shutter.css')}}">
    <link rel="stylesheet" href="{{asset('/css/flexslider.css')}}">
    <link rel="stylesheet" href="{{asset('/css/prettyPhoto.css')}}">
    <link rel="stylesheet" href="{{asset('/css/datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('/css/selectordie.css')}}">
    <link rel="stylesheet" href="{{asset('/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('/css/2035.responsive.css')}}">

    <script src="{{asset('/js/vendor/modernizr-2.8.3-respond-1.1.0.min.js')}}"></script>
    <!-- Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="{{asset('/js/respond.min.js')}}"></script>
    <![endif]-->
</head>
<body id="page-top" class="index">
<div id="wrapper">
    <div id="home">

@include('layouts.partials._navigation')

@include('layouts.partials._header')

@yield('content')

@include('layouts.partials._footer')
    </div>
</div>

</body>
</html>
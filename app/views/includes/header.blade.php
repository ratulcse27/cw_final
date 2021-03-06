<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{$title or 'Admin'}} - {{Config::get('customConfig.siteName')}}</title>


    {{HTML::style('themes/bootshop/bootstrap.min.css')}}

    {{HTML::style('themes/css/base.css')}}

    {{HTML::style('themes/css/bootstrap-responsive.min.css')}}

    {{HTML::style('themes/css/font-awesome.css')}}

    {{HTML::style('themes/js/google-code-prettify/prettify.css')}}
    @yield('style')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
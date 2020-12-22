<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="responsive, template, portfolio, html, css, javascript, Theme" />
    <meta name="author" content="">
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    @include('website.layout.styles')
</head>
<body>

        @yield('content')

        @include('website.layout.footer')

        @include('website.layout.scripts')

</body>
</html>

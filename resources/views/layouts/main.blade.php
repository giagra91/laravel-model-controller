<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage @yield('title')</title>
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    @yield('head-script')
</head>
<body>
    @include('partials.header')


    @yield('main-content')


    @include('partials.footer')

    @yield('footer-script')
</body>
</html>
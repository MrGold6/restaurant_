<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title-page')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous"> 
</head>
<body>
    @include('user.includes.header')
    
    @include('user.includes.hero')

    @include('user.includes.white-section1')

    @include('user.includes.second-image')

    @include('user.includes.white-section2')

    @include('user.includes.info')

    @include('user.includes.menu')

    @include('user.includes.booking')
 
    @include('user.includes.footer')
</body>
</html> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Boboti</title>
    <script src="https://use.fontawesome.com/2f5e623491.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
    @if(\Illuminate\Support\Facades\Session::has('Log'))
        {{ \Illuminate\Support\Facades\Session::get('Log') }}
    @endif
</body>
<script type="text/javascript" src="{{ URL::asset('owlcarousel/owl.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('owlcarousel/owl.js') }}"></script>
</html>

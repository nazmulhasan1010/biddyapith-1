<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title>{{ Config::get('app.name') }} || @yield('title')</title>

    {{--  bootstrap css  --}}
    <link rel="stylesheet" href="{{asset('public/frontend/css/bootstrap.min.css')}}"/>

    {{--  font awesome  --}}
    <script src="https://kit.fontawesome.com/2e7d7272e8.js" crossorigin="anonymous"></script>

    {{--  simple line icon css  --}}
    <link rel="stylesheet" href="{{asset('public/frontend/css/simple-line-icons.css')}}"/>

    {{--  slick css  --}}
    <link rel="stylesheet" href="{{asset('public/frontend/css/slick.css')}}"/>

    {{--  slick theme css  --}}
    <link rel="stylesheet" href="{{asset('public/frontend/css/slick-theme.css')}}"/>

    {{--  owl carousel css  --}}
    <link rel="stylesheet" href="{{asset('public/frontend/css/owl.carousel.min.css')}}"/>

    {{--  custom css  --}}
    <link href="{{asset('public/frontend/css/style.css')}}" rel="stylesheet"/>
    @stack('pageCss')
</head>
<body>

{{--header--}}
@include('frontEnd.partials.header')

{{--contents--}}
@yield('content')

{{--footer--}}
@include('frontEnd.partials.footer')


{{--jQuery--}}
<script src="{{asset('public/frontend/js/jquery.min.js')}}"></script>

{{--tether js--}}
<script src="{{asset('public/frontend/js/tether.min.js')}}"></script>

{{--bootstrap js--}}
<script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>

{{--slick js--}}
<script src="{{asset('public/frontend/js/slick.min.js')}}"></script>

{{--waypoints js--}}
<script src="{{asset('public/frontend/js/waypoints.min.js')}}"></script>

{{--counterup js--}}
<script src="{{asset('public/frontend/js/counterup.min.js')}}"></script>

{{--instafeed js--}}
<script src="{{asset('public/frontend/js/instafeed.min.js')}}"></script>

{{--owl.carousel js--}}
<script src="{{asset('public/frontend/js/owl.carousel.min.js')}}"></script>

{{--validate js--}}
<script src="{{asset('public/frontend/js/validate.js')}}"></script>

{{--tweetie js--}}
<script src="{{asset('public/frontend/js/tweetie.min.js')}}"></script>

{{--subscribe js--}}
<script src="{{asset('public/frontend/js/subscribe.js')}}"></script>

{{--custom js--}}
<script src="{{asset('public/frontend/js/script.js')}}"></script>

{{--page js--}}
@stack('pageJs')
</body>
</html>

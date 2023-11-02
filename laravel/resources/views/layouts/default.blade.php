<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.head')
</head>
<body>
    @include('includes.header')

    @yield('content')

    @include('includes.footer')

    @yield('pagespecificscripts')

    @auth
        <script src="{{ asset('js/enable-push.js') }}" defer></script>
    @endauth
</body>
</html>

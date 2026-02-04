<!DOCTYPE html>
<html lang="bg" class="h-100" data-bs-theme="light">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
</head>

<body class="d-flex flex-column h-100 {{ request()->routeIs('home') ? 'home' : '' }}">
    @include('layouts.partials.header')
    <main class="flex-grow-1">
        <div class="w-100 h-100">
            @yield('content')
        </div>
    </main>
    @include('layouts.partials.footer')
    <script src="{{ asset('assets/js/swiper.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="bg" class="h-100" data-bs-theme="light">

<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'FE Startup' }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sofia+Sans:ital,wght@0,1..1000;1,1..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body class="d-flex flex-column h-100">
    @include('layouts.partials.header')
    <main class="flex-grow-1">
        <div class="w-100 h-100">
            @yield('content')
        </div>
    </main>
    @include('layouts.partials.footer')
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
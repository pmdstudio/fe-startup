<!DOCTYPE html>
<html lang="bg" class="h-100" data-bs-theme="light">

<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'FE Startup' }}</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body class="d-flex flex-column h-100">
    @include('layouts.partials.header')
    <main class="flex-grow-1">
        <div class="container h-100 py-4">
            @yield('content')
        </div>
    </main>
    @include('layouts.partials.footer')
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
@php
$data = \App\Helpers\DataHelper::load();
@endphp

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <span class="fa-stack">
                <i class="fa-solid fa-square fa-stack-2x"></i>
                <i class="fas fa-bolt-lightning fa-stack-1x fa-inverse"></i>
            </span> FE Starter
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav ms-auto">
                @foreach($data['menu'] as $item)
                <li class="nav-item">
                    <a class="nav-link" href="{{ route($item['route']) }}">
                        {{ $item['title'] }}
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>
@php
$data = \App\Helpers\DataHelper::load();
@endphp

<nav class="bg-white shadow-sm">
    <div class="container">
        <ul class="nav justify-content-end">
            @foreach($data['top_menu'] as $item)
            <li class="nav-item">
                <a class="nav-link" href="{{ route($item['route']) }}">
                    {{ $item['title'] }}
                </a>
            </li>
            @endforeach
            <li class="nav-item">
                <a href="#" class="nav-link"><i class="fa fa-search"></i></a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">EN</a>
            </li>

        </ul>
    </div>
</nav>


<header>
    <div class="container">
        <div class="py-5">
            <a href="{{ route('home') }}" class="brand">
                <img src="{{ asset('assets/img/logo-nif-full.svg') }}" alt="Logo" class="logo">
            </a>
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary rounded-lg px-3 py-0">

            <button class="navbar-toggler my-2" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav mx-auto">
                    @foreach($data['menu'] as $item)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route($item['route']) }}">
                            {{ $item['title'] }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>

        </nav>
    </div>
</header>
@php
$menu = \App\Helpers\DataHelper::load()['menu'];
$footerMenu = \App\Helpers\DataHelper::load()['footerMenu'];
@endphp

<footer class="mt-auto">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-4">
                <div class="card bg-transparent h-100">
                    <div class="card-body">
                        <a href="{{ route('home') }}" class="brand">
                            <img src="{{ asset('assets/img/logo-nif-white.svg') }}" alt="Logo" class="logo w-100">
                        </a>
                        <p class="text-white mt-4">
                            <abbr>Адрес</abbr><br>
                            гр. София – 1000, ул. "Княз Александър I" 12<br>
                            <abbr>E</abbr>: docs@mig.government.bg<br>
                            <abbr>Т</abbr>: +359 2 807 5381
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card bg-transparent h-100">
                    <div class="card-body">
                        <ul class="list-unstyled">
                            @foreach($menu as $link)
                            <li><a href="{{ route($link['route']) }}">{{ $link['title'] }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card bg-transparent h-100">
                    <div class="card-body">
                        <ul class="list-unstyled">
                            @foreach($footerMenu as $link)
                            <li><a href="{{ route($link['route']) }}">{{ $link['title'] }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
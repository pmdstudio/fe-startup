@extends('layouts.app')

@section('content')
@php
$page = \App\Helpers\DataHelper::load()['home'];
$news = \App\Helpers\DataHelper::load()['news'];
$programs = \App\Helpers\DataHelper::load()['programs'];
@endphp


<section class="home bg-transparent my-5">
    <div class="container">
        <div class="row gy-4">
            <div class="col-md-8">
                <h3>
                    Програма за насърчаване на научноизследователската и иновационната дейност чрез подкрепа за разработване, внедряване и мащабиране на високотехнологични решения, базирани на изкуствен интелект, дигитализация, зелени технологии и устойчиво индустриално развитие в българските предприятия
                </h3>
                <p>
                    Програмата е насочена към стимулиране на конкурентоспособността и технологичната трансформация на българските предприятия чрез целенасочено финансиране на иновационни проекти с висока добавена стойност.
                </p>
                <a href="#" class="btn btn-outline-primary">
                    Виж повече
                </a>
            </div>
            <div class="col-md-4">
                <div class="card info">
                    <div class="card-body bg p-4">
                        <h3 class="card-title mb-0 fw-bold">Онлайн кандидатстване през ИСУН</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">

        <div class="row gy-4">
            <!-- blocks section -->
            @foreach($page['blocks'] as $block)
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body p-4">
                        <figure class="card-img-top">
                            <img src="{{ asset('assets/img/' . $block['img']) }}">
                        </figure>
                        <h3 class="card-title">{{ $block['title'] }}</h3>
                        <p class="card-text">
                            {{ $block['text'] }}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- end blocks section -->
        </div>
    </div>
</section>

<section class="programs bg-gradient-blue">
    <div class="container">
        <h1 class="title">Активни Програми</h1>
        <div class="row gy-4">
            <!-- programs section -->
            @foreach($programs['items'] as $program)
            <?php
            $card_class = $program['status'] === 1 ? 'active' : ($program['status'] === 2 ? 'upcomming' : 'past');
            $program_status = $program['status'] === 1 ? 'Активна' : ($program['status'] === 2 ? 'Предстояща' : 'Минала');
            ?>
            <div class="col-12">
                <div class="card {{  $card_class }}">
                    <div class="card-body p-0 mb-2">
                        <div class="row m-0">
                            <div class="col-sm-4 bg">
                                <h4 class="card-title px-4 m-0">
                                    <a href="#" class="stretched-link" title="{{ $program['title'] }}">{{ $program['title'] }}</a>
                                </h4>
                            </div>
                            <div class="col-sm-5">
                                <div class="p-4">{{ $program['summary'] }}</div>
                            </div>
                            <div class="col-sm-3">
                                <div class="p-4">
                                    <div class="d-flex justify-content-end">
                                        <span class="badge mb-4">
                                            {{ $program_status }}
                                        </span>
                                    </div>

                                    <p>
                                        <span class="fw-bold">Срок на изпълнение</span><br>
                                        {{ $program['period'] }}
                                    </p>
                                    <hr>
                                    <p>
                                        <span class="fw-bold">Бюджет</span><br>
                                        {{ $program['budget'] }} лв.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            @endforeach
            <!-- end programs section -->
        </div>
    </div>
</section>

<section class="news bg-light">
    <div class="container">
        <h1 class="title">{{ $news['title'] }}</h1>
        <div class="row">

            <!-- news section -->
            @foreach($news['items'] as $post)
            <div class="col-md-4">
                <div class="card">
                    <figure class="card-img-top">
                        <img src="{{ asset('assets/img/' . $post['img']) }}" class="img-fluid">
                    </figure>
                    <div class="card-body p-4">
                        <p class="text-secondary mb-2">
                            {{ $post['date'] }}
                        </p>
                        <a href="#" class="card-text stretched-link text-decoration-none fs-5">
                            {{ $post['title'] }}
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- end news section -->

        </div>

    </div>
</section>


<section class="news bg-white">
    <div class="container">
        <div class="row">

            <!-- news section -->
            @foreach($news['items'] as $post)
            <div class="col-md-4">
                <div class="card">
                    <figure class="card-img-top">
                        <img src="{{ asset('assets/img/' . $post['img']) }}" class="img-fluid">
                    </figure>
                    <div class="card-body p-4">
                        <p class="text-secondary mb-2">
                            {{ $post['date'] }}
                        </p>
                        <a href="#" class="card-text stretched-link text-decoration-none fs-5">
                            {{ $post['title'] }}
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- end news section -->

        </div>
    </div>
</section>

@endsection
@extends('layouts.app')

@section('content')
@php
$programs = \App\Helpers\DataHelper::load()['programs']['items'];
$program = \App\Helpers\DataHelper::load()['programs']['items'][0];
@endphp

@section('title', $program['title'])
<div class="page programs container py-4">
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Начало</a></li>
            <li class="breadcrumb-item"><a href="{{ route('programs') }}">Програми</a></li>
            <li class="breadcrumb-item active">{{ $program['title'] }}</li>
        </ol>
    </nav>
    <div class="py-4">

        <div class="card bg-light mb-4">
            <div class="row">
                <div class="col-lg-4 d-flex order-2 order-lg-1">
                    <div class="card-body p-4 justify-content-center d-flex flex-column">

                        <h2 class="card-title">
                            {{ $program['title'] }}
                        </h2>
                        <p class="text-secondary mb-2">
                            {{ $program['date'] }}
                        </p>
                    </div>
                </div>
                <div class="col-lg-8 order-1 order-lg-2">
                    <figure class="m-0">
                        <img src="{{ asset('assets/img/program-wallpaper.jpg') }}" class="img-fluid">
                    </figure>

                </div>
            </div>

        </div>


        <div class="row">
            <div class="col-lg-4 d-flex flex-column mt-4 order-2 order-lg-1">
                <!-- programs sidebar -->
                <div class="more-news position-sticky top-0">
                    <h3 class="my-4">
                        Други програми
                    </h3>
                    @foreach(array_slice($programs, 0, 4) as $program)
                    <p>
                        <a href="{{ route('programs-single') }}">{{ $program['title'] }}</a>
                        <br>
                        {{ $program['date'] }}
                    </p>
                    @endforeach
                </div>
                <!-- end programs sidebar -->
            </div>

            <div class="col-lg-8 page-content mt-4 order-1 order-lg-2">
                <div class="row mb-4 gy-4">
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body bg-info p-4">
                                <h5>Статус</h5>
                                Активна
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body bg-info p-4">
                                <h5>Предприятие</h5>
                                Микро
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body bg-info p-4">
                                <h5>Район на дейсност</h5>
                                Градски
                            </div>
                        </div>
                    </div>
                </div>
                <p class="fw-bold">
                    {{ $program['summary'] }}
                </p>
                <p>
                    Сред предложенията, които намират място в листата с одобрени проекти, се нареждат система за
                    мониторинг с цел предотвратяване на тежки заболявания, технология за производство на
                    пожароустойчиви, енергоспестяващи и изолационни строителни елементи от стъклени отпадъци,
                    иновационен подход за биопринтирани хрущялни импланти, решение за замърсяване на микропластмаси във
                    водна среда, решение за оценка на замърсяване с микропластмаси във водата, както и иновативно
                    образователно приложение. </p>
                <p>
                    Всички те са част от четирите приоритетни оси, които Фонда подкрепя, а именно &bdquo;Информатика и
                    информационни и комуникационни технологии&ldquo;, &bdquo;Мехатроника и чисти технологии&ldquo;,
                    &bdquo;Индустрия за здравословен живот и биотехнологии&ldquo; и &bdquo;Нови технологии в креативните
                    и рекреативните индустрии&ldquo;.
                    Проектите в настоящата сесия бяха селектирани от общо 127 предложения, а 17 от тях ще се изпълнят в
                    партньорство с организации за научни изследвания и разпространение на знания.</p>
            </div>
        </div>
    </div>


    @endsection
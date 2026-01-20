@extends('layouts.app')
@section('title', 'Активни програми')

@section('content')
@php
$programs = \App\Helpers\DataHelper::load()['programs'];
@endphp
<div class="news container py-4">
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Начало</a></li>
            <li class="breadcrumb-item active">Активни програми</li>
        </ol>
    </nav>
    <div class="page-content py-4">
        @include('pages.partials.programs-filter')
        <section class="programs mt-4">
            <div class="row mb-5 align-items-center">
                <div class="col-md-6">
                    <h1 class="title">Активни Програми</h1>
                </div>
                <div class="col-md-6 text-md-end text-sm-left">
                    Изберете изглед

                    <div class="btn-group" role="group">
                        <a href="#" class="btn btn-link pe-1"
                            onClick="document.querySelector('.programs').classList.add('grid'); document.querySelectorAll('.programs .btn-group a').forEach(el => el.classList.remove('active')); this.classList.add('active');">
                            <i class="fa-solid fa-grip fa-2x"></i>
                        </a>
                        <a href="#" class="btn btn-link ps-1 active"
                            onClick="document.querySelector('.programs').classList.remove('grid'); document.querySelectorAll('.programs .btn-group a').forEach(el => el.classList.remove('active')); this.classList.add('active');">
                            <i class="fa-regular fa-rectangle-list fa-2x"></i>
                        </a>
                    </div>

                </div>
            </div>

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
                                <div class="col-md-4 bg">
                                    <h4 class="card-title p-4 m-0">
                                        <a href="#" class="stretched-link"
                                            title="{{ $program['title'] }}">{{ $program['title'] }}</a>
                                    </h4>
                                </div>
                                <div class="col-md-5">
                                    <div class="p-4">{{ $program['summary'] }}</div>
                                </div>
                                <div class="col-md-3">
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
            <div class="row mt-4">
                <div class="col-12">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#"><i
                                        class="fa-solid fa-chevron-left"></i></a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link active" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i
                                        class="fa-solid fa-chevron-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>

        </section>

    </div>


    @endsection
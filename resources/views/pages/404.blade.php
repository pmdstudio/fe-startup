@extends('layouts.app')

@section('content')
<div class="page 404 h-100 align-items-center d-flex">
    <div class="container">
        <div class="row ">
            <div class="col">
                <h1 class="mb-3 display-1 fw-bold text-danger">404</h1>
                <h1 class="mb-3">Тази страница не съществува</h1>
                <p>Ето няколко от най-честите причини за това:</p>
                <ul>
                    <li>Грешно въведен адрес
                    <li>Грешка при копиране на адреса
                    <li>Непълен адрес
                    <li>Преместено съдържание
                    <li>Изтрита страница
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
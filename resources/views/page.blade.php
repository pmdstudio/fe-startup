@extends('layouts.app')

@section('content')
@php
$page = \App\Helpers\DataHelper::load()['page'];
@endphp
<div class="container py-4">
    <h1>{{ $page['title'] }}</h1>
    <h6>{{ $page['subtitle'] }}</h6>
    <p>{{ $page['content'] }}</p>
</div>

@endsection
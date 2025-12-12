<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Helpers\DataHelper;

$data = DataHelper::load();

Route::get('/', function () {
    return view('home', ['title' => 'Начало']);
})->name('home');

// Генерираме страници от менюто
foreach ($data['menu'] as $item) {

    $page = $item['route'];
    $title = $item['title'];

    Route::get("/{$page}", function () use ($page, $title) {

        if (!View::exists($page)) {
            return response()->view("404", ['title' => '404'], 404);
        }

        return view($page, ['title' => $title]);
    })->name($page);
}

Route::get('/{page}', function (string $page) {

    if (!View::exists($page)) {
        return response()->view("404", ['title' => '404'], 404);
    }

    return view($page, ['title' => ucfirst($page)]);
});

<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Helpers\DataHelper;

$data = DataHelper::load();

Route::get('/', function () {
    return view('pages.home', ['title' => 'Начало']);
})->name('home');

// Генерираме страници от менюто
foreach (array_merge($data['menu'], $data['footer_menu'], $data['top_menu']) as $item) {

    if (isset($item['submenu']) && count($item['submenu']) > 0) {
        foreach ($item['submenu'] as $subpage) {
            $page = $subpage['route'];
            $title = $subpage['title'];

            Route::get("/{$page}", function () use ($page, $title) {

                if (!View::exists("pages." . $page)) {
                    return response()->view("pages.404", ['title' => '404'], 404);
                }

                return view("pages.{$page}", ['title' => $title]);
            })->name($page);
        }
    } else {

        $page = $item['route'];
        $title = $item['title'];

        Route::get("/{$page}", function () use ($page, $title) {

            if (!View::exists("pages." . $page)) {
                return response()->view("pages.404", ['title' => '404'], 404);
            }

            return view("pages.{$page}", ['title' => $title]);
        })->name($page);
    }
}

Route::get('/{page}', function (string $page) {

    if (!View::exists("pages.{$page}")) {
        return response()->view("pages.404", ['title' => '404'], 404);
    }

    return view("pages.{$page}", ['title' => ucfirst($page)]);
});

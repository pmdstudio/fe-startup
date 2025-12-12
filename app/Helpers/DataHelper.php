<?php

namespace App\Helpers;

class DataHelper
{
    public static function load()
    {
        $path = storage_path('app/data.json');
        return json_decode(file_get_contents($path), true);
    }
}

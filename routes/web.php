<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages/index');
});
Route::get('/detail', function () {
    return view('pages/detail');
});

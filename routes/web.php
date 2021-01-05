<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages/index');
});
Route::get('/detail', function () {
    return view('pages/detail');
});
Route::get('/evaluate', function () {
    return view('pages/evaluate');
});
Route::get('/testconnect', function () {
    return view('test/testConnect');
});

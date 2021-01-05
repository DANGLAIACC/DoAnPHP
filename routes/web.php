<?php

use Illuminate\Support\Facades\Route;
use App\Models\Modal;
use App\Models\Version;

Route::get('/', function () {
    // $modals = Version::all()->getModals;
    // return view('pages/index') -> with(compact('modals'));
    return Version::all()->modals;
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

Route::get('/testAll', function () {
    $modal = Version::all();
    foreach ($modal as $item) {
        echo $item->strtext;
    }
});

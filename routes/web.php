<?php

use Illuminate\Support\Facades\Route;
use App\Models\Version;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    // câu đúng
    // return Version::with('modals')->find(11)->modals;

    // return Manu::with('versions')->find('iphone')->versions::with('modals')->find(11)->modals;

    return DB::select("SELECT b.*,a.id manu_id2 FROM manu a inner join version b on a.id = b.manu_id");
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

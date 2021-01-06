<?php

use Illuminate\Support\Facades\Route;
use App\Models\Version;
use Facade\FlareClient\View;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    // câu đúng
    // return Version::with('modals')->find(11)->modals;

    // return Manu::with('versions')->find('iphone')->versions::with('modals')->find(11)->modals;
    $result =
    DB::select("select mo.id,ma.strtext||' '||v.strtext||' '||mo.strtext phone_name,price,mo.img_small, manu_id,version_id,strurl, c.total, c.average from modal mo inner join version v on mo.version_id = v.id inner join manu ma on v.manu_id = ma.id inner join (select modal_id, count(usr) total, ROUND(avg(rate_star)) average from evaluate group by modal_id) c on mo.id = c.modal_id");
    return view('test.testQuery')->with(compact('result'));
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

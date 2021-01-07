<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/dtdd', function () {
    return redirect('/');
});
Route::get('/', function () {
    $result =
    DB::select("select mo.id, CONCAT(ma.strtext,' ',v.strtext,' ',mo.strtext) phone_name,price,mo.img_small, manu_id,version_id,strurl, c.total, c.average from modal mo inner join version v on mo.version_id = v.id inner join manu ma on v.manu_id = ma.id inner join (select modal_id, count(usr) total, ROUND(avg(rate_star)) average from evaluate group by modal_id) c on mo.id = c.modal_id");
    return view('pages.index')->with(compact('result'));
});
Route::get('/dtdd/{id}/{restURL}', 'App\Http\Controllers\DetailController@index');
Route::get('/addToCart/{id}', 'App\Http\Controllers\DetailController@addToCart');
Route::get('/evaluate/{id}/{restURL}', function ($id) {
    return view('pages/evaluate');
});
Route::get('/evaluate', function () {
    return view('pages/evaluate');
});
Route::get('/testconnect', function () {
    return view('test/testConnect');
});
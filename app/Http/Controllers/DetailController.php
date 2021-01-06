<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Support\Facades\DB;

class DetailController extends Controller
{
    public function index($id)
    {
        $query = "select mo.*,c.average, concat(ma.strtext,' ',v.strtext,' ',mo.strtext) phoneName, ma.strtext manu_strtext, ma.strtext, img_slider,version_id from modal mo inner join version v on mo.version_id = v.id inner join manu ma on v.manu_id = ma.id inner join (select modal_id, count(usr) total, ROUND(avg(rate_star)) average from evaluate group by modal_id) c on mo.id = c.modal_id where mo.id = " . $id;
        $result = DB::select($query);
        $item = $result[0];

        $qryTop3Evaluate = 'select a.usr, to_char(a.time_up, "DD-MM-YYYY") time_up, content,rate_star,to_char(time_resolved, "DD-MM-YYYY") time_resolved, handler,fullname from (select max(time_up) time_up,usr from evaluate where modal_id = $id group by usr order by time_up desc limit 3) a   join evaluate b on a.time_up = b.time_up and a.usr = b.usr inner join users c on a.usr = c.usr';
        
        // ddang lamf


        return view('pages.detail', compact(['item', '']));
    }
}

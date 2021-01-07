<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class DetailController extends Controller
{
    public function index($id)
    {
        $query = "select mo.*,c.average, concat(ma.strtext,' ',v.strtext,' ',mo.strtext) phoneName, ma.strtext manu_strtext, ma.strtext, img_slider,version_id from modal mo inner join version v on mo.version_id = v.id inner join manu ma on v.manu_id = ma.id inner join (select modal_id, count(usr) total, ROUND(avg(rate_star)) average from evaluate group by modal_id) c on mo.id = c.modal_id where mo.id = " . $id;
        $result = DB::select($query);
        $item = $result[0];

        $qryTop3Evaluate = 'select a.usr, DATE_FORMAT(a.time_up, "%d/%m/%Y") time_up, content,rate_star,DATE_FORMAT(time_resolved, "%d/%m/%Y") time_resolved, handler,fullname from (select max(time_up) time_up,usr from evaluate where modal_id = '.$id.' group by usr order by time_up desc limit 3) a   join evaluate b on a.time_up = b.time_up and a.usr = b.usr inner join users c on a.usr = c.usr';
        $top3Evaluate = DB::select($qryTop3Evaluate);
        
        $qryGetRateStar = 'select tinh from (select rate_star, count(*) tinh from evaluate where modal_id = '.$id.' group by rate_star) a right join (select distinct rate_star from evaluate order by rate_star desc) b on a.rate_star = b. rate_star';

        $rates = DB::select($qryGetRateStar);
        
        // return $result;
        // return $rates;
        // return $top3Evaluate;
        return view('pages.detail', compact(['item', 'top3Evaluate','rates']));

    }
    public function addToCart($id){
        $result = DB::select("select CONCAT(ma.strtext,' ',v.strtext,' ',mo.strtext) phoneName,price,mo.img_small from modal mo inner join version v on mo.version_id = v.id inner join manu ma on v.manu_id = ma.id where mo.id = ".$id);
        $item = $result[0];
        $cart = session()->get("cart");
        // giỏ hàng null
        if(!$cart){
            $cart = [
                $id => [
                    "name" => $item->phoneName,
                    "quantity" => 1,
                    "price" => $item->price,
                    "photo" => $item->img_small
                ]
            ];
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Thêm sản phẩm thành công nè!');
        }
        else if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Thêm sản phẩm thành công nè!');
        }else{
            $cart[$id] = [
                "name" => $item->phoneName,
                "quantity" => 1,
                "price" => $item->price,
                "photo" => $item->img_small
            ];
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Thêm sản phẩm thành công nè!');
        }
        // return $result;
    }
}

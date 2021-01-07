<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $userInfo = session()->get("userInfo");
        if ($userInfo)
            return redirect('/');
        return view('pages.login');
    }
    public function logout()
    {
        session()->forget('userInfo');
        return redirect('/');
    }
    public function checkLogin(Request $request)
    {
        $usr = $request->usr;
        $pwd = $request->pwd;
        $result = DB::select('select * from users where usr="' . $usr . '" and pwd = "' . $pwd . '"');
        if (count($result) == 1) {
            // return $result;
            $userInfo = [
                $usr => [
                    "name" => $result[0]->fullname,
                    "role" => $result[0]->roles,
                    "phone" => $result[0]->phoneNumber,
                    "address" => $result[0]->address,
                ]
            ];
            session()->put('userInfo', $userInfo);
            return redirect('/');
        }
        return redirect()->back()->with('fail', 'Đăng nhập thất bại nè!');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function users(){
        $data = DB::select("select * from users");
        return view('setData', ['data'=>$data]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function home(){
        return view('page.home');
    }
    public function dich_vu(){
        return view('page.service');
    }
    public function dich_vucon($slug){
        return view('page.sub_service',compact('slug'));
    }
}

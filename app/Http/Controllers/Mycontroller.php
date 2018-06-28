<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mycontroller extends Controller
{
public function xinchao(){
    echo "xin chao";
}
public function khoahoc($ten){
    echo "khoahoc ". $ten;
    return redirect()->route('myroute');
    }
    public function GetURL(Request $request){
    return $request->url();
}
}
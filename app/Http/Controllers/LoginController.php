<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
public function getLogin(){
  return view('dangnhap'); 
}
public function postLogin(Request $request){
    
        $username = $request['username'];
        $password = $request['password'];
        if(Auth::attempt(['name'=>$username,'password'=>$password]))
                return view('thangcong');
 else {
     echo "dang nhap that bai";
 }

}
}

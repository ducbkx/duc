<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{

    public function logins(Request $request)
    {
        $email = $request['email'];
        $password = $request['password'];
        if(Auth::attempt(['email'=>$email,'password'=>$password]))
                return view('thangcong');
 else {
     echo "dang nhap that bai";
 }
    }

}

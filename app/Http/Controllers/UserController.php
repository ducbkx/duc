<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use DB;

class UserController extends Controller
{
     public function showRegisterForm(){
    	return view('fontend.register');
    }

    public function storeUser(Request $request){
    	//dd($request->all());

    	$messages = [
		    'required' => 'Trường :attribute bắt buộc nhập.',
		    'email'    => 'Trường :attribute phải có định dạng email'
		];
		$validator = Validator::make($request->all(), [
            'name'     => 'required|max:255',
            'email'    => 'required|email',
            'password' => 'required|numeric|min:6|confirmed',
            'website'  => 'sometimes|required|url'

        ], $messages);

        if ($validator->fails()) {
            return redirect('register')
                    ->withErrors($validator)
                    ->withInput();
        } else {
        	// Lưu thông tin vào database, phần này sẽ giới thiệu ở bài về database

        	return redirect('register')
        			->with('message', 'Đăng ký thành công.');
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function create(){
        return view('customer');
    }
    public function store(Request $request)
    {
        $allRequest = $request->all();
        $userName = $request->all(username);
        $email = $request->all(email);
        $dataInsertToDatabase = array(
            'username'=>$userName,
            'email'=>$email,
        );
        $objUser = new User();
        $objUser->insert($dataInsertToDatabase);
        
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function store(Request $request){

        $data = $request->all();
//        $data = $request->only('email');
//        $data = $request->except('password');
//         $request->boolean()
//         $request->file()


        $email = $request->input('email');
        dd($email, $request->has('name'), $request->filled('email'));

        return 'store';
    }
}

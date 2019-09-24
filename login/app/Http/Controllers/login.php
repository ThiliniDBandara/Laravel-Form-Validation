<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class login extends Controller
{
function index(REQUEST $request)
    {
        $this->validate($request,[
        'name'=> 'required',
        'email'=> 'required|email',
        'password'=> 'required|min:5|max:20'
    ]);
    print_r($request->input());       }
}

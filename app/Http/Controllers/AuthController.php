<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function signUp(Request $request){
        return $request->name. $request-> password;
    }
}
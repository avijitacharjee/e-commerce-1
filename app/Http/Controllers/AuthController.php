<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function signUp(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:20',
            'email' => 'required',
            'phone' => 'required',
            'password' => 'required'
        ]);
        $user= new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = $request->password;
        $user->save();
        return "successfully saved";
    }
    public function signIn(Request $request){
        $validatedData = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        $user = DB::table('users')->where('email', $request->email)->first();
        if($user!=null){
            if($user->password==$request->password){
                return "Logged In";
            }else{
                return "Failed";
            }
        }
    }
}

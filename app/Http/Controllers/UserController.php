<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function users(Request $request){
        $users = DB::table('users')->get();
        return view('users', ['users' => $users]);
    }
    public function userUpdate(Request $request,$id){
        $user = DB::table('users')->where('id',$id)->first();
        return view('user-update',['user'=>$user]);
    }
    public function userUpdatePost(Request $request,$id){
        $validatedData = $request->validate([
            'name' => 'required|max:20',
            'email' => 'required',
            'phone' => 'required',
            'password' => 'required'
        ]);
        $user = DB::table('users')->where('id',$id)->first();
        DB::table('users')
            ->where('id', $id)
            ->update(array(
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'password' => $request->password
            ));
        $users = DB::table('users')->get();
        return view('users', ['users' => $users]);
    }
    public function userDelete(Request $request,$id){
        DB::table('users')->where('id', '=', $id )->delete();
        $users = DB::table('users')->get();
        return redirect()->back();
    }
    
}

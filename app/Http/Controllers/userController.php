<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class userController extends Controller
{
    function createuser(){
        return view('user.createuser');
    }

    function login(){
        return view('user.login');
    }

    function loginuser(Request $request){
        $request->validate([
            'email' =>'required',
            'password' =>'required',
        ]);

        $email = $request->email;
        $password = $request->password;

        $user = User::where('email', $email)->first();

        if($user){
            if(password_verify($password, $user->password)){
                session()->put('user', $user->name);
                return redirect('/');
            }else{
                return back()->with('error', 'Invalid Password');
            }
        }else{
            return back()->with('error', 'Invalid Email');
        }
        
    }
    function logout(){
        session()->forget('user');
        return redirect('/');
    }

    function storeuser(Request $request){
        $value =$request->validate([
            'name' =>'required',
            'email' =>'required',
            'password' => 'required',
        ]);

        // dd($value);


        
        $usrr =new User();
        $usrr->name = $request->name;
        $usrr->email = $request->email;
        $usrr->password = $request->password;
        $usrr->save();
        return redirect()->back();
    }
}

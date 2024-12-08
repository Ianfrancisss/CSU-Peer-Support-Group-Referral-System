<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Http\Request;


class AuthController extends Controller
{
    public function login()
    {
        return view("auth.login");
    }

    function loginPost(Request $request){
        $request->validate([
            "email"=>"required",
            "password"=>"required",
    ]);
        $credentials = $request->only("email","password");
        if(Auth::attempt($credentials)){
            return redirect()->intended(route("Signup"));
        }
        return redirect(route("login"))->with("error", "login failed");

    }

    function Signup() {
        return view("auth.Signup");
    }

    
    function SignupPost(Request $request) {
        $request->validate([
                "fullname"=>"required",
                "email"=>"required",
                "password"=>"required",
        ]);
        

        $user = new User();
        $user->name = $request->fullname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        if ($user->save()){
            return redirect(route("login"))->with("success","User created successfully");
        }
        return redirect(route("Signup"))->with("error","Fail to create account");
    }
}

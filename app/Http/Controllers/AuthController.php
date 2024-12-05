<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function login()
    {
        return view("auth.login");
    }

    function loginPost(Request $request){

    }

    function Signup() {
        return view("auth.Signup");
    }

    
    function SignupPost(Request $request) {
        $request->validate([
                "Fullname"=>"required",
                "Email"=>"required",
                "Password"=>"required",
        ]);
        
        $user = new User();
        $user->name = $request->Fullname;
        $user->email = $request->Email;
        $user->password = Hash::make($request->password);

        if ($user->save()){
            return redirect(route("login"))->with("success","User created successfully");
        }
        return redirect(route("Signup"))->with("error","Fail to create account");
    }
}

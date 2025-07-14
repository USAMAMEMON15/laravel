<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    //
    public function register(Request $request){
        $incomingFields = $request->validate([
            "name" => ["required" ,"min:3"],
            "email" => ["required" ,"email"],
            "password" => ["required" ,"min:3","max:7"]
        ]);
        $incomingFields['password'] =bcrypt($incomingFields['password']);
        $user =User::create($incomingFields);
        auth()->login($user);
        return redirect("/usama");

    }

    public function logout(){
        auth()->logout();
        return redirect("/");
    }
    public function login(request $request){
        $incomingFields =$request->validate([
            "loginname" => "required",
           "loginpassword" => "required"
        ]); 
        if(auth()->attempt(["name" =>$incomingFields['loginname'],"password"=> $incomingFields["loginpassword"]])){
            $request->session()->regenerate();
        }
        return redirect("/");
    }

}

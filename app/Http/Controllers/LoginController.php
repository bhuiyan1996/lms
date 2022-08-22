<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('frontend.login');
    }

    public function loginCheck(Request $request)
    {

        $check=Auth::attempt([
            'email'=>$request->email,
            'password'=>$request->password,
        ]);


        if($check){
            return redirect()->route('dashboard');
        }
        else{
            return redirect()->back();
        }


    }

    public function registration()
    {
        return view('frontend.registration');
    }

    public function doRegistration(Request $request)
    {
        // dd($request->role);

            User::create([
                'name'=>$request->name,
                'role'=>$request->role,
                'email'=>$request->email,
                'password'=>bcrypt($request->password),
            ]);


        return redirect()->route('login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}

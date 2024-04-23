<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $attributes = request()->validate([
            'email'=>'required',
            'password'=>'required' 
        ]);

        if(Auth::attempt($attributes))
        {
            $user = Auth::User();
            Session::put('id', auth()->user()->id);
            Session::put('level', auth()->user()->id_level);
            session()->regenerate();
            if(auth()->user()->id_level == 2){
                return redirect('/');
            }else{
                return redirect('/admin');
            }
        }
        else{

            return back()->withErrors(['email'=>'Email or password invalid.']);
        }
    }

    public function logout()
    {
        Session::forget('id');
        Session::forget('level');
        Auth::logout();
        return redirect('/login')->with(['success'=>'You\'ve been logged out.']);
    }
}

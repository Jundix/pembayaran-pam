<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use Symfony\Component\HttpFoundation\Request;

class RegisterController extends BaseController
{
  
     public function index()
    {
        return view('auth.register');
    }

    protected function register(Request $request)
    {
        $attributes = request()->validate([
            'nama' => ['required', 'max:50'],
            'username' => ['required', 'max:50'],
            'alamat' => ['required', 'max:50'],
            'email' => ['required', 'email', 'max:50'],
            'no_hp' => ['required', 'min:5', 'max:20'],
            'password' => ['required', 'min:5', 'max:20'],
        ]);
        $attributes['password'] = bcrypt($attributes['password']);
        $attributes['id_level'] = 2;
        $user = User::create($attributes);

        return redirect('login');
    }
}

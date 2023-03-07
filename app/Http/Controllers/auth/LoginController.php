<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function login(LoginRequest $request)
    {
        if (Auth::check()) {
            return redirect()->route('admin.index');
        }

        $data = $request->validated();


        if(isset($data['active'])){
            $remember = true;
        }else{
            $remember = false;
        }

        if (Auth::attempt(['email' => $data['email'],'password' => $data['password']], $remember)) {

            $request->session()->regenerate();

            return redirect()->route('admin.index');
        }

        return redirect()->route('auth.index')->withErrors(['message' => 'Неверный логин и/или пароль']);
    }
}

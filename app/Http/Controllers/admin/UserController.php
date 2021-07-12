<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function registerForm() {
        return view('register.register');
    }

    public function registerStore(Request $request) {
        $request->validate([
            'name' => 'required|min:5',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed'
        ]);

        $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password)
                ]);

           session()->flash('success', 'Пользователь зарегистрирован');
           Auth::login($user);
           return redirect()->route('home');
    }

    public function loginForm() {
        return view('register.login');
    }

    public function login(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        session()->flash('success', 'Пользователь авторизирован');

        if(Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ])) {
            if(Auth::user()->is_admin){
                return redirect()->route('admin.main');
            }else {
                return redirect()->route('home');
            }
        }
        return back()->with('error', 'Incorrect login or password');
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('login.form');
    }

}

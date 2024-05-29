<?php

namespace App\Http\Controllers;

use App\Enums\UserTypeEnum;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\SignupRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function authenticate(LoginRequest $request): RedirectResponse
    {
        if (Auth::attempt($request->validated())) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function register()
    {
        return view('register');
    }

    public function signup(SignupRequest $request)
    {
        $user = new User($request->validated());
        $user->type = UserTypeEnum::CUSTOMER->value;
        if($user->save()){
            return redirect('/login')->with(['m-color' => 'success', 'message' => 'Your registration was successful', 'm-dir' => 'ltr']);
        } else {
            return redirect()->back()->with(['m-color' => 'danger', 'message' => 'failed to register', 'm-dir' => 'ltr']);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->back();
    }
}

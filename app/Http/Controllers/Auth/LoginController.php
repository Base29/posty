<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Validating login request
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempting to log in the user
        if (!auth()->attempt($request->only('email', 'password'), 'remember')) {
            return back()->with('status', 'Invalid login details');
        };

        // Redirecting user to dashboard
        return redirect()->route('dashboard');
    }
}
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request)//: RedirectResponse    
    {
        $request->authenticate();

        $request->session()->regenerate();

        $user_email = $request->email;
        $user = User::where('email',$user_email)->get('user_type');

        $user_type = json_decode($user[0]);

        if($user_type->{'user_type'} === "admin"){
            return redirect()->intended(RouteServiceProvider::HOME);
        } else {
            return view('home');
        } 
                    

    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}

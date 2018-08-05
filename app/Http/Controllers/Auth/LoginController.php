<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;
    

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    public function __construct() {
        $this->middleware('guest')->except('logout');
    }
    
    public function username() {
        return 'username';
    }

    public function authenticated(Request $request, $user)
    {
        if($user->active) {
            $user->last_sign_in = Carbon::now();
            $user->save();
            if($user->hasRole('owner') || $user->hasRole('admin')) {
                return redirect()->route('admin');
            }
        } else {
            dd('No está activo');
            \Flash::error('El Usuario: ' . $user->username .' no se encuentra activado: ');
            return redirect()->route('login');
        }
    }

    public function redirectToFacebook() {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookCallback() {
        $user = Socialite::driver('facebook')->user();
    }

    public function redirectToDiscord() {
        return Socialite::driver('discord')->redirect();
    }

    public function handleDiscordCallback() {
        $user = Socialite::driver('discord')->user();
    }

    public function redirectToGitHub() {
        return Socialite::driver('github')->redirect();
    }

    public function handleGitHubCallback() {
        $user = Socialite::driver('github')->user();
    }
}

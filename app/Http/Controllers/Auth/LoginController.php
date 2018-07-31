<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;

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

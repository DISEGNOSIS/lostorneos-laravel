<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Country;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/my-account';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm() {
        $countries = Country::all();
        return view('auth.register', compact('countries'));
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'string|min:3|max:255',
            'username' => 'required|unique:users|string|max:255',
            'email' => 'required|unique:users|email|string|max:255',
            'password' => 'required|string|min:6|confirmed',
            'country' => 'required',
            'avatar' => 'required'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $request = app('request');
        if($request->hasFile('avatar')) {
            $image = $request->file('avatar');
            $extension = $request->file('avatar')->extension();
            $path = uniqid() . "." . $extension;
            $image->storeAs('public/img/avatar', $path);
        } else {
            $path = 'default.jpg';
        }

        $user = new User();
        $user->name = $data['name'];
        $user->username = $data['username'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);
        $user->country_id = $data['country'];
        $user->avatar = $path;
        dd($data);
        if($user->save()) {
            $user->attachRole(6);
            flash('El Usuario ' . $user->username . ' se ha creado con éxito.')->success();
            return redirect()->route('admin.users');
        } else {
            flash('El Usuario no se ha podido guardar. Por favor intentalo nuevamente.')->error();
            return back();
        }

    }
    
}

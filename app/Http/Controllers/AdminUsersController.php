<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\User;
use App\Country;

class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(15);
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::all();
        return view('admin.users.create', compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'string|min:3|max:255',
            'username' => 'required|unique:users|string|min:2|max:255',
            'email' => 'required|unique:users|email|string|min:2|max:255',
            'country' => 'required|string'
        ]);

        if($request->has('password') && !empty($request->password)) {
            $this->validate($request, [
                'password' => 'required|string|min:6|confirmed'
            ]);
            $password = trim($request->password);
        } else {
            $length = 10;
            $keyspace = '123456789abcdefghijkmnopqrstuvwxyzABCDEFGHJKLMNOPQRSTUVWXYZ';
            $str = '';
            $max = mb_strlen($keyspace, '8bit') - 1;
            for($i = 0; $i < $length; $i++) {
                $str .= $keyspace[random_int(0, $max)];
            }
            $password = $str;
        }

        $user = new User();
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($password);
        $user->country_id = $request->country;
        $user->avatar = 'default.jpg';
        if($user->save()) {
            \Flash::success("El Usuario $user->username se ha creado con éxito.");
            return redirect()->route('admin.users');
        } else {
            \Flash::error("El Usuario no se ha podido guardar. Por favor intentalo nuevamente.");
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $countries = Country::all();
        return view('admin.users.edit', compact('user', 'countries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'string|min:3|max:255',
            'username' => 'required|unique:users|string|min:2|max:255'.$id,
            'email' => 'required|unique:users|email|string|min:2|max:255'.$id,
            'country' => 'required|string'
        ]);

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->country_id = $request->country;
        $user->score = $request->score;

        if($request->has('password') && !empty($request->password)) {
            $this->validate($request, [
                'password' => 'required|string|min:6|confirmed'
            ]);
            $user->password = Hash::make($request->password);
        }

        if($request->hasFile('avatar')) {
            /* Validator::make($request->avatar, [
                'avatar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
            ]); */
            $image = $request->file('avatar');
            $extension = $request->file('avatar')->extension();
            $newName = uniqid() . "." . $extension;
            $image->storeAs('public/img/avatar', $newName);
            $user->avatar = $newName;
        }

        if($user->save()) {
            \Flash::success("El Usuario $user->username se ha creado con éxito.");
            return redirect()->route('admin.users');
        } else {
            \Flash::error("El Usuario no se ha podido guardar. Por favor intentalo nuevamente.");
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd($id);
    }

    public function search(Request $request) {
        $query = $request->input('query');
        $users = User::where('username', 'LIKE', '%'. $query .'%')->paginate(15);
        return view('admin.users.index', compact('users'));
    }
}

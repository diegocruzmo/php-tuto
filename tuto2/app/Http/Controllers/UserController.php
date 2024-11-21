<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\models\User;

class UserController extends Controller
{
    public function index() {
        //$users = User::all();
        //$users = User::find(1);
        //$users = User::findOrFail();

        $users = User::where('age', '>', 18)->orderBy('age', 'asc')->limit(2)->get();
        return view('user.index', ["users" => $users]);
        //return view('user.index', compact('users'));
    }

    public function create() {
        $user = new User;
        $user->name = "John";
        $user->email = "john@mail.com";
        $user->password = Hash::make('1234567');
        $user->age = 25;
        $user->address = "Calle 72 92-47";
        $user->zip_code = 111611;
        $user->save();

        User::create([
            "name" => "Facu",
            "email" => "facu@mail.com",
            "password" => Hash::make('1234567'),
            "age" => 24,
            "address" => "Carrera 124 56 - 78",
            "zip_code" => 343543
        ]);

        return redirect()->route('index');
    }
}

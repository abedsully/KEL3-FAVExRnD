<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;


class RegisterController extends Controller
{
    public function index(){
        return view('register');
    }

    public function store(Request $request){
        $validasi = $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|unique:users|email:dns',
            'password' => 'required|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^A-Za-z0-9])/|string',
            'confirm' => 'required|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^A-Za-z0-9])/|string|required_with:confirm|same:confirm',
            'username' => 'required|unique:users',
            'place' => 'required',
            'dob' => 'required',
            'number' => 'required|numeric|starts_with:+62',
            'gender' => 'required'
        ]);

        $validasi['password'] = bcrypt($validasi['password']);
        $validasi['confirm'] = bcrypt($validasi['confirm']);
        User::create($validasi);
        return redirect('/login');
    }

}

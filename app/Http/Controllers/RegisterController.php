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

    public function showProf($id){
        $user = User::findOrFail($id);
        $this->middleware('auth.session');
        return view('editprofile', compact('user'));
    }

    public function showPass($id){
        $user = User::findOrFail($id);
        $this->middleware('auth.session');
        return view('editpassword', compact('user'));
    }


    public function updateProf(Request $request, $id){

        User::findOrFail($id)->update([
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'email' => $request->email,
            'username' => $request->username,
            'place' => $request->place,
            'dob' => $request->dob,
            'number' => $request->number
        ]);
        return redirect('/edit-success');
    }

    public function updatePass(Request $request, $id){
        User::findOrFail($id)->update([
            'password' => $request->password,
            'confirm' => $request->confirm
        ]);
        return redirect('/edit-success');
    }

    public function success(){
        return view('editsuccess');
    }


}

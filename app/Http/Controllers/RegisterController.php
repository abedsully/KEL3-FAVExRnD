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
            'confirm' => 'required|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^A-Za-z0-9])/|string|same:password',
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

        $user = User::findOrFail($id);

        $validasi = $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|email|unique:users,email,'.$user->id,
            'username' => 'required|unique:users,username,'.$user->id,
            'place' => 'required',
            'dob' => 'required',
            'number' => 'required|numeric|starts_with:+62',
        ]);


        $user->firstName = $validasi['firstName'];
        $user->lastName = $validasi['lastName'];

        if ($user->email !== $validasi['email'])
        {
            $user->email = $validasi['email'];
        }

        if ($user->username !== $validasi['username'])
        {
            $user->username = $validasi['username'];
        }

        $user->place = $validasi['place'];
        $user->dob = $validasi['dob'];
        $user->number = $validasi['number'];

        // User::findOrFail($id)->update([
        //     'firstName' => $request->firstName,
        //     'lastName' => $request->lastName,
        //     'email' => $request->email,
        //     'username' => $request->username,
        //     'place' => $request->place,
        //     'dob' => $request->dob,
        //     'number' => $request->number
        // ]);

        $user->save();

        return back()->with('success', 'User updated successfully.');
    }

    public function updatePass(Request $request, $id){

        $request->validate([
            'old_password' => 'required',
            'new_password' => ['required', 'string', 'min:8', 'regex:/^(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()_+])[A-Za-z\d!@#$%^&*()_+]+$/'],
            'confirm_new_password' => 'required|same:new_password'
        ]);


        if(!Hash::check($request->old_password, auth()->user()->password)){
            return back()->with('error', 'Your current password is wrong');
        }

        if($request->new_password != $request->confirm_new_password){
            return back()->with('error', 'New password does not match confirm password');
        }

        auth()->user()->update([
            'password' => Hash::make($request->new_password)


        ]);

        return back()->with('success', 'Password updated successfully');
    }
}

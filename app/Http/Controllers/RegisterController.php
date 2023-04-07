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
            $filenames = NULL;

            if($request->file('image') != NULL){
                $extension = $request->file('image')->getClientOriginalExtension();
                $filenames = $request->firstName.'_'.$extension;
                $request->file('image')->storeAs('/public/Barang', $filenames);
            }


        User::create([
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'confirm' => Hash::make($request->confirm),
            'username' => $request->username,
            'place' => $request->place,
            'dob' => $request->dob,
            'number' => $request->number,
            'gender' => $request->gender,
            'image' => $filenames
        ]);

        return redirect('/login');
    }

    public function showProfile($id){
        $user = User::findOrFail($id);
        return view('editprofile', compact('user'));
    }

    public function showPassword($id){
        $user = User::findOrFail($id);
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

    public function updateProfilePicture(Request $request, $id)
{
    $user = User::findOrFail($id);

    if ($request->hasFile('image')) {
        // Get the uploaded file
        $file = $request->file('image');

        // Generate a unique filename for the uploaded file
        $filename = $user->id . '_' . $file->getClientOriginalExtension();

        // Store the uploaded file in the storage directory
        $file->storeAs('public/Barang', $filename);

        // Update the user's profile picture path in the database
        $user->image = $filename;
        $user->save();
    }

    return redirect()->back();
}

}

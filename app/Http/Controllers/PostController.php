<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        return view('addPost');
    }


    public function store(Request $request){

        $validated = $request->validate([
             'Title' => 'required|min:5|max:100',
             'Content' => 'required|min:20',
             'Image' => 'image|mimes:jpeg,png,jpg,gif',
        ]);


            $filename = NULL;
            if($request->file('Image') != NULL) {
                // $filename = $request->file('Image')->getClientOriginalName();
                $extension = $request->file('Image')->getClientOriginalExtension();
                $filename = $request->Judul.$request->Title.'.'.$extension;
                $request->file('Image')->storeAs('/public/Post/', $filename);
            }

        Post::create([
            'Title' => $request->Title,
            'Content' => $request->Content,
            'Image' => $filename
        ]);

        return redirect('/home');
    }


    public function index(){
        $posts = Post::all();

        return view('home', compact('posts'));
    }
}

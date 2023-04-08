<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostsRequest;
use App\Http\Requests\UpdatePostsRequest;
use App\Models\Posts;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
class PostsController extends Controller
{

    public function index()
{
    $posts = Auth::user()->posts;
    return view('home', compact('posts'));
}

public function show(Request $request)
{
    // Retrieve the data for the view using the $id parameter
    $postings = Posts::where('id', auth()->user()->id)->get();
    $posts = Posts::where('user_id', 1)->get();

    $posts = $posts->reverse();

    // Pass the data to the view using the compact() function
    return view('home', compact('postings', 'posts'));
}


public function store(Request $request)
{
    // Validate the request data
    $validatedData = $request->validate([
        'title' => 'required|min:1|max:150',
        'content' => 'required|min:1|max:500',
    ]);

    $filename = NULL;
        if($request->file('images') != NULL) {
            $extension = $request->file('images')->getClientOriginalExtension();
            $filename = $request->title.'_'.$extension;
            $request->file('images')->storeAs('/public/Posting', $filename);
        }

    // Create a new Posting model and save it to the database
    $posting = new Posts();
    $posting->user_id = 1;
    $posting->title = $validatedData['title'];
    $posting->content = $validatedData['content'];
    $posting->images = $filename;
    $posting->save();


    // Redirect back to the home page and show the new post
    return redirect()->route('homeman')->with('success', 'Posting created successfully.');
}
    /**
     * Display a listing of the resource.
     */

    /**
     * Show the form for creating a new resource.
     */

//      public function show($id)
// {
//     $ids = Auth::user()->id;
//     // Retrieve the data for the view using the $id parameter
//     $posts = Posts::where('user_id', $id)->get();

//     // Pass the data to the view using the compact() function
//     return view('/home', compact('posts'));
// }

// public function store(Request $request, $id)
// {
//     // Validate the request data
//     $validatedData = $request->validate([
//         'title' => 'required|max:255',
//         'content' => 'required',
//     ]);

//     // Create a new Posting model and save it to the database
//     $posting = new Posts();
//     $posting->user_id = $id;
//     $posting->title = $validatedData['title'];
//     $posting->content = $validatedData['content'];
//     $posting->save();

//     // Redirect back to the home page and show the new post
//     return redirect('/home/' . $id)->with('success', 'Posting created successfully.');
// }

    /**
     * Display the specified resource.
     */
    // public function show()
    // {
    //     $userIds = Auth::user()->id;
    //     $posts = Posts::all();

    //     $postings = Posts::where('id', $userIds)->get();
    // $otherData = 'This is some other data.';

    //     return view('home', compact('posts'));
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Posts $posts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostsRequest $request, Posts $posts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Posts $posts)
    {
        //
    }
}

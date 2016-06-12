<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;

class PostsController extends Controller
{

// avalible just with login
  public function __construct()
  {
      $this->middleware('auth');
  }


    public function index()
    {
        $posts = Post::paginate(3);
        return view('posts.index', compact('posts'));
    }


    public function create()
    {
        return view('posts.create');
    }


    public function store(Request $request)
    {
        $data = $request->only('title', 'body');
        $post = Post::create($data);
        return \Redirect::route('posts.index');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $post = Post::find($id);

        return view('posts.edit', compact('post'));

        // return \Redirect::to('/posts');
    }


    public function update(Request $request, $id)
    {
        $data = $request->only('title', 'body');
        $post = Post::find($id);
        $post->update($data);
        return \Redirect::to('posts');
        //return \Redirect::to('posts.edit', $id);
    }


    public function destroy($id)
    {
        Post::destroy($id);
        return \Redirect::to('/posts');
    }
}

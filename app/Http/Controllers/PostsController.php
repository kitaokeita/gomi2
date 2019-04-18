<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;


class PostsController extends Controller
{
  public function index()
  {
    $posts = Post::orderBy('created_at','desc')->get();

    return view('posts.index', ['posts' => $posts]);
  }

  public function create()
  {

    return view('posts.create');
  }

  public function store(Request $request)
  {
    $params = $request->validate([
      'user_id' => 'required|exists:users,id',
      'title' => 'requiredlmax:50',
      'body' => 'requiredlmax:20000',
    ]);

    $user = User::findOrFail($params['user_id']);
    $user_id = '1';

    $user->posts()->create($params);

    return redirect()->route('post');
  }

  public function show($post_id)
  {
    $post = Post::findOrFail($post_id);

    return view('posts.show',[
      'post' => $post,
    ]);
  }
    //
}

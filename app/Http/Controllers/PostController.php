<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    // show all posts
    public function index(){
        $posts = Post::all();

        return view('posts.show', compact('posts'));
    }

    // show single post
    public function show(Post $post){
        $this->authorize('view', $post);
        return view('posts.singlepost', compact('post'));
    }

    // delete post
    public function destroy(Post $post){
        $this->authorize('delete', $post);
        $post->delete();
        return redirect()->route('posts.index');
    }
}

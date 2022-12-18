<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function get(Request $request) {
        $posts = Post::paginate(10);

        if($request->filled('email')){
            $email = $request->get('email');
            $posts = Post::where('author_email', $email)->paginate(10);
        }

        return view('posts', compact('posts'));
    }

    public function store() {
       $formData = \request()->validate([
            'author_email' => 'email',
            'title' => 'string',
            'text' => 'string'
        ]);
        Post::create($formData);
        return redirect()->route('index');
    }

    public function update(Post $post) {
        $formData = \request()->validate([
            'title' => 'string',
            'text' => 'string'
        ]);
        $post->update($formData);
        return redirect()->route('index');
    }


    public function create() {
        return view('create');
    }

    public function edit(Post $post) {
        return view('edit', compact('post'));
    }
}

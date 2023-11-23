<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function create(){
        return view('post.create');
        // return viewの後はresources/view後のパスを入れる。blade.php入れる必要がないことに留意する。
    }

    public function store(Request $request){
        $post = Post::create ([
            'title' => $request->title,
            'body' => $request->body
        ]);
        return back();
    }
}

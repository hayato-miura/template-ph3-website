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
        $validation=$request->validate([
            'title' => 'required|max:20',
            'body' => 'required|max:400',
        ]);
        $post = Post::create($validation);
        // $request->session()->flash('message','保存しました');
        return back()->with('message','保存しました');
    }
}

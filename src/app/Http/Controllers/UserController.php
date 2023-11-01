<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailables\Content;

class UserController extends Controller
{
    //
    public function index(){
        return view('possetask');
    }
    public function users() {
        // ユーザー一覧のデータを取得する処理
        $users = User::all(); // ユーザー一覧データを取得
        return view('users.index', ['users' => $users]); // ビューにデータを渡す// ビューを表示
    }
}


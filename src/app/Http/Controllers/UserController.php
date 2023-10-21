<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){
        return view('possetask');
    }
    public function users() {
        // ユーザー一覧のデータを取得する処理
        return view('users.index'); // ビューを表示
    }
}


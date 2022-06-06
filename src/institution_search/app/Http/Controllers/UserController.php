<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $user = auth()->user();
        // $users = \App\Models\User::get(); // 社員一覧を取得
        return view('user', compact('user')); // users.index.bldae を呼出し、 usersを渡す
    }
}

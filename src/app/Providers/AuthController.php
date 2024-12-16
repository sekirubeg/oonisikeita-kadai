<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Http\Requests\UserRequest;

class AuthController extends Controller
{
    public function create(UserRequest $request)
    {
        // バリデーション済みのデータを取得
        $validated = $request->validated();

        // ユーザーを作成
        return User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);
    }
}


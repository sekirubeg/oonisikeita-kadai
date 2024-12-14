<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Custom_User;

class AuthController extends Controller
{
    public function admin()
    {
        return view('admin');
    }
}


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function profile()
    {
        // Mendapatkan data user yang sedang login
        $user = Auth::user();

        // Mendapatkan data logs dari cookie
        $logs = request()->cookie();

        return view('user.profile', compact('user', 'logs'));
    }
}

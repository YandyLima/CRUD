<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        $user = User::find(auth()->user()->id);
        return view('profile', compact('user'));
    }
}
<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function index(){
        return view("user.profile.userProfile", ['user' => auth()->user()]);
    }

    public function update(){
        $user = auth()->user();
        return view('user.profile.updateUserProfile', compact('user'));
    }
}

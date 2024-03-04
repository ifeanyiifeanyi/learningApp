<?php

namespace App\Http\Controllers\Instructor;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Stevebauman\Location\Facades\Location;

class InstructorController extends Controller
{
    public function index(){
        $user = User::find(Auth::user()->id);
        // $currenLocation = Location::get();



        // $user->userIp = $currenLocation->ip;
        // $user->userCity = $currenLocation->cityName;
        // $user->userCountry = $currenLocation->countryName;
        // $user->userLongitude = $currenLocation->longitude;
        // $user->userLatitude = $currenLocation->latitude;
        // $user->update();
        return view('instructor.dashboard');
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
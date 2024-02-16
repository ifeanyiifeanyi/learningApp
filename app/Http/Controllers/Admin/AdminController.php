<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Stevebauman\Location\Facades\Location;

class AdminController extends Controller
{
    public function index(){
        $user = User::find(Auth::user()->id);
        $currenLocation = Location::get();

        $user->userIp = $currenLocation->ip;
        $user->userCity = $currenLocation->cityName;
        $user->userCountry = $currenLocation->countryName;
        $user->userLongitude = $currenLocation->longitude;
        $user->userLatitude = $currenLocation->latitude;
        $user->save();
        return view("admin.Dashboard");
    }




    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
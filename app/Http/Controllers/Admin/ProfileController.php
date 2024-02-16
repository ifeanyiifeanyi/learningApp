<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.profile.index', ['user' => auth()->user()]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'username' => 'required|string',
            'email' => 'required|email',
            'address' => 'required|string',
            'phone' => 'required|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:10000', 
        ]);

        $user = User::find(Auth::user()->id);
        

        if ($request->hasFile('photo')) {
            $old_image = $user->photo;

            if (!empty($old_image) && file_exists(public_path($old_image))) {
                unlink(public_path($old_image));
            }

            $thumb = $request->file('photo');
            $extension = $thumb->getClientOriginalExtension();
            $thumbFile = time() . "." . $extension;
            $thumb->move('admins/profile/', $thumbFile);
            $user->photo = 'admins/profile/' . $thumbFile;
        } elseif (empty($user->image)) {
            return back()->withErrors(['photo' => 'The image field is required.']);
        }

        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->save();
        $notification = [
            'message' => 'Profile Details Updated!',
            'alert-type' => 'success'
        ];
        return redirect()->route('admin.profile')->with($notification);
    }

    /**
     * Display the specified resource.
     */
    public function upDatePasswordView()
    {
        return view('admin.profile.updatePassword');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

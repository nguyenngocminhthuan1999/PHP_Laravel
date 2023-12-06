<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function user_name()
    {
        $user_name = Profile::pluck('user_name');
        return view('account.index', ['user_names' => $user_name]);
    }

    public function store(Request $request)
    {
        // Validate input data
        $validated = $request->validate([
            'user_name' => 'required|max:255|unique:profiles',
            'password' => 'required|max:255',
        ]);

        // Create new profile instance
        $profile = new Profile;
        $profile->user_name = $validated['user_name'];
        $profile->password = $validated['password'];

        // Save to database
        $profile->save();

        // Redirect to account page
        return redirect()->route('account.index');
    }
}
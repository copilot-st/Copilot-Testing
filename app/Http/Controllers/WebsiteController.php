<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    // write an index function and connect it to the view 
    public function index()
    {
        return view('welcome.blade.php');
    }

    // public function auth(Request $request)
    // {
    //     // Validate the request data
    //     $validatedData = $request->validate([
    //         'email' => 'required|email',
    //         'password' => 'required',
    //     ]);

    //     // Retrieve the user based on the email
    //     $user = User::where('email', $validatedData['email'])->first();

    //     // Check if the user exists and the password is correct
    //     if ($user && Hash::check($validatedData['password'], $user->password)) {
    //         // Authentication successful
    //         return response()->json(['message' => 'Authentication successful']);
    //     } else {
    //         // Authentication failed
    //         return response()->json(['message' => 'Authentication failed'], 401);
    //     }
    // }
}
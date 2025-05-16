<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        return view('frontend.user.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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

     public function update(Request $request)
     {
        $user = Auth::user();

        // Base validation rules
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
        ];
    
        // Add password validation only if password is filled
        if ($request->filled('password')) {
            $rules['password'] = 'string|min:6|confirmed';
        }
    
        // Validate the request data
        $request->validate($rules);
    
        // Update user fields
        $user->name = $request->name;
        $user->email = $request->email;
    
        // Handle the profile image upload if provided
        if ($request->hasFile('profile_image')) {
            // Delete old profile image if it exists
            if ($user->profile_image) {
                Storage::delete('public/' . $user->profile_image);
            }
    
            // Store the new image and save the path
            $imagePath = $request->file('profile_image')->store('profile_user_image', 'public');
            $user->profile_image = $imagePath;
        }
    
        // Handle password update if provided
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }
    
        // Save the updated user record
        $user->save();
    
        // Redirect with success message
    
         // Redirect with success message
         return redirect()->route('user.user.index')->with('success', 'User updated successfully!');
     }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

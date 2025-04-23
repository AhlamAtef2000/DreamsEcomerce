<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function index()
    {
        $users = User::withTrashed()->get();
        return view('admin.user.index', compact('users'));
    }

    public function edit($id)
{
    $user = User::withTrashed()->findOrFail($id);
    return view('admin.user.edit', compact('user'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'name'  => 'nullable|string|max:255',
        'email' => 'nullable|email|max:255|unique:users,email,' . $id,
        'role'  => 'required|in:admin,user',
    ]);

    $user = User::withTrashed()->findOrFail($id);

    if ($request->filled('name')) {
        $user->name = $request->name;
    }

    if ($request->filled('email')) {
        $user->email = $request->email;
    }

    $user->role = $request->role;

    $user->save();

    return redirect()->route('admin.user.index')->with('success', 'User updated successfully!');
}

public function updateProfile(Request $request)
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


    $request->validate($rules);

    $user->name = $request->name;
    $user->email = $request->email;

    if ($request->filled('password')) {
        $user->password = \Hash::make($request->password);
    }


    $user->save();

    return redirect()->route('admin.profile')->with('success', 'Profile updated successfully!');
}

public function profile()
{
    $user = Auth::user();
    return view('admin.profile.index', compact('user'));
}





}

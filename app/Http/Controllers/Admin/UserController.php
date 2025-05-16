<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
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
        $imagePath = $request->file('profile_image')->store('profile_admin_images', 'public');
        $user->profile_image = $imagePath;
    }

    // Handle password update if provided
    if ($request->filled('password')) {
        $user->password = Hash::make($request->password);
    }

    // Save the updated user record
    $user->save();

    // Redirect with success message
    return redirect()->route('admin.profile')->with('success', 'Profile updated successfully!');
}
public function profile()
{
    $user = Auth::user();
    return view('admin.profile.index', compact('user'));
}



}

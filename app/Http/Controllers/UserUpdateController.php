<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Storage;

class UserUpdateController extends Controller
{
    public function uploadImage(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/images', $imageName); // Store the image in the storage/app/public/images directory

            // Delete the old profile picture if it exists
            if (auth()->user()->profile_image) {
                Storage::delete('public/' . auth()->user()->profile_image);
            }

            // Update the user's profile with the new image
            auth()->user()->update(['profile_image' => 'images/' . $imageName]);
        }
        return redirect()->back()->with('success', 'Image uploaded successfully!');
    }

    public function deleteImage()
    {
        // Delete the current profile picture if it exists
        if (auth()->user()->profile_image) {
            Storage::delete('public/' . auth()->user()->profile_image);
            auth()->user()->update(['profile_image' => null]); // Update the user's profile with no image
            return redirect()->back()->with('success', 'Image deleted successfully!');
        }

        return redirect()->back()->with('error', 'No image to delete.');
    }
    public function changeName(Request $request)
    {
        // Validate the request
        $request->validate([
            'firstName' => 'required|string',
            'lastName' => 'required|string',
        ]);

        // Get the current user
        $user = auth()->user();

        // Update the user's name
        $user->first_name = $request->input('firstName');
        $user->last_name = $request->input('lastName');
        $user->save();

        // Redirect the user back to the home page
        return redirect()->back()->with('success', 'Username changed successfully.');
    }
    public function changePassword(Request $request)
    {
        $this->validate($request, [
            'currentPassword' => 'required',
            'newPassword' => 'required|min:8',
            'password_confirmation' => 'required|same:newPassword',
        ]);
        // |regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@%]).{6,}$/'
        $user = $request->user();

        if (!Hash::check($request->currentPassword, $user->password)) {
            throw ValidationException::withMessages(['currentPassword' => 'The current password is incorrect.']);
        }

        $user->update(['password' => Hash::make($request->newPassword)]);

        return redirect()->back()->with('success', 'Password changed successfully.');
    }
}
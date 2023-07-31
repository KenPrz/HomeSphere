<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
    
            // Assuming you have a 'profile_image' column in your users table
            auth()->user()->update(['profile_image' => 'images/' . $imageName]);
        }
        return redirect()->back()->with('success', 'Image uploaded successfully!');
    }
}
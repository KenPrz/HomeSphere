<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChangeEmailController extends Controller
{
    // public function changeEmail(Request $request)
    // {
    //     // Validate the request
    //     $request->validate([
    //         'currentEmailName' => 'required|email',
    //         'newEmail' => 'required|email|unique:users,email',
    //     ]);

    //     // Get the current user
    //     $user = auth()->user();

    //     // Check if the current email is the same as the new email
    //     if ($user->email === $request->input('currentEmailName')) {
    //         return redirect()->back()->with('error', 'The new email must be different from the current email.');
    //     }

    //     // Update the user's email
    //     $user->email = $request->input('newEmail');
    //     $user->save();

    //     // Send a confirmation email to the new email address
    //     $this->sendEmailConfirmation($user);

    //     // Redirect the user back to the home page
    //     return redirect('/');
    // }

    // private function sendEmailConfirmation(User $user)
    // {
    //     $mailable = new \App\Mail\EmailConfirmation($user);
    //     Mail::to($user->email)->send($mailable);
    // }
}

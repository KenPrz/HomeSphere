<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class authController extends Controller
{
    // Show the login view
    public function showLogin()
    {
        return view('login');
    }

    // Handle user login attempt
    protected function login(Request $request)
    {
        // $requestData = $request->all();
        // dd($requestData);
        // Validate the incoming login request data
        $request->validate([
            "email" => "required|email",
            "password" => "required",
        ]);

        // Retrieve all request data


        // Extract email and password from the request data
        $credentials = $request->only('email', 'password');

        // Attempt to log in the user with the provided credentials
        if (Auth::attempt($credentials)) {
            // Redirect to the intended page after successful login
            return redirect()->intended(route('dashboard'));
        }

        // Redirect back to the login page with an error message if login fails
        return redirect(route('login'))->with('error', "invalid email or password");
    }

    // Handle user registration attempt
    protected function register(Request $request)
    {
        // dd($request->all());
        // Validate the incoming login request data
        // Validate the incoming registration request data
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);
        // Prepare the data for creating a new user
        $data['first_name'] = $request->firstName;
        $data['last_name'] = $request->lastName;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        // dd($data);
        // Create a new user with the provided data
        $user = User::create($data);

        // Check if the user creation was successful
        if (!$user) {
            // Redirect back to the login page with an error message if user creation fails
            return redirect(route('login'))->with('error', "Failed to create user!");
        }

        // Redirect back to the login page with a success message after successful registration
        return redirect(route('login'))->with('success', "Registration successful! Please log in.");
    }

    // Handle user logout
    public function logout()
    {
        // Flush the session data and log the user out
        Session::flush();
        Auth::logout();

        // Redirect back to the login page with a success message after successful logout
        return redirect(route('login'))->with('success', "Logout Successful!");
    }
}

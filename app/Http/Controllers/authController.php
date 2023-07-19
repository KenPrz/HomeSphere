<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class authController extends Controller
{
    public function showLogin(){
        return view('login');
    }
    protected function login(Request $request){
        $request -> validate([
            "email" => "required | email",
            "password" => "required",
        ]);
        $requestData = $request->all();
        var_dump($requestData);
        $credentials = $request->only('email','password');
        if(Auth::attempt($credentials)){
            return redirect()->intended(route('home'));
        }
        return redirect(route('login'))->with('error',"Invalid Email of password");
    }

    protected function register(Request $request){
        $request -> validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);
        $data['first_name'] = $request->firstName;
        $data['last_name'] = $request->lastName;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);

        $user = User::create($data);
        if(!$user){
            return redirect(route('login'))->with('error',"input!!");
        }
        return redirect(route('login'))->with('success', "Registration successful! Please log in.");
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect(route('login'))->with('success', "Logout Successful!");
    }    
}
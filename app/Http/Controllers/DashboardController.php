<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Fetch the authenticated user's data
        $user = Auth::user();

        // Pass the user data to the dashboard view
        return view('dashboard', ['user' => $user]);
    }
}
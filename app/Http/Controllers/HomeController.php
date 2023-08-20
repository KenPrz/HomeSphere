<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    public function index()
    {   $user = Auth::user();
        return view('components.home_component', compact('user'));
    }

}

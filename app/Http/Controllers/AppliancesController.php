<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AppliancesController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('components.appliances',compact('user'));
    }
}

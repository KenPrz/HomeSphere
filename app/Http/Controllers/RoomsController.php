<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class RoomsController extends Controller
{
    public function index()
    {   $user = Auth::user();
        return view('components.rooms_component', compact('user'));
    }
}

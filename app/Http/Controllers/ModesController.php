<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
class ModesController extends Controller
{

    public function index()
    {    $user = Auth::user();
        return view('components.modes_component', compact('user'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lost;
// use App\User;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile');
    }
    
}

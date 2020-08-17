<?php

namespace App\Http\Controllers;
use App\Category;
use App\Place;
use App\Lost;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $categorys=Category::all(); 
        $places=Place::all();
        $losts=Lost::orderBy('id','desc')->get();
        return view ('admin',compact('categorys','places','losts'));
        // return view('recordLost');
    }
}

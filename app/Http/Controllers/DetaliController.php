<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Lost;

class DetaliController extends Controller
{
    public function index($id)
    {
        $lost=Lost::find($id);

        return view('detalis',compact('lost'));

    }
}

<?php

namespace App\Http\Controllers;
use App\Category;
use App\Place;
use App\Lost;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use DB;
use Illuminate\Http\Request;


class LostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorys=Category::all(); 
        $places=Place::all();
        $losts=Lost::orderBy('id','desc')->get();
        return view ('recordLost',compact('categorys','places','losts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recordLost.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request)
    {
        $request->validate([
            'categorys_id' => 'required',
            'disclaimer'=> 'required',
            'title' => 'required',
            'description' => 'required',
            'date' => 'required',
            'places_id' => 'required',
            'name' => 'required', 
            'gmail' => 'required',
            'numberphone' => 'required',
            
        ]);
            $losts=new Lost();
            $losts->fill($request->all());
            $losts->save();
            \Session::flash('msg','s:نجحت العمليه ');
            return redirect()->back();
    }
    //lost and found has been saved successfully

    /**
     * Display the specified resource.
     *
     * @param  \App\Lost  $lost
     * @return \Illuminate\Http\Response
     */
    public function show(Lost $lost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lost  $lost
     * @return \Illuminate\Http\Response
     */
    public function edit(Lost $lost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lost  $lost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lost $lost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lost  $lost
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lost $lost)
    {
        //
    }
}

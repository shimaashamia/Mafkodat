<?php

namespace App\Http\Controllers;
use App\Category;
use App\Place;
use App\Found;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use DB;
use Illuminate\Http\Request;

class FoundController extends Controller
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
  
        $founds=Found::orderBy('id','desc')->get();
        return view ('recordFound',compact('categorys','places','founds'));
        // return view('recordFound');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'title' => 'required',
            'description' => 'required',
            'places_id' => 'required',
            'name' => 'required', 
            'gmail' => 'required',
            'numberphone' => 'required',
            
        ]);
            $founds=new Found();
            $founds->fill($request->all());
            $founds->save();
            \Session::flash('msg','s:book has been saved successfully');
            return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Found  $found
     * @return \Illuminate\Http\Response
     */
    public function show(Found $found)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Found  $found
     * @return \Illuminate\Http\Response
     */
    public function edit(Found $found)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Found  $found
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Found $found)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Found  $found
     * @return \Illuminate\Http\Response
     */
    public function destroy(Found $found)
    {
        //
    }
}

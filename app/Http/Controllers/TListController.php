<?php

namespace App\Http\Controllers;

use App\TList;
use App\Lost;
use App\Found;
use App\Place;

use Illuminate\Http\Request;

class TListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
      
        $place=Place::all();
        $losts=Lost::with(['Place'])->orderBy('id','desc')->paginate(8);
        $founds=Found::with(['Place'])->orderBy('id','desc')->get();

        return view ('partlost',compact('losts','place','founds'));

      
    

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TList  $tList
     * @return \Illuminate\Http\Response
     */
    public function show(TList $tList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TList  $tList
     * @return \Illuminate\Http\Response
     */
    public function edit(TList $tList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TList  $tList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TList $tList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TList  $tList
     * @return \Illuminate\Http\Response
     */
    public function destroy(TList $tList)
    {
        //
    }
}

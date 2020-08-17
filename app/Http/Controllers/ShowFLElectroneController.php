<?php

namespace App\Http\Controllers;

use App\ShowFLC;
use App\Lost;
use App\Found;
use App\Category;

use Illuminate\Http\Request;

class ShowFLElectroneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $category_id=Category::find($id)->id;
        $losts=Lost::orderBy('id','desc')->where('categorys_id',$category_id)->get();
        $founds=Found::orderBy('id','desc')->where('categorys_id',$category_id)->get();
        return view('showFoundandLostElectronec', compact('losts','founds'));
    }

    public function search(Request $request){
         $search = $request['search'];    
         $losts = Lost::whereRaw('true');
         if($search)
         $losts->whereRaw('(title like ? )',["%$search%"]);

         $losts = $losts->paginate(5)
           ->appends(['search'=>$search,   ]); 

           return view('showFoundandLostElectronec')
           ->with('losts',$losts);
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
     * @param  \App\ShowFLC  $showFLC
     * @return \Illuminate\Http\Response
     */
    public function show(ShowFLC $showFLC)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ShowFLC  $showFLC
     * @return \Illuminate\Http\Response
     */
    public function edit(ShowFLC $showFLC)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ShowFLC  $showFLC
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ShowFLC $showFLC)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ShowFLC  $showFLC
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShowFLC $showFLC)
    {
        //
    }
}

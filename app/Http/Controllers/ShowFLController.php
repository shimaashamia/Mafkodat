<?php

namespace App\Http\Controllers;
use App\Identify;
use App\ShowFL;
use App\Lost;
use App\Found;
use App\Category;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ShowFLController extends Controller
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
        return view('showFoundandLost', compact('losts','founds'));

    }

    public function search(Request $request){
         $search = $request['search'];    
         $losts = Lost::whereRaw('true');
         if($search)
         $losts->whereRaw('(title like ? )',["%$search%"]);

         $losts = $losts->paginate(5)
           ->appends(['search'=>$search,   ]); 

           return view('showFoundandLost')
           ->with('losts',$losts);
        
     }
    //  public function index(Request $request)
    // {
    //     //
    //       $q = $request['q'];
    //       $chalet = Chalet::whereRaw('true');
    //        if($q)
    //        $chalet->whereRaw('(name like ? )',["%$q%"]);

    //        $chalet = $chalet->paginate(5)
    //          ->appends(['q'=>$q,   ]);

    //         return view('chalet.index')
    //         ->with('title','chalet Table')
    //         ->with('chalets',$chalet);
    // }


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
     * @param  \App\ShowFL  $showFL
     * @return \Illuminate\Http\Response
     */
    public function show(ShowFL $showFL)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ShowFL  $showFL
     * @return \Illuminate\Http\Response
     */
    public function edit(ShowFL $showFL)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ShowFL  $showFL
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ShowFL $showFL)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ShowFL  $showFL
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShowFL $showFL)
    {
        //
    }
}

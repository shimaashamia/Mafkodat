<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return redirect('/');
    }
    public function search(Request $request){
        // dd($request->id_number);
        // dd('id_number');
       // dd("hhhhhhh");
      // $id_number = Input::get ( 'id_number' );
      
       //$id_number=  Input::get('id_number');
     
       //search that student in Database
        //$identify= Identify::find($request->id_number)->count();
       // $identify = Identify::query()->where($request->id_number);
       //$identify = Identify::query()->where('id_number', 'LIKE', "%{$request->id_number}%");
       //$request->id_number
       $identify = Identify::where('id_number',$request->id_number)->get();
       //$identify = Identify::where('id_number',$id_number)->get();
       if(count($identify) > 0)
           return response()->json([
                  'identify' =>  $identify,
                 'status' => 200,
                 //'data' =>  $data,
             ]);
       else   return response()->json([
         
         'No Details found. Try to search again !'
     ], 404);
          // return view('welcome')->withDetails($user)->withQuery ( $id_number );
       //return view ('welcome')->withMessage('No Details found. Try to search again !');
     }
}

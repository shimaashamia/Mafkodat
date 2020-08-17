<?php

namespace App\Http\Controllers;
use App\Category;
use App\Place;
use App\Lost;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $categorys=Category::all(); 
        $places=Place::all();
        $losts=Lost::orderBy('id','desc')->get();
        return view ('post',compact('categorys','places','losts'));
        // return view('recordLost');
        // ->where('user_id','')
    }
    

public function edit($id)
    {
        //
        $owners = Owner::all();
        $losts = Lost::find($id);
        if(!$losts){
            \Session::flash('msg','e:Invalid chalet ID');
            return redirect('/chalets');
        }
        return view('chalet.edit')->with('title','Edit chalet (Request)')
            ->with('losts',$losts)->with('owners',$owners);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(chaletRequest $request, $id)
    {
        //
        $chalet= Chalet::find($id);
        if($request->hasFile('flePhoto')){
                  $photo = basename($request->flePhoto->store('public/images'));
                  $request['photo']=$photo;
              }
              $chalet->update([
                'name' => $request['name'],
                'owner_id' => $request['owner_id'],
                'Place' => $request['Place'],
                'price' => $request['price'],
                'details' => $request['details'],
                'photo' => $request['photo']
     ]);
        \Session::flash('msg','s:chalet Updated Successfully');
        return redirect('/chalets');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $losts = Lost::find($id);
        $losts->delete();
        \Session::flash('msg','w:chalet Deleted Successfully');
        return redirect('/post');
    }

    
// public function edit($id)
// {
//     $losts=Lost::find($id);

//     return view('editPost',compact('losts'));
//    }



// public function update(Request $request, $id)
// {
// $losts =Lost::find($id);
// $losts->categorys_id  = $request->categorys_id ;
// $losts->disclaimer = $request->disclaimer;
// $losts->title = $request->title;
// $losts->description = $request->description;
// $losts->places_id = $request->places_id;
// $losts->date = $request->date;
// $losts->name = $request->name;
// $losts->gmail = $request->gmail;
// $losts->numberphone = $request->numberphone;

// //  $expertise->update();
// $losts->save();
// return redirect('post');

// return response()->json([
//     'losts'=>$losts,
// ],200);
// }
}


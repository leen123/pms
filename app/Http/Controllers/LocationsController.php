<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Location\StoreLocationRequest;
use Illuminate\Http\Request;
use App\Location;
use App\State;

class LocationsController extends Controller
{
    public function add(){

    $state=State::all();
        return view ('locations.add',compact('state'));
    }

  public function store(StoreLocationRequest $request){
      $data = $request->validated();
      Location::create($data);

//  $location = new Location;
//  $location->name = $request->name;
//  //$location->state_id= $request->state_id;
//  $location->save();

        return back();
    }

 public function all(){

 $location= Location::with('state')->get();
        return view ('locations.all', compact('location'));
    }

   public function edit($id){

    $state=State::all();
       $location= Location::where('id','=',$id)->first();

        return view ('locations.edit',compact('location','state'));
    }

    public function update($id,Request $request){

 $location =Location::find($id);
 $location->name = $request->name;
 $location->state_id= $request->state_id;
 $location->save();
        return redirect('/locations/all');
    }

    public function delete($id){

     $location= Location::find($id);
     $location->delete();
       return redirect('/locations/all');
    }
}

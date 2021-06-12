<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Location;
class LocationsController extends Controller
{
    public function add(){

        return view ('locations.add');
    }

  public function store(Request $request){

 $location = new Location;
 $location->name = $request->name;
 $location->save();
        return back();
    }

 public function all(){

 $location= Location::all();
        return view ('locations.all', compact('location'));
    }

   public function edit($id){

       $location= Location::where('id','=',$id)->first();

        return view ('locations.edit',compact('location'));
    }

    public function update($id,Request $request){

 $location =Location::find($id);
 $location->name = $request->name;
 $location->save();
        return redirect('/locations/all');
    }

    public function delete($id){

     $location= Location::find($id);
     $location->delete();
       return redirect('/locations/all');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Format;

class FormatsController extends Controller
{
    public function add(){

        return view ('formats.add');
    }

  public function store(Request $request){

 $format = new Format;
 $format->name = $request->name;
 $format->save();
        return back();
    }

 public function all(){

 $format= Format::all();
        return view ('formats.all', compact('format'));
    }

   public function edit($id){

       $format= Format::where('id','=',$id)->first();

        return view ('formats.edit',compact('format'));
    }

    public function update($id,Request $request){

 $format =Format::find($id);
 $format->name = $request->name;
 $format->save();
        return redirect('/formats/all');
    }

    public function delete($id){

     $format= Format::find($id);
     $format->delete();
       return redirect('/edit-inputs-settings');
    }

}

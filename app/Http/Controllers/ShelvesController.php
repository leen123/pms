<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Shelf;

class ShelvesController extends Controller
{
    public function add(){

        return view ('shelves.add');
    }

  public function store(Request $request){

 $shelf = new Shelf;
 $shelf->name = $request->name;
 $shelf->save();
        return back();
    }

 public function all(){

 $shelf= Shelf::all();
        return view ('shelves.all', compact('shelf'));
    }

   public function edit($id){

       $shelf= Shelf::where('id','=',$id)->first();

        return view ('shelves.edit',compact('shelf'));
    }

    public function update($id,Request $request){

 $shelf =Shelf::find($id);
 $shelf->name = $request->name;
 $shelf->save();
        return redirect('/shelves/all');
    }

    public function delete($id){

     $shelf= Shelf::find($id);
     $shelf->delete();
       return redirect('/shelves/all');
    }
}

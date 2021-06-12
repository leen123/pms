<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Chemicalname;
class ChemicalnamesController extends Controller
{
    public function add(){

        return view ('chemicalnames.add');
    }

  public function store(Request $request){

 $chemicalname = new Chemicalname;
 $chemicalname->name = $request->name;
 $chemicalname->save();
        return back();
    }

 public function all(){

 $chemicalname= Chemicalname::all();
        return view ('chemicalnames.all', compact('chemicalname'));
    }

   public function edit($id){

       $chemicalname= Chemicalname::where('id','=',$id)->first();

        return view ('chemicalnames.edit',compact('chemicalname'));
    }

    public function update($id,Request $request){

 $chemicalname =Chemicalname::find($id);
 $chemicalname->name = $request->name;
 $chemicalname->save();
        return redirect('/chemicalnames/all');
    }

    public function delete($id){

     $chemicalname= Chemicalname::find($id);
     $chemicalname->delete();
       return redirect('/chemicalnames/all');
    }

}

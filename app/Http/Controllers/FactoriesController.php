<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Factory;

class FactoriesController extends Controller
{
    public function add(){

        return view ('factories.add');
    }

  public function store(Request $request){

 $factory = new Factory;
 $factory->name = $request->name;
 $factory->save();
        return back();
    }

 public function all(){

 $factory= Factory::all();
        return view ('factories.all', compact('factory'));
    }

   public function edit($id){

       $factory= Factory::where('id','=',$id)->first();

        return view ('factories.edit',compact('factory'));
    }

    public function update($id,Request $request){

 $factory =Factory::find($id);
 $factory->name = $request->name;
 $factory->save();
        return redirect('/factories/all');
    }

    public function delete($id){

     $factory= Factory::find($id);
     $factory->delete();
       return redirect('/edit-inputs-settings');
    }
}

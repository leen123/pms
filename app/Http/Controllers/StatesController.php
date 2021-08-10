<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\State;

class StatesController extends Controller
{
    public function add(){

        return view ('states.add');
    }

  public function store(Request $request){

 $state = new State;
 $state->name = $request->name;
 $state->save();
        return back();
    }

 public function all(){

 $state= State::all();
        return view ('states.all', compact('state'));
    }

   public function edit($id){

       $state= State::where('id','=',$id)->first();

        return view ('states.edit',compact('state'));
    }

    public function update($id,Request $request){

 $state =State::find($id);
 $state->name = $request->name;
 $state->save();
        return redirect('/site');
    }

    public function delete($id){

     $state= State::find($id);
     $state->delete();
       return redirect('/site');
    }
}

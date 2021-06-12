<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Type;
class TypesController extends Controller
{
    public function add(){

        return view ('types.add');
    }

  public function store(Request $request){

 $type = new Type;
 $type->name = $request->name;
 $type->save();
        return back();
    }

 public function all(){

 $type= Type::all();
        return view ('types.all', compact('type'));
    }

   public function edit($id){

       $type= Type::where('id','=',$id)->first();

        return view ('types.edit',compact('type'));
    }

    public function update($id,Request $request){

 $type =Type::find($id);
 $type->name = $request->name;
 $type->save();
        return redirect('/types/all');
    }

    public function delete($id){

     $type= Type::find($id);
     $type->delete();
       return redirect('/types/all');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Caliber;

class CalibersController extends Controller
{
    public function add(){

        return view ('calibers.add');
    }

  public function store(Request $request){

 $caliber = new Caliber;
 $caliber->name = $request->name;
 $caliber->save();
        return back();
    }

 public function all(){

 $caliber= Caliber::all();
        return view ('calibers.all', compact('caliber'));
    }

   public function edit($id){

       $caliber= Caliber::where('id','=',$id)->first();

        return view ('calibers.edit',compact('caliber'));
    }

    public function update($id,Request $request){

 $caliber =Caliber::find($id);
 $caliber->name = $request->name;
 $caliber->save();
        return redirect('/calibers/all');
    }

    public function delete($id){

     $caliber= Caliber::find($id);
     $caliber->delete();
       return redirect('/calibers/all');
    }

}

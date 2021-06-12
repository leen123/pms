<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pharmacy;

class PharmaciesController extends Controller
{
    public function add(){

        return view ('pharmacies.add');
    }

  public function store(Request $request){

 $pharmacy = new Pharmacy;
 $pharmacy->name = $request->name;
 $pharmacy->save();
        return back();
    }

 public function all(){

 $pharmacy= Pharmacy::all();
        return view ('pharmacies.all', compact('pharmacy'));
    }

   public function edit($id){

       $pharmacy= Pharmacy::where('id','=',$id)->first();

        return view ('pharmacies.edit',compact('pharmacy'));
    }

    public function update($id,Request $request){

 $pharmacy =Pharmacy::find($id);
 $pharmacy->name = $request->name;
 $pharmacy->save();
        return redirect('/pharmacies/all');
    }

    public function delete($id){

     $pharmacy= Pharmacy::find($id);
     $pharmacy->delete();
       return redirect('/pharmacies/all');
    }
}

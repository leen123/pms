<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Bill;

class BillsController extends Controller
{
    public function add(){

        return view ('bills.add');
    }

  public function store(Request $request){

 $bill = new Bill;
 $bill->date = $request->date;
 $bill->description = $request->description;
 $bill->total_price = $request->total_price;
 $bill->user_id = $request->user_id;
 $bill->save();
        return back();
    }

 public function all(){

 $bill= Bill::all();
        return view ('bills.all', compact('bill'));
    }

   public function edit($id){

       $bill= Bill::where('id','=',$id)->first();

        return view ('bills.edit',compact('bill'));
    }

    public function update($id,Request $request){

 $bill =Bill::find($id);
 $bill->date = $request->date;
 $bill->description = $request->description;
 $bill->total_price = $request->total_price;
 $bill->user_id = $request->user_id;
 $bill->save();
        return redirect('/bills/all');
    }

    public function delete($id){

     $bill= Bill::find($id);
     $bill->delete();
       return redirect('/bills/all');
    }
}

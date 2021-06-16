<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Bill;
use App\Warehouse;
use App\User;

class BillsController extends Controller
{
    public function add(){

        $warehouse=Warehouse::all();
        $user=User::all();
        return view ('bills.add',compact('warehouse','user'));
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

    $bill=Bill::with('warehouse','user')->get();

        return view ('bills.all', compact('bill'));
    }

   public function edit($id){


    $warehouse=Warehouse::all();
        $user=User::all();
       $bill= Bill::where('id','=',$id)->first();

        return view ('bills.edit',compact('bill','user','warehouse'));
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

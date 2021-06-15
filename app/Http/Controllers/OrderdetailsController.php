<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Orderdetail;

class OrderdetailsController extends Controller
{
    public function add(){

        return view ('orderdetails.add');
    }

  public function store(Request $request){

 $orderdetail = new Orderdetail;
 $orderdetail->quantity = $request->quantity;
 $orderdetail->price = $request->price;
 $orderdetail->order_id = $request->order_id;
 $orderdetail->product_id = $request->product_id;
 $orderdetail->save();
        return back();
    }

 public function all(){

 $orderdetail= Orderdetail::all();
        return view ('orderdetails.all', compact('orderdetail'));
    }

   public function edit($id){

       $orderdetail= Orderdetail::where('id','=',$id)->first();

        return view ('orderdetails.edit',compact('orderdetail'));
    }

    public function update($id,Request $request){

 $orderdetail =Orderdetail::find($id);
 $orderdetail->quantity = $request->quantity;
 $orderdetail->price = $request->price;
 $orderdetail->order_id = $request->order_id;
 $orderdetail->product_id = $request->product_id;
 $orderdetail->save();
        return redirect('/orderdetails/all');
    }

    public function delete($id){

     $orderdetail= Orderdetail::find($id);
     $orderdetail->delete();
       return redirect('/orderdetails/all');
    }
}

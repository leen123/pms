<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Orderdetail;
use App\Product;
use App\Order;

class OrderdetailsController extends Controller
{
    public function add(){
        $product=Product::all();
        $order=Order::all();
        return view ('orderdetails.add',compact('product','order'));
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
    $orderdetail=Orderdetail::with('product','order')->get();

        return view ('orderdetails.all', compact('orderdetail'));
    }

   public function edit($id){


     $product=Product::all();
        $order=Order::all();
       $orderdetail= Orderdetail::where('id','=',$id)->first();

        return view ('orderdetails.edit',compact('orderdetail','order','product'));
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

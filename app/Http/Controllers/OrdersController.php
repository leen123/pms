<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Order;

class OrdersController extends Controller
{
    public function add(){

        return view ('orders.add');
    }

  public function store(Request $request){

 $order = new Order;
 $order->name = $request->name;
 $order->save();
        return back();
    }

 public function all(){

 $order= Order::all();
        return view ('orders.all', compact('order'));
    }

   public function edit($id){

       $order= Order::where('id','=',$id)->first();

        return view ('orders.edit',compact('order'));
    }

    public function update($id,Request $request){

 $order =Order::find($id);
 $order->name = $request->name;
 $order->save();
        return redirect('/orders/all');
    }

    public function delete($id){

     $order= Order::find($id);
     $order->delete();
       return redirect('/orders/all');
    }

}

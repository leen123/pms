<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Order;
use App\User;

class OrdersController extends Controller
{
    public function add(){
        $user=User::all();
        return view ('orders.add',compact('user'));
    }

  public function store(Request $request){

 $order = new Order;
 $order->gender = $request->gender;
 $order->date = $request->date;
 $order->description = $request->description;
 $order->total_price = $request->total_price;
 $order->user_id = $request->user_id;
 $order->save();
        return back();
    }

 public function all(){
    $order=Order::with('user')->get();

        return view ('orders.all', compact('order'));
    }

   public function edit($id){

    $user=User::all();
       $order= Order::where('id','=',$id)->first();

        return view ('orders.edit',compact('order','user'));
    }

    public function update($id,Request $request){

 $order =Order::find($id);
 $order->gender = $request->gender;
 $order->date = $request->date;
 $order->description = $request->description;
 $order->total_price = $request->total_price;
 $order->user_id = $request->user_id;
 $order->save();
        return redirect('/orders/all');
    }

    public function delete($id){

     $order= Order::find($id);
     $order->delete();
       return redirect('/orders/all');
    }

}

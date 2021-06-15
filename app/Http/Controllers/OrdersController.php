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
 $order->name = $request->name;
 $order->save();
        return back();
    }

 public function all(){
    $order=Order::with('user')->get();
 $order= Order::all();
        return view ('orders.all', compact('order'));
    }

   public function edit($id){

    $user=User::all();
       $order= Order::where('id','=',$id)->first();

        return view ('orders.edit',compact('order','user'));
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

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Billdetail;
use App\Bill;
use App\product;

class BilldetailsController extends Controller
{
    public function add(){

        $bill=Bill::all();
        $product=Product::all();
        return view ('billdetails.add',compact('bill','product'));
    }

  public function store(Request $request){

 $billdetail = new Billdetail;
 $billdetail->quantity = $request->quantity;
 $billdetail->factory_price = $request->factory_price;
 $billdetail->selling_price = $request->selling_price;
 $billdetail->MGF_date = $request->MGF_date;
 $billdetail->expirty_date = $request->expirty_date;
 $billdetail->price = $request->price;
 $billdetail->bill_id = $request->bill_id;
 $billdetail->product_id = $request->product_id;
 $billdetail->save();
        return back();
    }

 public function all(){

    $billdetail=Billdetail::with('bill','product')->get();
        return view ('billdetails.all', compact('billdetail'));
    }

   public function edit($id){


      $bill=Bill::all();
      $product=Product::all();
       $billdetail= Billdetail::where('id','=',$id)->first();

        return view ('billdetails.edit',compact('billdetail','product','bill'));
    }

    public function update($id,Request $request){

 $billdetail =Billdetail::find($id);
 $billdetail->quantity = $request->quantity;
 $billdetail->factory_price = $request->factory_price;
 $billdetail->selling_price = $request->selling_price;
 $billdetail->MGF_date = $request->MGF_date;
 $billdetail->expirty_date = $request->expirty_date;
 $billdetail->price = $request->price;
 $billdetail->bill_id = $request->bill_id;
 $billdetail->product_id = $request->product_id;
 $billdetail->save();
        return redirect('/billdetails/all');
    }

    public function delete($id){

     $billdetail= Billdetail::find($id);
     $billdetail->delete();
       return redirect('/billdetails/all');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Billdetail;
class BilldetailsController extends Controller
{
    public function add(){

        return view ('billdetails.add');
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

 $billdetail= Billdetail::all();
        return view ('billdetails.all', compact('billdetail'));
    }

   public function edit($id){

       $billdetail= Billdetail::where('id','=',$id)->first();

        return view ('billdetails.edit',compact('billdetail'));
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

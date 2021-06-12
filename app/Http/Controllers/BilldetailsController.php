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
 $billdetail->name = $request->name;
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
 $billdetail->name = $request->name;
 $billdetail->save();
        return redirect('/billdetails/all');
    }

    public function delete($id){

     $billdetail= Billdetail::find($id);
     $billdetail->delete();
       return redirect('/billdetails/all');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Warehouse;

class WarehouseController extends Controller
{
    public function add(){

        return view ('warehouses.add');
    }

  public function store(Request $request){

 $warehouse = new Warehouse;
 $warehouse->name = $request->name;
 $warehouse->save();
        return back();
    }

 public function all(){

 $warehouse= Warehouse::all();
        return view ('warehouses.all', compact('warehouse'));
    }

   public function edit($id){

       $warehouse= Warehouse::where('id','=',$id)->first();

        return view ('warehouses.edit',compact('warehouse'));
    }

    public function update($id,Request $request){

 $warehouse =Warehouse::find($id);
 $warehouse->name = $request->name;
 $warehouse->save();
        return redirect('/warehouses/all');
    }

    public function delete($id){

     $warehouse= Warehouse::find($id);
     $warehouse->delete();
       return redirect('/warehouses/all');
    }
}

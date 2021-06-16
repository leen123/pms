<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Warehouse;
use App\Location;

class WarehouseController extends Controller
{
    public function add(){

        $location=Location::all();
        return view ('warehouses.add',compact('location'));
    }

  public function store(Request $request){

 $warehouse = new Warehouse;
 $warehouse->name = $request->name;
 $warehouse->phone = $request->phone;
 $warehouse->salesman_name = $request->salesman_name;
 $warehouse->location_id = $request->location_id;
 $warehouse->save();
        return back();
    }

 public function all(){
    $warehouse=Warehouse::with('location')->get();

        return view ('warehouses.all', compact('warehouse'));
    }

   public function edit($id){

    $location=Location::all();
       $warehouse= Warehouse::where('id','=',$id)->first();

        return view ('warehouses.edit',compact('warehouse','location'));
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

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Format;
use App\Type;
use App\Factory;
use App\Shelf;
use App\Caliber;
use App\Chemicalname;
use App\Pharmacy;

class ProductsController extends Controller
{
    public function add(){

        $format=Format::all();
        $type=Type::all();
        $factory=Factory::all();
        $shelf=Shelf::all();
        $caliber=Caliber::all();
        $chemicalname=Chemicalname::all();
        $pharmacy=Pharmacy::all();
        return view ('add-medicine', compact('format','type','factory','shelf','caliber','chemicalname','pharmacy'));
    }

  public function store(Request $request){

 $product = new Product;
 $product->name = $request->name;
 $product->barcode = $request->barcode;
 $product->description = $request->description;
 $product->limit_Qty = $request->limit_Qty;
 //////////////////////////////////////
 if(isset($request->image)){

    $image_name=rand().".".$request->image->getClientOriginalExtension();
    $product->image=$image_name;
    $request->image->move('upload',$image_name);
   }
   ////////////////////////////////////
 $product->current_price = $request->current_price;
 $product->net_price = $request->net_price;
 $product->application = $request->application;
 $product->composition = $request->composition;
 $product->side_effects = $request->side_effects;
 $product->notes = $request->notes;
 $product->format_id = $request->format_id;
 $product->factory_id = $request->factory_id;
 $product->shelf_id = $request->shelf_id;
 $product->pharmacy_id = $request->pharmacy_id;
 $product->type_id = $request->type_id;
 $product->caliber_id = $request->caliber_id;
 $product->chemicalname_id = $request->chemicalname_id;

 $product->save();
        return back();
    }

 public function all(){

$product=Product::with('format','type','factory','shelf','caliber','chemicalname','pharmacy')->get();

        return view ('search-for-medicine', compact('product'));
    }

   public function edit($id){

    $format=Format::all();
    $type=Type::all();
    $factory=Factory::all();
    $shelf=Shelf::all();
    $caliber=Caliber::all();
    $chemicalname=Chemicalname::all();
    $pharmacy=Pharmacy::all();
      $product= Product::where('id','=',$id)->first();

        return view ('edit-medicine',compact('product','format','type','factory','shelf','caliber','chemicalname','pharmacy'));
    }

    public function update($id,Request $request){

 $product =Product::find($id);
 $product->name = $request->name;
 $product->barcode = $request->barcode;
 $product->description = $request->description;
 $product->limit_Qty = $request->limit_Qty;
 /////////////////////////////
 if(isset($request->image)){
    $image_name=rand().".".$request->image->getClientOriginalExtension();
    $product->image=$image_name;
    $request->image->move('upload',$image_name);
   }
   /////////////////////////////
 $product->current_price = $request->current_price;
 $product->net_price = $request->net_price;
 $product->application = $request->application;
 $product->composition = $request->composition;
 $product->side_effects = $request->side_effects;
 $product->notes = $request->notes;
 $product->format_id = $request->format_id;
 $product->factory_id = $request->factory_id;
 $product->shelf_id = $request->shelf_id;
 $product->pharmacy_id = $request->pharmacy_id;
 $product->type_id = $request->type_id;
 $product->caliber_id = $request->caliber_id;
 $product->chemicalname_id = $request->chemicalname_id;
 $product->save();
        return redirect('/search-for-medicine');
    }

    public function delete($id){

     $product= Product::find($id);
     $product->delete();
       return redirect('/search-for-medicine');
    }
}

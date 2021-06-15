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
        return view ('products.add'.compact('format','type','factory','shelf','caliber','chemicalname','pharmacy'));
    }

  public function store(Request $request){

 $product = new Product;
 $product->name = $request->name;
 $product->save();
        return back();
    }

 public function all(){

    $product=Product::with('format','type','factory','shelf','caliber','chemicalname','pharmacy')->get();
 $product= Product::all();
        return view ('products.all', compact('product'));
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

        return view ('products.edit',compact('product','format','type','factory','shelf','caliber','chemicalname','pharmacy'));
    }

    public function update($id,Request $request){

 $product =Product::find($id);
 $product->name = $request->name;
 $product->save();
        return redirect('/products/all');
    }

    public function delete($id){

     $product= Product::find($id);
     $product->delete();
       return redirect('/products/all');
    }
}

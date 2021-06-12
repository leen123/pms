<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
class ProductsController extends Controller
{
    public function add(){

        return view ('products.add');
    }

  public function store(Request $request){

 $product = new Product;
 $product->name = $request->name;
 $product->save();
        return back();
    }

 public function all(){

 $product= Product::all();
        return view ('products.all', compact('product'));
    }

   public function edit($id){

       $product= Product::where('id','=',$id)->first();

        return view ('products.edit',compact('product'));
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

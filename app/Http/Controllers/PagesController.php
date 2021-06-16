<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function add_medicine(){

         return view ('add-medicine');
     }
    public function contact(){
         return view ('contact');
  }
  public function about(){

         return view ('about');
  }
  public function gallery(){

         return view ('gallery');
  }

  public function pricing(){

         return view ('pricing');
  }
  public function services(){

         return view ('services');
  }


}

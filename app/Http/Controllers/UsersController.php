<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function add(){

        return view ('users.add');
    }

  public function store(Request $request){

 $user = new User;
 $user->name = $request->name;
 $user->save();
        return back();
    }

 public function all(){

 $user= User::all();
        return view ('users.all', compact('user'));
    }

   public function edit($id){

       $user= User::where('id','=',$id)->first();

        return view ('users.edit',compact('user'));
    }

    public function update($id,Request $request){

 $user =User::find($id);
 $user->name = $request->name;
 $user->save();
        return redirect('/users/all');
    }

    public function delete($id){

     $user= User::find($id);
     $user->delete();
       return redirect('/users/all');
    }


}

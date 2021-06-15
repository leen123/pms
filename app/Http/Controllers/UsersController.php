<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\Location;


class UsersController extends Controller
{
    public function add(){

      $role=Role::all();
        $location=Location::all();
        return view ('users.add',compact('role','location'));
    }

  public function store(Request $request){

 $user = new User;
 $user->fullname = $request->fullname;
 $user->username = $request->username;
 $user->birth = $request->birth;
 $user->date_grad = $request->date_grad;
 $user->phone = $request->phone;
 $user->role_id = $request->role_id;
 $user->notes = $request->notes;
 //////////////////////////////
 if(isset($request->image)){
   $image_name=rand().".".$request->image->getClientOriginalExtension();
    $user->imag=$image_name;
    $request->image->move('upload',$image_name);
  }
  //////////////////////////////
 $user->email = $request->email;
 $user->password = $request->password;
 $user->save();
        return back();
    }

 public function all(){
    $user=User::with('role','location')->get();
 $user= User::all();
        return view ('users.all', compact('user'));
    }

   public function edit($id){


        $role=Role::all();
        $location=Location::all();
       $user= User::where('id','=',$id)->first();

        return view ('users.edit',compact('user','role','location'));
    }

    public function update($id,Request $request){

 $user =User::find($id);
 $user->fullname = $request->fullname;
 $user->username = $request->username;
 $user->birth = $request->birth;
 $user->date_grad = $request->date_grad;
 $user->phone = $request->phone;
 $user->role_id = $request->role_id;
 $user->notes = $request->notes;
 ////////////////////////////////
 if(isset($request->image)){
    $image_name=rand().".".$request->image->getClientOriginalExtension();
    $user->imag=$image_name;
    $request->image->move('upload',$image_name);
   }
//////////////////////////////
 $user->email = $request->email;
 $user->password = $request->password;
 $user->save();
        return redirect('/users/all');
    }

    public function delete($id){

     $user= User::find($id);
     $user->delete();
       return redirect('/users/all');
    }


}

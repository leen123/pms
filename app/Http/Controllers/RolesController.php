<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
class RolesController extends Controller
{
    public function add(){

        return view ('roles.add');
    }

  public function store(Request $request){

 $role = new Role;
 $role->name = $request->name;
 $role->save();
        return back();
    }

 public function all(){

 $role= Role::all();
        return view ('roles.all', compact('role'));
    }

   public function edit($id){

       $role= Role::where('id','=',$id)->first();

        return view ('roles.edit',compact('role'));
    }

    public function update($id,Request $request){

 $role =Role::find($id);
 $role->name = $request->name;
 $role->save();
        return redirect('/roles/all');
    }

    public function delete($id){

     $role= Role::find($id);
     $role->delete();
       return redirect('/roles/all');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Permission;

class PermissionsController extends Controller
{
    public function add(){

        return view ('permissions.add');
    }

  public function store(Request $request){

 $permission = new Permission;
 $permission->name = $request->name;
 $permission->save();
        return back();
    }

 public function all(){

 $permission= Permission::all();
        return view ('permissions.all', compact('permission'));
    }

   public function edit($id){

       $permission= Permission::where('id','=',$id)->first();

        return view ('permissions.edit',compact('permission'));
    }

    public function update($id,Request $request){

 $permission =Permission::find($id);
 $permission->name = $request->name;
 $permission->save();
        return redirect('/permissions/all');
    }

    public function delete($id){

     $permission= Permission::find($id);
     $permission->delete();
       return redirect('/permissions/all');
    }
}

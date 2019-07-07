<?php

namespace App\Http\Controllers;

use App\Role;
use App\RoleUser;
use Illuminate\Http\Request;

class RoleManagerController extends Controller
{
    public function index(){
        return view('role_manager')->with('roles',Role::all())->with('users',RoleUser::all());
    }
   public function save(Request $request){
       // dd($request->all());

       $roles=$request->role;

       $role_json=json_encode($roles);

       $user=$request->user;

       $object=new RoleUser();

       $object->name=$user;
       $object->roles=$role_json;
       $object->save();
       return redirect()->back();


   }

}

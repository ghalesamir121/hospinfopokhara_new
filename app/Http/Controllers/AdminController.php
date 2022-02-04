<?php

namespace App\Http\Controllers;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    public function addhospital()
    {
        return view('admin.add_hospital');
    }
    public function register(Request $request)
    {
       $admin=new admin;
       $image=$request->file;
       $imagename=time().'.'.$image->getClientOriginalExtension();
       $request->file->move('adminimage',$imagename);
       $admin->image=$imagename;
       $admin->name=$request->name;
       $admin->email=$request->email;
       $admin->number=$request->number;
       $admin->address=$request->address;
       $admin->password=$request->password;

       $admin->save();
       return redirect()->back()->with('message','Hospital  Added Successfully');


      
    }
}


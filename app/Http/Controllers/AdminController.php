<?php

namespace App\Http\Controllers;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use App\Models\Doctor;
use Illuminate\Support\Facades\DB;
use App\Models\Admin;
use App\Models\User;

class AdminController extends Controller
{
    // public function shiftdata()
    // {
    //     $admins=Admin::get();
    //     dd($admins);

    //     foreach ($admins as $key => $value) {
    //         User::create([
    //             'name'=>$value->name,
    //             'email'=>$value->email,
    //             'number'=>$value->number,
    //             'address'=>$value->address,
    //             'password'=>$value->password,
    //             'image'=>$value->image,
    //         ]);
    //     }
    //     return'shift data successfully';
    // }




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

    

    public function approve()
    {
        $data=doctor::all();
        return view('admin.approve',compact('data'));
    }

    public function deletehospital()
    {
        $hospital=admin::all();
        return view('admin.deletehospital',compact('hospital'));

    }
    public function delete_hospital($id)
    {
        DB::delete('delete from admins where id=?',[$id]);
        return redirect('deletehospital')->with('success','Doctor deleted');

    } 
}


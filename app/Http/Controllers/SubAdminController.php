<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class SubAdminController extends Controller
{

    public function addview()
    {
        return view('subadmin.add_doctor');
    }


    public function upload(Request $request)
    {
       $doctor=new doctor;
       $image=$request->file;
       $imagename=time().'.'.$image->getClientOriginalExtension();
       $request->file->move('doctorimage',$imagename);
       $doctor->image=$imagename;
       $doctor->name=$request->name;
       $doctor->phone=$request->number;
       $doctor->speciality=$request->speciality;
       $doctor->working=$request->hospital;

       $doctor->save();
       return redirect()->back()->with('message','Doctor Added Successfully');
    }
}

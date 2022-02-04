<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\add_bed;

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
       $doctor->work=$request->hospital;

       $doctor->save();
       return redirect()->back()->with('message','Doctor Added Successfully');
    }


    
    public function bedview()
    {
        return view('subadmin.add_bed');
    }
    public function add(Request $request)
    {
        $add_bed=new add_bed;
        $add_bed->total_bed=$request->totalbed;
        $add_bed->available_bed=$request->availablebed;
        $add_bed->total_icu=$request->totalicu;
        $add_bed->available_icu=$request->availableicu;

        $add_bed->save();
       return redirect()->back()->with('message','Bed and ICU Added Successfully');

    }

}

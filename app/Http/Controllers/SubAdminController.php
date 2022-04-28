<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\add_bed;
use Illuminate\Support\Facades\DB;

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
       $imagename=time().'.'.$image->getClientOriginalExtension() ;
       $request->file->move('doctorimage',$imagename);
       $doctor->image=$imagename;
       $doctor->name=$request->name;
       $doctor->phone=$request->number;
       $doctor->speciality=$request->speciality;
       $doctor->work=$request->hospital;
       $doctor->status='0';


       $doctor->save();
       return redirect()->back()->with('message','Doctor Added Successfully.. wait for Admin Approve for Display');
    }



    public function bedview()
    {
        return view('subadmin.add_bed');
    }
    public function add(Request $request)
    {
        $add_bed=new add_bed;

        $add_bed->hospital=$request->hospital;
        $add_bed->total_bed=$request->totalbed;
        $add_bed->available_bed=$request->availablebed;
        $add_bed->total_icu=$request->totalicu;
        $add_bed->available_icu=$request->availableicu;
        $add_bed->image=$request->image;

        $add_bed->save();
       return redirect()->back()->with('message','Bed and ICU Added Successfully');
    }

       public function delete_function($id)
       {
           DB::delete('delete from doctors where id=?',[$id]);
           return redirect('approve')->with('message','Doctor deleted');

       }

       public function update()
       {
        $data =add_bed::all()
        //   -> where('hospital', 'Auth::user()->name');
         -> where('hospital', 'Gandaki Hospital');
       return view('subadmin.update',compact('data'));
       }

       public function updatebed($id)
       {
           $value=Add_bed::find($id);
       return view('subadmin.updatebed',compact('value'));
       }

       public function edit(Request $request,$id)
       {
           $a=add_bed::find($id);
           $a->total_bed=$request->totalbed;
           $a->available_bed=$request->availablebed;
           $a->total_icu=$request->totalicu;
           $a->available_icu=$request->availableicu;
           $a->save();
           return redirect()->back()->with('message','updated Successfully..');

       }

}

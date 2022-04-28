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
    public function approvehospital()
    {
        $hospital=User::all()
        ->where("usertype", 0);
        return view('admin.approvehospital',compact('hospital'));
    }
    public function usertype(Request $request,$id)
    {
        $data=User::find($id);
       if($data->usertype==0)
       {
           $data->usertype=1;
       }else
       {
           $data->usertype=0;
        }
         $data->save();
         return redirect()->back()->with('message',$data->name.'  Approved  Successfully');
    }

    //for approve doctor
 public function approvedoctor()
    {
        $doctor=Doctor::all()
        ->where("status", 0);
        return view('admin.approvedoctor',compact('doctor'));
    }

public function status(Request $request,$id)
    {
        $value=Doctor::find($id);
       if($value->status==0)
       {
           $value->status=1;
       }else
       {
           $value->status=0;
        }
        
         $value->save();
         return redirect()->back()->with('message',$value->name.'  Approved Successfully');
    }
    
    public function approve()
    {
        $data=doctor::all();
        return view('admin.approve',compact('data'));
    }

    public function deletehospital()
    {
        $hospital = User::All()
         ->where("usertype",1);
    
        return view('admin.deletehospital',compact('hospital')); 
   
    }
    public function delete_hospital($id)
    {
        // DB::delete('delete from users where usertype=?',[$id]);
        // return redirect('deletehospital')->with('message',' deleted Successfully');
       $hospital=User::find($id);
       $hospital->delete();
       return redirect('deletehospital')->with('message',$hospital->name.'  deleted Successfully');

    } 
}


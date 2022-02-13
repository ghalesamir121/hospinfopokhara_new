<?php

namespace App\Http\Controllers;

use App\Models\add_bed;
use App\Models\Admin;
use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;


class HomeController extends Controller
{
    public function redirect()
    {
        // if (Auth::id()) {
        //     if (Auth::user()->usertype == '0') {
            
        //         return view('subadmin.home');
        //     } else {
        //         return view('admin.home');
        //     }
        // } else {
        //     return redirect()->back();
        // }


        if (Auth::id()) {
            if (Auth::user()->usertype == '1') 
            {
                return view('subadmin.home');
            }
             elseif(Auth::user()->usertype == '2')
             {
                return view('admin.home');
            }
            else
            {
                return view('user.dashboard') ;
            }
        } 
        else{
            return redirect()->back();
        }
    }
    public function index()
    {
        $viewbed=add_bed::all();
        return view('user.home',compact('viewbed'));
    }
    public function doctor()
    {
        $doctor=doctor::all();
        // return view('user.Doctors',compact('doctor'));
        return view('doctor.Doctors',compact('doctor'));
       
    }
}

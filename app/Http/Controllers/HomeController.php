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
        // $viewbed = add_bed::where('hospital',)->get();
        return view('user.home',compact('viewbed'));
    }
    


    public function showdoctor()
    {
        // $doctor=doctor::all();
        $doctor = doctor::where('status',1)->get();
        return view('user.doctorview',compact('doctor'));
    }

    public function aboutus()
    {
        return view('user.aboutus');
    }

    public function contact()
    {
        return view('user.contact');
    }

}

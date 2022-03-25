<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Dflydev\DotAccessData\Data;
use Illuminate\HTTP\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'image'=>['sometimes','image','mimes:jpg,jpeg,bmp,png'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        // if(request()->has('image'))
        // {
            $image=request()->file('image');
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $imagepath= public_path('/hospitalphoto');
            $image->move($imagepath,$imagename);
        
    
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'number'=>$data['number'],
            'address'=>$data['address'],
            'password' => Hash::make($data['password']),
            'image'=>$data['image'],
            // 'image'=>$fileName,
        ]);


        // $file_extention = $data['image']->getClientOriginalExtension();
        // $file_name = time().rand(99,999).'image.'.$file_extention;
        // $file_path = $data['image']->move(public_path().'/hospitalphoto',$file_name);
    
        // return User::create([
        //     // 'name' => $data['name'],
        //     // 'email' => $data['email'],
        //     // 'password' => bcrypt($data['password']),
        //     // 'dob' => $data['dob'],
        //     // 'profile_picture' => $file_path,
        //     'name' => $data['name'],
        //     'email' => $data['email'],
        //     'number'=>$data['number'],
        //     'address'=>$data['address'],
        //     'password' => Hash::make($data['password']),
        //     'image'=>$file_path 
        //]);
    
    }
}

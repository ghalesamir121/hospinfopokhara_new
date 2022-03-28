<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $data)
    {        
       $user= User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'number'=>$data['number'],
            'address'=>$data['address'],
            'password' => Hash::make($data['password']),
            
        ]);
        if(request()->hasFile('image')){
            $image=request()->file('image')->getClientOriginalName();
            request()->file('image')->move('hospitalphoto', name:$user->id.'/'.$image);
            $user->update(['image'=>$image]);
        }
        return $user;
    }
}

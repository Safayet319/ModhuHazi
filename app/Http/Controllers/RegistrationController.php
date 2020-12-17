<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class RegistrationController extends Controller
{
    public function store(Request $request){
        // dd('here ');

        // $name = $request['name'];
        // $mobile = $request['mobile'];
        // $email = $request['email'];
        // $designation = $request['designation'];
        // $organization = $request['organization'];

        $request->validate([

            'name' => 'required|string|max:50',
            'mobile' => 'required|string|max:11',
            'email' => 'required|email|unique:infos,email',
            'designation' => 'required|string',
            'organization' => 'required|string',
            
        ]);

        $user = new User;
        $user->name = request('name');
        $user->mobile = request('mobile');
        $user->email = request('email');
        $user->desg = request('designation');
        $user->org = request('organization');

        $user->save();

        // return redirect('/');





        // dd($name,$mobile,$email,$designation,$organization);
    }
}

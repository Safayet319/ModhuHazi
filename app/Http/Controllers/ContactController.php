<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
 
    public function message(Request $request)
    {   
        
        // return $request;
            $request->validate([
                'name' => 'required|string|max:50',
                'mobile_no' =>'required|numeric|max:11',
                'email' =>'string|email', 
                'messagee' =>'required|string', 
            ]);

            

      
    }
}

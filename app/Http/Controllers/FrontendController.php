<?php

namespace App\Http\Controllers;

use App\Info;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('website.home');
    }

    public function project(){
        return view('website.project');
    }

    public function about(){
        return view('website.about');
    }

    public function contact(){
        return view('website.contact');
    }

    public function gallery(){
        return view('website.gallery');
    }

    /**
     * |--------------
     * |Return Response
     * |Recived a Request
     * |Info Data 
     * |-------------
     */
    public function infoSave(Request $request){
        // return $request;
        $info = new Info();
        $info->name = $request->name;
        $info->email = $request->email; 
        $info->phone = $request->mobile; 
        $info->designation = $request->designation;
        $info->organization = $request->organization;
        $info->save();
        return back()->with('message','Thanks for contact'); 
    }

}

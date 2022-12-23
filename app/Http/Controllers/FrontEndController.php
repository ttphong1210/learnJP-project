<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    //

    public function getHome(){
        return view('frontend.home');
    }
    public function getCourses(){

        return view('frontend.courses');
    }
}

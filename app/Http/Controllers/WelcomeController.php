<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    function index(){
        return view('index');
    }
    function about(){
        return view('about');
    }
    function services($name,$id){
        return view('services',compact('name','id'));
    }
}

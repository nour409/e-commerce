<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class WelcomeController extends Controller
{
    function index(){
        return view('index');
    }
    function about(){
        return view('about');
    }
    function services($name,$id){
        $data=Product::all();
        return view('services',compact('data'));
    }
    function show($id){
        $data=Product::find($id);
        return view('item',compact('data'));
    }
}

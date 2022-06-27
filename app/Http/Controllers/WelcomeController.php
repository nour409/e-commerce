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

    function create(){
      
        return view('create');
    }
    function createPost(Request $request){
      $Prouduct =new Product();

 
        $Prouduct->product_name = $request->Proudct_Name;
        $Prouduct->product_price = $request->Proudct_description;
        $Prouduct->product_description = $request->Proudct_price;
 
        $Prouduct->save();
        $data=Product::all();
        return view('services',compact('data'));
  
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Session;
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
      Session::put("massage","your prouduct is added");
        return redirect('create');
  
    }

    function edit($id){
        
        $data=Product::find($id);

        return view("edit",compact("data")); 
    }

    function editProduct(Request $request){
        $Prouduct=Product::find($request->id);

        $Prouduct->product_name = $request->Proudct_Name;
        $Prouduct->product_price =   $request->Proudct_price;
        $Prouduct->product_description =$request->Proudct_description;
      
        $Prouduct->update();
      Session::put("massage","your prouduct is updated");
      $data=$Prouduct;
      return redirect()->back();
  
    }


    function delete($id){
        
        $data=Product::find($id);
        $data->delete();
        Session::put("massage","your prouduct is deleted");
        return redirect()->back();
    }
}

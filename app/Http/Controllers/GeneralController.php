<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
  public function shop(){
    $products = Product::orderBy('id','desc')->limit(20)->get();
    return view('shop')->with('products',$products);
  }

 public function welcome(){
     $products = Product::orderBy('id','desc')->limit(20)->get();
     return view('welcome')->with('products',$products);
 }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        return view('home');
    }

    /**
     * Show the application landing page.
     *
     * @return \Illuminate\::views
     */
     public function shop(){
       $products = Product::orderBy('id','desc')->limit(20)->get();
       return view('shop')->with('products',$products);
     }

    public function welcome(){
        $products = Product::orderBy('id','desc')->limit(20)->get();
        return view('welcome')->with('products',$products);
    }









}

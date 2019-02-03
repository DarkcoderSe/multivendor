<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Brand;
use Auth;

class SellerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('seller.index');
    }

    // products
    public function product(){
        $products = Product::where('user_id', Auth::user()->id)->get();
        return view('seller.product.index')->with([
            'products' => $products

        ]);
    }
    public function product_new(){
        $categories = Category::all();
        $brands = Brand::all();
        return view('seller.product.new')->with([
            'categories' => $categories,
            'brands' => $brands
        ]);
    }
    public function product_delete($id){
        Product::find($id)->delete();
        return redirect()->back();
    }
    public function product_edit($id){
        $product = Product::find($id);
        $categories = Category::all();
        $brands = Brand::all();

        return view('seller.product.edit')->with([
            'product' => $product,
            'categories' => $categories,
            'brands' => $brands
        ]);
    }
    public function product_submit(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|string|max:191',
            'mark_price' => 'integer',
            'price' => 'integer|required',
            'image' => 'mimes:jpeg,png',
        ]);

        $product = new Product;
        $product->name = $request->name;
        $product->mark_price = $request->mark_price;
        $product->price = $request->price;
        $product->code =$request->code;
        $product->description = $request->description;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
            $product->image = $name;
        }
        $product->category_id = $request->category;
        $product->brand_id = $request->brand;
        $product->user_id = Auth::user()->id;
        $product->status = 'active';
        $product->save();
        return redirect('/seller/product');
    }
    public function product_update(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|string|max:191',
            'mark_price' => 'integer',
            'price' => 'integer|required',
            'image' => 'mimes:jpeg,png',
        ]);

        $product = Product::find($request->id);
        $product->name = $request->name;
        $product->mark_price = $request->mark_price;
        $product->price = $request->price;
        $product->code =$request->code;
        $product->description = $request->description;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
            $product->image = $name;
        }
        $product->category_id = $request->category;
        $product->brand_id = $request->brand;
        $product->user_id = Auth::user()->id;
        $product->status = $request->status;
        $product->save();
        return redirect('/seller/product');
    }

    ///orders
    public function orders(){
        $products = Product::where('user_id', Auth::user()->id)->get();
        
        return view('seller.order.index')->with([
            'orders' => $orders
        ]);
    }
}

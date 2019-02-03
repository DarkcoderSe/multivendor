<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\User;
use App\UserDetail;
use App\Order;
use Auth;
use Cart;

class UserController extends Controller
{
    //
    public function add_to_cart(Request $request){
        $product = Product::find($request->product_id);
        // $user_id = Auth::user()->id;
        Cart::add(array(
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => 1,
            'attributes' => array()
        ));

        $response = array(
            'status' => 'success',
            'message' => 'Item added Successfully'
        );
        return \Response::json($response);
    }
    public function get_from_cart(){
        // $user_id = Auth::user()->id;
        $response = Cart::getContent();

        // Desi Methods
        $newArray = array();
        $i=0;
        foreach($response as $r){
            $newArray[$i] = $r;
            $i++;
        }

        return \Response::json($newArray);
    }
    public function delete_from_cart($id){
        Cart::remove($id);
        $response = array(
            'status' => 'success',
            'message' => 'Item Successfully Removed'
        );
        return \Response::json($response);

    }
    public function cart_checkout(){
        $response = Cart::getContent();

        // Desi Methods
        $newArray = array();
        $i=0;
        foreach($response as $r){
            $newArray[$i] = $r;
            $i++;
        }
        return view('buyer.checkout')->with([
            'cart' => $newArray
        ]);

    }
    public function cart_checkout_submit(Request $request){
        $userDetail = new UserDetail;
        if(Auth::check()){
                $userDetail->user_id = Auth::user()->id;
        }

        $userDetail->guest = $request->name;
        $userDetail->contact = $request->contact;
        $userDetail->address = $request->address;
        $userDetail->save();

        $response = Cart::getContent();

        foreach($response as $r){
            $order = new Order;
            $order->user_details_id = $userDetail->id;
            $order->product_id = $r->id;
            $order->quantity = $r->quantity;
            $order->total = ($r->quantity * $r->price);
            $order->message = $request->message;
            $order->save();
        }

        return view('buyer.recipt')->with([
            'cart' => $response
        ]);


    }
}

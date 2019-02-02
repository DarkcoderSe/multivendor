<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\User;
use Auth;
use Cart;

class UserController extends Controller
{
    //
    public function add_to_cart(Request $request){
        $product = Product::find($request->product_id);
        $user_id = Auth::user()->id;
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
        $user_id = Auth::user()->id;
        $response = Cart::getContent();

        $response->toArray();
        // $response = array_values($response);
        // array_splice($response, 1);
        // return $response;
        return \Response::json($response);
    }
    public function delete_from_cart($id){
        Cart::remove($id);
        $response = array(
            'status' => 'success',
            'message' => 'Item Successfully Removed'
        );
        return \Response::json($response);

    }
}

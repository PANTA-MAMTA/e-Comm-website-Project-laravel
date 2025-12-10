<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
   
    function index()
    {
       // return Product::all();
        $data=Product::all();
        return view('product',['products'=>$data]);

    }

    function detail($id)
    {
        $data =Product::find($id);
        return view('detail',['product'=>$data]);
    }

     function search(Request $req)
    {
        //return $req->input();
        $data =Product::where('name','like','%'.$req->input('query'). '%')
        ->get();
        return view('search', ['products'=>$data]);
    }

     function addToCart(Request $req)
{
    if (session()->has('user'))  // <-- FIXED
    {
        $cart = new Cart;
        $cart->user_id = session()->get('user')['id'];  // <-- FIXED
        $cart->product_id = $req->product_id;
        $cart->save();
        return redirect('/');
    }
    else
    {
        return redirect('/login');
    }
}

 function cartList()
{
    $userId = Session::get('user')['id'];

    $data= DB::table('cart')
        ->join('products', 'cart.product_id', '=', 'products.id')
        ->select('products.*', 'cart.id as cart_id')
        ->where('cart.user_id', $userId)
        ->get();

    return view('cartlist', ['products' => $data]);
}

function removeCart($id)
{
    Cart::destroy($id);
    return redirect('cartlist');
}

function orderNow()
{
     $userId = Session::get('user')['id'];

    $total= DB::table('cart')
        ->join('products', 'cart.product_id', '=', 'products.id')
        ->select('products.*', 'cart.id as cart_id')
        ->where('cart.user_id', $userId)
        ->sum('products.price');

    return view('ordernow', ['products' => $total]);
}

function orderPlace(Request $req)
{
    $userId = Session::get('user')['id'];

    // Get all cart items of this user
    $allCart = Cart::where('user_id', $userId)->get();

    foreach ($allCart as $cart) {

        $order = new Order;
        $order->product_id = $cart['product_id'];
        $order->user_id = $cart['user_id'];
        $order->address = $req->address;
        $order->status = "pending";
        $order->payment_method = $req->payment;
        $order->payment_status = "pending";
        $order->save();
    }

    // After placing an order remove all items from cart
    Cart::where('user_id', $userId)->delete();

    return redirect('/');
}


}

<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    // Home page
    function index()
    {
        $data = Product::all();
        return view('product', ['products' => $data]);
    }

    // Product detail
    function detail($id)
    {
        $data = Product::find($id);
        return view('detail', ['product' => $data]);
    }

    // Search
    function search(Request $req)
    {
        $data = Product::where('name', 'like', '%' . $req->query . '%')->get();
        return view('search', ['products' => $data]);
    }

    // Add to cart
    function addToCart(Request $req)
    {
        if (Session::has('user')) {

            $cart = new Cart();
            $cart->user_id = Session::get('user')['id'];
            $cart->product_id = $req->product_id;
            $cart->save();

            return redirect('/');
        } else {
            return redirect('/login');
        }
    }

    // Cart List
    function cartList()
    {
        $userId = Session::get('user')['id'];

        $data = DB::table('cart')
            ->join('products', 'cart.product_id', '=', 'products.id')
            ->select('products.*', 'cart.id as cart_id')
            ->where('cart.user_id', $userId)
            ->get();

        return view('cartlist', ['products' => $data]);
    }

    // Remove cart item
    function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('cartlist');
    }

    // Order Now
    function orderNow()
    {
        $userId = Session::get('user')['id'];

        $total = DB::table('cart')
            ->join('products', 'cart.product_id', '=', 'products.id')
            ->where('cart.user_id', $userId)
            ->sum('products.price');

        return view('ordernow', ['total' => $total]);
    }

    // Place order
    function orderPlace(Request $req)
    {
        $userId = Session::get('user')['id'];
        $allCart = Cart::where('user_id', $userId)->get();

        foreach ($allCart as $cart) {
            $order = new Order();
            $order->product_id = $cart->product_id;
            $order->user_id = $cart->user_id;
            $order->address = $req->address;
            $order->status = "pending";
            $order->payment_method = $req->payment;
            $order->payment_status = "pending";
            $order->save();
        }

        Cart::where('user_id', $userId)->delete();

        return redirect('/');
    }

    // My Orders
    function myOrder()
    {
        $userId = Session::get('user')['id'];

        $orders = DB::table('orders')
            ->join('products', 'orders.product_id', '=', 'products.id')
            ->where('orders.user_id', $userId)
            ->select('products.*', 'orders.*')
            ->get();

        return view('myorders', ['orders' => $orders]);
    }
}

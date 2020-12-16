<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Cart;
use App\Order;
use App\User;
use App\Http\Controllers\Session;
use Illuminate\Support\Facades\Mail;
use App\Mail\Sendmail;
use Cartalyst\Stripe\Laravel\Facades\Stripe;

class CartController extends Controller
{
    public function addToCart(Product $product)
    {
        if (session()->has('cart')) {
            $cart = new Cart(session()->get('cart'));
        } else {
            $cart = new Cart();
        }
        $cart->add($product);
        //dd($cart);

        session()->put('cart', $cart);
        notify()->success('Product added to cart');
        return redirect()->back();
    }

    public function showCart()
    {
        if (session()->has('cart')) {
            $cart = new Cart(session()->get('cart'));
        } else {
            $cart = null;
        }
        //dd($cart->items);
        return view('shop.cart', compact('cart'));
    }

    public function updateCart(Request $request, Product $product)
    {
        $request->validate([
            'qty' => 'required|numeric|min:1'
        ]);

        $cart = new Cart(session()->get('cart'));
        $cart->updateQty($product->id, $request->qty);
        session()->put('cart', $cart);

        session()->flash('error', 'Cart updated successfully');
        return redirect()->back();
    }

    public function removeCart(Product $product)
    {
        $cart = new Cart(session()->get('cart'));
        $cart->remove($product->id);
        if ($cart->totalQty <= 0) {
            session()->forget('cart');
        } else {
            session()->put('cart', $cart);
        }

        session()->flash('error', 'Cart updated successfully');
        return redirect()->back();
    }

    public function checkout($amount)
    {
        if(session()->has('cart')){
            $cart = new Cart(session()->get('cart'));
        }else{
            $cart = null;
        }
        return view('shop.checkout',compact('amount','cart'));
    }

    public function charge(Request $request)
    {
        $request->stripeToken;

        $charge = Stripe::charges()->create([
            'currency' => "USD",
            'source' => $request->stripeToken,
            'amount' => $request->amount,
            'description' => $request->Test
        ]);

        $chargeId = $charge['id'];
        if(session()->has('cart')){
            $cart = new Cart(session()->get('cart'));
        }else{
            $cart = null;
        }
        Mail::to(auth()->user()->email)->send(new Sendmail($cart));

        if ($chargeId) {
            auth()->user()->orders()->create([
                'cart' => serialize(session()->get('cart'))
            ]);
            session()->forget('cart');
            session()->flash('error', 'Transaction completed');
            return redirect()->to('/');
        } else {
            return redirect()->back();
        }

        if ($chargeId) {
            auth()->user()->orders()->create([

                'cart' => serialize(session()->get('cart'))
            ]);

            session()->forget('cart');
            notify()->success(' Transaction completed!');
            return redirect()->to('/');
        } else {
            return redirect()->back();
        }
    }

    //for logged in user
    public function order()
    {
        $orders = auth()->user()->orders;
        $carts = $orders->transform(function ($cart, $key) {
            return unserialize($cart->cart);
        });
        return view('shop.order', compact('carts'));
    }
    //for admin
    public function userOrder(){
        $orders = Order::latest()->get();
        //return $orders;

        return view('admin.order.index', compact('orders'));
    }


    public function viewUserOrder($userid,$orderid){
        $user = User::find($userid);
        $orders = $user->orders->where('id',$orderid);
        $carts =$orders->transform(function($cart,$key){
            return unserialize($cart->cart);

        });
        return view('admin.order.show',compact('carts'));
    }

}

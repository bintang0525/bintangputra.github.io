<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Cart;
use App\Transaction;
use Mail;
use App\Mail\CheckoutMail;

class CheckoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store()
    {
        $carts = Cart::where('user_id', Auth::user()->id);

        $cartUser = $carts->get();

        $Transaction = Transaction::create([
            'user_id' => Auth::user()->id
        ]);

        foreach ($cartUser as $cart) {
            $Transaction->detail()->create([
                'product_id' => $cart->product_id,
                'qty' => $cart->qty
            ]);
        }

        Mail::to($carts->first()->user->email)->send(new CheckoutMail($cartUser));

        Cart::where('user_id', Auth::user()->id)->delete();
        return redirect('/');
    }
}

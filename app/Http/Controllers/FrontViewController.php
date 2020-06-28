<?php

namespace App\Http\Controllers;
use App\Product;

use Illuminate\Http\Request;
use Cart;

class FrontViewController extends Controller
{
    public function index()
    {
    	$all_books=Product::take(10)->get();

    	$cart_items=Cart::content();
    	
        return view('frontViewLayouts.home',['all_books'=>$all_books], ['cart_items'=>$cart_items]);
    }

    public function test()
    {
        return view('frontViewLayouts.test');
    }
}

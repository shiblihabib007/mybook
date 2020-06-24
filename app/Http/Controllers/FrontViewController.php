<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontViewController extends Controller
{
    public function index()
    {
        return view('frontViewLayouts.home');
    }

    public function test()
    {
        return view('frontViewLayouts.test');
    }
}

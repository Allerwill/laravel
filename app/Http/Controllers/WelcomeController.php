<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Product;
use app\Manufacture;

class WelcomeController extends Controller
{
    public function index($ID = 'index')
    {
//        $products = Product::all();
//        return view('welcome', ['Product' => $products]);
        return view($ID);
    }


}

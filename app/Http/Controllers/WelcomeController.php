<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
<<<<<<< HEAD
<<<<<<< HEAD
    public function index($ID = 'index'){
        //$product = Product::all();
        //return view('welcome', ['product' => $product]);
=======
    public function index($ID = 'index')
    {
//        $products = Product::all();
//        return view('welcome', ['Product' => $products]);
>>>>>>> 0bf2aca0f4381e6d507cd3a35d14c39e115ba7ec
=======
    public function index($ID = 'index'){
>>>>>>> parent of 0bf2aca... Created Model: Product, Manufacture
        return view($ID);
    }

}

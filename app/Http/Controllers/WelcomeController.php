<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Protype;
use app\Product;

class WelcomeController extends Controller
{

    public function index($ID = 'index'){
        //$product = Product::all();
        //return view('welcome', ['product' => $product]);
        return view($ID);
    }

}

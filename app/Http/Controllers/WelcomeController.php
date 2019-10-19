<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Protype;
use App\Product;

class WelcomeController extends Controller
{

    public function index($ID = 'index'){
        $Product = Product::paginate(4);
       return view($ID, ['Product' => $Product]);
  //return view($ID);
    }
    public function  details($ID)
    {
        $
    }

}

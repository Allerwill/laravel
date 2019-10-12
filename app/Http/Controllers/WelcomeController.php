<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index($ID = 'index'){
        return view($ID);
    }

}

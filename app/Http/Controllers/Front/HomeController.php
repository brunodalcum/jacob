<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use CoffeeCode\Optimizer\Optimizer;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $optmizer = new Optimizer();
        var_dump($optmizer);
        //return view('index');
    }


}

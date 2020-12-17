<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Support\Seo;
use CoffeeCode\Optimizer\Optimizer;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {


     $head =$this->seo->render(env('APP_NAME') . ' - Loja de Jeans',
        'O melhor jean masculino',
        route('index'),
        asset('img/banner/banner-1.jpg'),
        'sim');

        return view('index', [
            'head' =>  $head
        ]);
    }


}

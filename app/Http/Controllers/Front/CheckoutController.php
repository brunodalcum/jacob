<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        $head =$this->seo->render(env('APP_NAME') . ' - Loja de Jeans',
            'O melhor jean masculino',
            url('www.jacobjeans.com.br'),
            asset('img/banner/banner-1.jpg'),
            'sim');

        return view('frontend.checkout.checkout', [
            'head' =>  $head
        ]);
    }
}

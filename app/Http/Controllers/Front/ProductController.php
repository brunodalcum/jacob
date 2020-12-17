<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products()
    {
        $head =$this->seo->render(env('APP_NAME') . ' - Loja de Jeans',
            'O melhor jean masculino',
            url('www.jacobjeans.com.br'),
            asset('img/banner/banner-1.jpg'),
            'sim');

        return view('frontend.product.products', [
            'head' =>  $head
        ]);
    }

    public function productList()
    {
        $head =$this->seo->render(env('APP_NAME') . ' - Loja de Jeans',
            'O melhor jean masculino',
            url('www.jacobjeans.com.br'),
            asset('img/banner/banner-1.jpg'),
            'sim');

        return view('frontend.product.products-list',[
            'head' =>  $head
        ]);

    }

    public function product()
    {
        $head =$this->seo->render(env('APP_NAME') . ' - Loja de Jeans',
            'O melhor jean masculino',
            url('www.jacobjeans.com.br'),
            asset('img/banner/banner-1.jpg'),
            'sim');

        return view('frontend.product.product', [
            'head' =>  $head
        ]);
    }

    public function combos()
    {
        return view('');
    }
}

<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products()
    {
        return view('frontend.product.products');
    }

    public function productList()
    {
        return view('frontend.product.products-list');
    }

    public function product()
    {
        return view('frontend.product.product');
    }

    public function combos()
    {
        return view('');
    }
}

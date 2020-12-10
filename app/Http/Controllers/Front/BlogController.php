<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('frontend.blog.blog');
    }

    public function post()
    {
        return view('frontend.blog.blog-post');
    }
}

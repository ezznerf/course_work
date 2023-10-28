<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog.index');
    }

    public function show($post)
    {
        return "Show post numba {$post}";
    }


    public function like($post)
    {
        return "{$post}Post Lieks";
    }

}

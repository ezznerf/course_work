<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return "Index Page";
    }

    public function create()
    {
        return "Craete PAge";
    }

    public function store()
    {
        return "Store Page";
    }

    public function show($post)
    {
        return "Show PAge{$post}";
    }

    public function edit()
    {
        return "Edit Page";
    }

    public function delete()
    {
        return "Delete Page";
    }

    public function like()
    {
        return "Like Page";
    }


}

<?php

namespace App\Controllers;

use App\Controllers\Controller;

class PostController extends Controller 
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        return $this->view('/posts/index');
    }

    public function create()
    {
        return $this->view('/posts/create');
    }

    public function store()
    {
        return $this->route()->redirect('/posts/edit');
    }

    public function edit()
    {
        return $this->view('/posts/edit');
    }

    public function update()
    {
        return $this->route()->redirect('/posts/update');
    }

    public function destroy()
    {
        return $this->route()->redirect('/posts/destroy');
    }
}
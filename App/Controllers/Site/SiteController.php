<?php

namespace App\Controllers\Site;

use App\Controllers\Controller;

class SiteController extends Controller 
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        return $this->view('/site/index');
    }

    public function sobre()
    {
        return $this->view('/site/sobre');
    }

    public function servicos()
    {
        return $this->view('/site/servicos');
    }

    public function portfolio()
    {
        return $this->view('/site/portfolio');
    }
}
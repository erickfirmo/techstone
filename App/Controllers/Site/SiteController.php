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

    public function produtos()
    {
        return $this->view('/site/produtos');
    }

    public function portfolio()
    {
        return $this->view('/site/portfolio');
    }

    public function lojas_virtuais()
    {
        return $this->view('/site/lojas-virtuais');
    }

    public function criacao_de_sites()
    {
        return $this->view('/site/criacao-de-sites');
    }

    public function adwords()
    {
        return $this->view('/site/adwords');
    }

    public function contato()
    {
        return $this->view('/site/contato');
    }
}
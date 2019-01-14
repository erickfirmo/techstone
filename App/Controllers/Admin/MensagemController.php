<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;
use App\Mensagem;

class MensagemController extends Controller 
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $mensagens = (new Mensagem())->all();
        return $this->view('/admin/mensagens/index', [
            'mensagens' => $mensagens
        ]);
    }

    public function show($id)
    {
        $mensagens = (new Mensagem())->find($id);
        return $this->view('/admin/mensagens/show', [
            'mensagem' => $mensagem
        ]);
    }
}
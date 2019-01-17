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

    public function all()
    {
        $mensagens = (new Mensagem())->paginate(2)->all();
        return $this->view('/admin/mensagens/all', [
            'mensagens' => $mensagens
        ]);
    }

    public function single($id)
    {
        $mensagens = (new Mensagem())->all();
        $mensagem = (new Mensagem())->find($id);
        return $this->view('/admin/mensagens/single', [
            'mensagem' => $mensagem,
            'mensagens' => $mensagens
        ]);
    }

    public function favoritas()
    {
        $mensagens = (new Mensagem())->all();
        return $this->view('/admin/mensagens/favorites', [
            'mensagens' => $mensagens
        ]);
    }

    public function arquivadas()
    {
        $mensagens = (new Mensagem())->all();
        return $this->view('/admin/mensagens/fileds', [
            'mensagens' => $mensagens
        ]);
    }

    public function lixeira()
    {
        $mensagens = (new Mensagem())->all();
        return $this->view('/admin/mensagens/lixeira', [
            'mensagens' => $mensagens
        ]);
    }

    
}
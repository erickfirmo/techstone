<?php

namespace App\Controllers\Site;

use App\Controllers\Controller;
use App\Mensagem;

class SiteController extends Controller 
{

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

    public function enviar_mensagem()
    {
        $this->request()->validate([
            'nome' => 'required',
            'email' => 'required',
            'telefone' => 'required',
            'opcao_contato' => 'required',
        ]);

        $mensagem = new Mensagem;
        $mensagem->nome = $this->request()->input('nome');
        $mensagem->email = $this->request()->input('email');
        $mensagem->assunto = $this->request()->input('assunto');
        $mensagem->empresa = $this->request()->input('empresa');
        $mensagem->whatsapp = $this->request()->input('whatsapp');
        $mensagem->telefone = $this->request()->input('telefone');
        $mensagem->favorita = 'n';
        $mensagem->opcao_contato = $this->request()->input('opcao_contato');  
        $mensagem->conteudo = $this->request()->input('conteudo');        
        $mensagem->save();
        $this->alert('success', 'Mensagem enviada com sucesso !');

        return $this->route()->redirect('/contato');
    }

}
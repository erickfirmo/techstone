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
        $mensagens = (new Mensagem())->all();
        $mensagens_na_lixeira = (new Mensagem())->all_deleted(1);

        return $this->view('/admin/mensagens/all', [
            'mensagens' => $mensagens,
            'mensagens_na_lixeira' => $mensagens_na_lixeira,
        ]);
    }

    public function single($id)
    {
        $mensagens = (new Mensagem())->all();
        $mensagem = (new Mensagem())->find($id);
        return $this->view('/admin/mensagens/single', [
            'mensagem' => $mensagem,
            'mensagens' => $mensagens,
            'mensagens_na_lixeira' => $mensagens_na_lixeira,
        ]);
    }

    public function favoritas()
    {
        $mensagens = (new Mensagem())->all();
        $mensagens_na_lixeira = (new Mensagem())->all_deleted(1);
        return $this->view('/admin/mensagens/favorites', [
            'mensagens' => $mensagens,
            'mensagens_na_lixeira' => $mensagens_na_lixeira,
        ]);
    }

    public function arquivadas()
    {
        $mensagens = (new Mensagem())->all();
        $mensagens_na_lixeira = (new Mensagem())->all_deleted(1);
        return $this->view('/admin/mensagens/fileds', [
            'mensagens' => $mensagens,
            'mensagens_na_lixeira' => $mensagens_na_lixeira,
        ]);
    }

    public function lixeira()
    {
        $mensagens = (new Mensagem())->all();
        $mensagens_na_lixeira = (new Mensagem())->all_deleted(1);

        return $this->view('/admin/mensagens/lixeira', [
            'mensagens' => $mensagens,
            'mensagens_na_lixeira' => $mensagens_na_lixeira,
        ]);
    }

    public function add_lixeira($id)
    {
        (new Mensagem())->find($id)->softDelete();    
        $this->alert('success', 'Mensagem adicionada a lixeira com successo !');
        return $this->route()->redirect('/admin/mensagens/show');

      
    }

    public function restaurar($id)
    {
        (new Mensagem())->find($id)->restore();  
        $this->alert('success', 'Mensagem restaurada a Caixa de Entrada com successo !');
        return $this->route()->redirect('/admin/mensagens/show');

    }

    public function destroy($id)
    {
        (new Mensagem())->delete($id);
        $this->alert('success', 'Mensagem removida permanentemente !');
        return $this->route()->redirect('/admin/mensagens'); 
    }
}
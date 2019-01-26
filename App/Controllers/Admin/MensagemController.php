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
        $mensagens_favoritas = (new Mensagem())->where('favorita="s"');
        return $this->view('/admin/mensagens/all', [
            'mensagens' => $mensagens,
            'mensagens_na_lixeira' => $mensagens_na_lixeira,
            'mensagens_favoritas' => $mensagens_favoritas,
        ]);
    }

    public function single($id)
    {
        $mensagem = (new Mensagem())->find($id);
        $mensagens = (new Mensagem())->all();
        $mensagens_na_lixeira = (new Mensagem())->all_deleted(1);
        $mensagens_favoritas = (new Mensagem())->where('favorita="s"');
        return $this->view('/admin/mensagens/single', [
            'mensagem' => $mensagem,
            'mensagens' => $mensagens,
            'mensagens_na_lixeira' => $mensagens_na_lixeira,
            'mensagens_favoritas' => $mensagens_favoritas,
        ]);
    }

    public function favoritas()
    {
        $mensagens = (new Mensagem())->all();
        $mensagens_na_lixeira = (new Mensagem())->all_deleted(1);
        $mensagens_favoritas = (new Mensagem())->where('favorita="s"');
        return $this->view('/admin/mensagens/favorites', [
            'mensagens' => $mensagens,
            'mensagens_na_lixeira' => $mensagens_na_lixeira,
            'mensagens_favoritas' => $mensagens_favoritas,
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

    public function toggle_favorita()
    {
        $id = $_POST['mensagem_id'];

        $mensagem = (new Mensagem())->find($id);
        var_dump($mensagem);
        if($mensagem->favorita == 'n')
        {
            $mensagem->update([
                'favorita' => 's'
            ]);
        } elseif($mensagem->favorita == 's') {
            $mensagem->update([
                'favorita' => 'n'
            ]);
        }
        return $this->route()->back();
    }

    public function add_lixeira_multi()
    {
        $mensagens_id = explode('|', $_POST['mensagens_id']);
        foreach($mensagens_id as $id)
        {
            (new Mensagem())->find($id)->softDelete();
        }
    }

    public function add_lixeira_single($id)
    {
        (new Mensagem())->find($id)->softDelete();
        $this->alert('success', 'Mensagem adicionada a lixeira !');
        return $this->route()->redirect('/admin/mensagens'); 
    }

    public function restaurar($id)
    {
        (new Mensagem())->find($id)->restore();  
        $this->alert('success', 'Mensagem restaurada a Caixa de Entrada com successo !');
        return $this->route()->redirect('/admin/mensagens/show');
    }

    public function destroy_multi()
    {
        $mensagens_id = explode('|', $_POST['mensagens_id']);
        foreach($mensagens_id as $id)
        {
            (new Mensagem())->delete($id);
        }
    }

    public function destroy_single($id)
    {
        (new Mensagem())->delete($id);
        return $this->route()->redirect('/admin/mensagens/');
    }
}
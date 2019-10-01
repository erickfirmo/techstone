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
        $mensagens = (new Mensagem())->all(['id', 'DESC']);

        return $this->view('/admin/mensagens/index', [
            'mensagens' => $mensagens
        ]);
    }


    public function all()
    {
        /*$mensagens = (new Mensagem())->all_deleted(0, ['id', 'DESC']);
        $mensagens_na_lixeira = (new Mensagem())->all_deleted(1, ['id', 'DESC']);
        $mensagens_favoritas = (new Mensagem())->where('favorita="s" AND is_deleted=0');
        return $this->view('/admin/mensagens/all', [
            'mensagens' => $mensagens,
            'mensagens_na_lixeira' => $mensagens_na_lixeira,
            'mensagens_favoritas' => $mensagens_favoritas,
        ]);*/
        $mensagens = (new Mensagem())->all(['id', 'DESC']);
        echo json_encode($mensagens);

    }

    public function single($id)
    {
        $mensagem = (new Mensagem())->find($id);
        $mensagens = (new Mensagem())->all();
        $mensagens_na_lixeira = (new Mensagem())->all_deleted(1, ['id', 'DESC']);
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
        $mensagens = (new Mensagem())->all(['id', 'DESC']);
        $mensagens_na_lixeira = (new Mensagem())->all_deleted(1, ['id', 'DESC']);
        $mensagens_favoritas = (new Mensagem())->where('favorita="s" AND is_deleted=0 ORDER BY id DESC');
        return $this->view('/admin/mensagens/favorites', [
            'mensagens' => $mensagens,
            'mensagens_na_lixeira' => $mensagens_na_lixeira,
            'mensagens_favoritas' => $mensagens_favoritas,
        ]);
    }

    public function lixeira()
    {
        $mensagens = (new Mensagem())->all(['id', 'DESC']);
        $mensagens_na_lixeira = (new Mensagem())->all_deleted(1, ['id', 'DESC']);
        return $this->view('/admin/mensagens/lixeira', [
            'mensagens' => $mensagens,
            'mensagens_na_lixeira' => $mensagens_na_lixeira,
        ]);
    }

    public function toggle_favorita()
    {
        $id = $_POST['mensagem_id'];
        $mensagem = (new Mensagem())->find($id);

        if($mensagem != null)
        {
            if($mensagem->favorita == 'n')
            {
                $mensagem->update([
                    'favorita' => 's'
                ]);
                
                echo json_encode($id);

            } elseif($mensagem->favorita == 's') {
                
                $mensagem->update([
                    'favorita' => 'n'
                ]);

                echo json_encode($id);
            }
        }
    }

    public function toggle_favorita_single($id)
    {
        $mensagem = (new Mensagem())->find($id);
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
            if($id)
                $mensagem = (new Mensagem())->find($id);

                if($mensagem->favorita == 's')
                $mensagem->update([
                    'favorita' => 'n'
                ]);
                
                $mensagem->softDelete();

        }
        
        echo json_encode($mensagens_id);
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
        $this->alert('success', 'Mensagem restaurada a caixa de entrada com successo !');
        return $this->route()->redirect('/admin/admin/mensagens/show');
    }

    public function restaurar_multi()
    {
        $mensagens_id = explode('|', $_POST['mensagens_id']);
        foreach($mensagens_id as $id)
        {
            (new Mensagem())->find($id)->restore();
        }
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
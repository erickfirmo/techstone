<?php 

namespace App;

use Core\Model;

class Mensagem extends Model
{
    public $table = 'mensagens';
    
    public $id;
    public $nome;
    public $email;
    public $assunto;
    public $empresa;
    public $whatsapp;
    public $telefone;
    public $favorita;
    public $opcao_contato;
    public $conteudo;
    public $is_deleted;

    public $fields = [
        'nome',
        'email',
        'assunto',
        'empresa',
        'whatsapp',
        'telefone',
        'favorita',
        'opcao_contato',
        'conteudo'
    ];

}




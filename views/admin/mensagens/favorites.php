<?php 
section('title', 'TechStone | Mensagens');
section('page-title', 'Mensagens');
section('description', 'Marcadas como Favorito');
if(!defined('LAYOUT')) return 'admin';
?>

<div class="container-fluid">
    <?php alert(); ?>   
</div>

<div class="row">
    <div class="col-md-3">
    <?php partial('admin/mensagens/_pastas-sidebar', [
            'mensagens' => $mensagens,
            'mensagens_favoritas'  => $mensagens,
            'mensagens_arquivadas'  => $mensagens,
            'mensagens_na_lixeira'  => $mensagens_na_lixeira,
        ]); ?>
    </div>
    <div class="col-md-9">
        <?php partial('admin/mensagens/_tabela', [
            'title' => 'Favoritas',
            'mensagens' => $mensagens,
        ]); ?>
    </div>
</div>

<?php page_asset('/admin/js/mensagens/_mailbox'); ?>


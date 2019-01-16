<?php 
section('title', 'TechStone | Mensagens');
section('page-title', 'Mensagens');
section('description', 'Arquivadas');
if(!defined('LAYOUT')) return 'admin';
?>

<div class="container-fluid">
    <?php alert(); ?>   
</div>

<div class="row">
    <div class="col-md-3">
        <?php partial('admin/mensagens/_pastas-sidebar', [
            'count_entrada' => count($mensagens),
            'count_favoritos'  => count($mensagens),
            'count_arquivadas'  => count($mensagens),
            'count_lixeira'  => count($mensagens),
        ]); ?>
    </div>
    <div class="col-md-9">
        <?php partial('admin/mensagens/_tabela', [
            'title' => 'Arquivadas',
            'mensagens' => $mensagens,
        ]); ?>
    </div>
</div>

<?php page_asset('/admin/js/mensagens/_mailbox'); ?>
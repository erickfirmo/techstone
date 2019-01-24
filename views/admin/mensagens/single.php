<?php 
section('title', 'TechStone | Mensagem');
section('page-title', 'Mensagem');
section('description', 'Ler mensagem');
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
            'destroy_action' => 'add-lixeira'

        ]); ?>
    </div>
    <!-- /.col -->
    <div class="col-md-9">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Ler</h3>
                <div class="box-tools pull-right">
                <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Anterior"><i class="fa fa-chevron-left"></i></a>
                <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Próximo"><i class="fa fa-chevron-right"></i></a>
                </div>
            </div>
            <div class="box-body no-padding">
                <div class="mailbox-read-info">
                    <h3>Assunto da mensagem</h3>
                    <h5>De: <?php echo $mensagem->email; ?>
                        <span class="mailbox-read-time pull-right"><?php 
                            $date = date_create($mensagem->created_at);
                            echo date_format($date,"d/m/Y H:i:s"); ?>
                        </span>
                    </h5>
                </div>
                <div class="mailbox-controls with-border text-center">
                    <button type="button" class="btn btn-default btn-sm" id="btn-submit-favorita" data-toggle="tooltip" title="Adicionar aos Favoritos">
                        <i class="fa <?php echo $mensagem->favorita == 's' ? 'fa-star' : 'fa-star-o'; ?> text-yellow"></i>
                    </button> 
                    <div class="btn-group">
                        <button type="button" class="btn btn-default btn-sm" id="btn-submit-lixeira" data-toggle="tooltip" data-container="body" title="Excluir">
                            <i class="fa fa-trash-o"></i>
                        </button>
                    </div>
                </div>
                <div class="mailbox-read-message">

                    <p><?php echo $mensagem->conteudo; ?></p>

                    <p><?php echo $mensagem->nome; ?></p>
                </div>
            </div>
            <div class="box-footer d-inline">
                <div class="pull-right">
                    
                </div>
                <form action="<?php url('/admin/mensagens/add-favorita'); ?>" method="POST" class="d-inline" id="form-favorita">
                    <input type="hidden" name="_token" value="<?php token(); ?>">
                    <input type="hidden" name="mensagem_id" value="<?php echo $mensagem->id; ?>">
                    <button type="submit" class="btn btn-default"><i class="fa fa-star-o"></i> Adicionar aos Favoritos</button>
                </form>
                <form action="<?php url('/admin/mensagens/destroy-single'); ?>" method="POST" class="d-inline" id="form-lixeira">
                    <input type="hidden" name="_token" value="<?php token(); ?>">
                    <input type="hidden" name="mensagem_id" value="<?php echo $mensagem->id; ?>">
                    <button type="submit" class="btn btn-default"><i class="fa fa-trash-o"></i> Excluir</button>
                </form>
                <!--<button type="button" class="btn btn-default"><i class="fa fa-print"></i> Print</button>-->
            </div>
        </div>
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->

<?php page_asset('/admin/js/mensagens/_single'); ?>
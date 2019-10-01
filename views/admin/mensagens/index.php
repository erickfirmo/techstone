<?php 
section('title', 'TechStone | Mensagens');
section('page-title', 'Mensagens');
section('description', ' ');
if(!defined('LAYOUT')) return 'admin';
?>

<script>

    /* define o parametro hash na url */
    if(location.hash == '' || location.hash == 'inbox') {
        location.hash = 'inbox';
    }

</script>

<div class="container-fluid">
    <?php alert(); ?>   
</div>



<div class="row">
    <div class="col-md-3">
    <?php /*partial('admin/mensagens/_pastas-sidebar', [
            'mensagens' => $mensagens,
            'mensagens_favoritas'  => $mensagens,
            'mensagens_arquivadas'  => $mensagens,
            'mensagens_na_lixeira'  => $mensagens_na_lixeira,
        ]);*/ ?>

        <div class="box box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">Pastas</h3>
                <div class="box-tools">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse">
                        <i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="box-body no-padding">
                <ul class="nav nav-pills nav-stacked">
                    <li onclick="filtroMensagens('inbox');">
                        <a>
                            <i class="fa fa-inbox"></i> Caixa de Entrada
                            <span class="label label-primary pull-right"><?php //echo count($mensagens); ?></span>
                        </a>
                    </li>
                    <li onclick="filtroMensagens('favoritas');">
                        <a>
                            <i class="fa fa-star text-yellow"></i> Favoritas 
                        </a>
                    </li>
                    <li onclick="filtroMensagens('lixeira');">
                        <a>
                            <i class="fa fa-trash-o"></i> Lixeira 
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        </div>
        <div class="col-md-9">
        <?php /*partial('admin/mensagens/_tabela', [
            'title' => 'Lixeira',
            'mensagens' => $mensagens_na_lixeira,
            'destroy_action' => 'destroy-mensagem',
            'restore_class' => 'restore_class'
        ]);*/ ?>
        <div class="box box-primary">
            <div class="box-header with-border">
            <h3 class="box-title"><?php //echo $title; ?></h3>

            <div class="box-tools pull-right">
                <div class="has-feedback">
                <input id="dinamic-filter" type="text" class="form-control input-sm" placeholder="Buscar">
                <span class="glyphicon glyphicon-search form-control-feedback"></span>
                </div>
            </div>
            <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
            <div class="mailbox-controls">
                <!-- Check all button -->
                <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i>
                </button>
                <div class="btn-group">
                    <button type="button" class="btn btn-default btn-sm add-lixeira<?php //echo $destroy_action; ?>"><i class="fa fa-trash-o"></i></button>
                </div>
                <div class="btn-group">
                    <button type="button" class="btn btn-default btn-sm restore_class<?php //echo isset($restore_class) ? $restore_class : ''; ?>"><i class="fa fa-undo"></i></button>
                </div>
                <!-- /.btn-group -->
                <button type="button" class="btn btn-default btn-sm" onclick="window.location.reload();"><i class="fa fa-refresh"></i></button>
                    <div class="pull-right">
                <!-- 1-50/200 -->
                <div class="btn-group">
                    <?php //pagination_links('_basic'); ?>
                </div>
                <!-- /.btn-group -->
                </div>
                <!-- /.pull-right -->
            </div>
            <div class="table-responsive mailbox-messages">
                <table id="tabela-mensagens" class="table table-hover table-striped">
                <tbody>
                <?php
                    /*if(isset($mensagens))
                    {
                        foreach ($mensagens as $mensagem)
                        {
                            partial('/admin/mensagens/_mensagem-table', ['mensagem' => $mensagem]);
                        }
                    }*/


                   

                    if(isset($mensagens)){
                        foreach ($mensagens as $mensagem) { ?>
                            <tr class="<?php

                                echo 'msg-'.$mensagem->id;

                                echo $mensagem->is_deleted == 0 ? ' inbox' : ' is_trashed';

                                echo $mensagem->favorita == 's' ? ' is_favorite' : '';
                            
                            ?> msg-row">
                                <td>
                                    <input type="checkbox" name="mensagens[]" value="<?php echo $mensagem->id; ?>" class="check-mensagem">
                                </td>
                                <td class="mailbox-star">
                                    <a href="#" class="add-favorita">
                                        <i class="fa favorite-star <?php echo $mensagem->favorita == 's' ? 'fa-star' : 'fa-star-o'; ?> text-yellow"></i>
                                        <input type="hidden" name="mensagem_id" value="<?php echo $mensagem->id; ?>">
                                        <input type="hidden" name="_token" value="<?php token(); ?>">
                                    </a>
                                </td>
                                <td class="mailbox-name"><a href="<?php url('/admin/mensagens/'.$mensagem->id); ?>"><?php echo $mensagem->nome; ?></a></td>
                                <td class="mailbox-subject"><b><?php echo ($mensagem->assunto ? $mensagem->assunto : '(sem assunto)'); ?></b><?php echo ' - '.$mensagem->conteudo; ?></td>
                                <td class="mailbox-attachment"><?php echo $mensagem->empresa; ?></td>
                                <td class="mailbox-date"><?php 

                                $date = date_create($mensagem->created_at);
                                
                                echo date_format($date,"d/m/Y H:i:s"); ?></td>
                            </tr>
                        <?php
                        }
                    }
                ?>


                </tbody>
                </table>
                <!-- /.table -->
            </div>
            <!-- /.mail-box-messages -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer no-padding">
        <div class="mailbox-controls">
            <!-- Check all button -->
            <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i>
            </button>
            <div class="btn-group">
            <button type="button" class="btn btn-default btn-sm add-lixeira"><i class="fa fa-trash-o"></i></button>
            </div>
            <div class="btn-group">
            <button type="button" class="btn btn-default btn-sm restore_class<?php //echo isset($restore_class) ? $restore_class : ''; ?>"><i class="fa fa-undo"></i></button>
            </div>
            <!-- /.btn-group -->
            <button type="button" class="btn btn-default btn-sm" onclick="window.location.reload();"><i class="fa fa-refresh"></i></button>
            <div class="pull-right">
            <!--1-50/200-->
            <div class="btn-group">
                <?php //pagination_links('_basic'); ?>
            </div>
            <!-- /.btn-group -->
            </div>
            <!-- /.pull-right -->
        </div>
        </div>
        </div>
        <!-- /. box -->

    </div>
</div>

<?php page_asset('/admin/js/mensagens/index'); ?>
<?php page_asset('/admin/js/mensagens/_add-favorita'); ?>
<?php page_asset('/admin/js/mensagens/_add-lixeira'); ?>
<?php page_asset('/admin/js/mensagens/_mailbox'); ?>
<?php page_asset('/admin/js/mensagens/_dinamic-filter'); ?>
<?php page_asset('/admin/js/mensagens/_destroy-multi'); ?>
<?php page_asset('/admin/js/mensagens/_restore-multi'); ?>




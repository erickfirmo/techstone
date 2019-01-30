<div class="box box-primary">
    <div class="box-header with-border">
    <h3 class="box-title"><?php echo $title; ?></h3>

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
            <button type="button" class="btn btn-default btn-sm <?php echo $destroy_action; ?>"><i class="fa fa-trash-o"></i></button>
            </div>
            <div class="btn-group">
            <button type="button" class="btn btn-default btn-sm <?php echo isset($restore_class) ? $restore_class : ''; ?>"><i class="fa fa-undo"></i></button>
            </div>
            <!-- /.btn-group -->
            <button type="button" class="btn btn-default btn-sm" onclick="window.location.reload();"><i class="fa fa-refresh"></i></button>
            <div class="pull-right">
            1-50/200
            <div class="btn-group">
                <?php pagination_links('_basic'); ?>
            </div>
            <!-- /.btn-group -->
            </div>
            <!-- /.pull-right -->
        </div>
        <div class="table-responsive mailbox-messages">
            <table id="tabela-mensagens" class="table table-hover table-striped">
            <tbody>
            <?php
                if(isset($mensagens))
                {
                    foreach ($mensagens as $mensagem)
                    {
                        partial('/admin/mensagens/_mensagem-table', ['mensagem' => $mensagem]);
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
            <button type="button" class="btn btn-default btn-sm <?php echo isset($restore_class) ? $restore_class : ''; ?>"><i class="fa fa-undo"></i></button>
            </div>
            <!-- /.btn-group -->
            <button type="button" class="btn btn-default btn-sm" onclick="window.location.reload();"><i class="fa fa-refresh"></i></button>
            <div class="pull-right">
            1-50/200
            <div class="btn-group">
                <?php pagination_links('_basic'); ?>
            </div>
            <!-- /.btn-group -->
            </div>
            <!-- /.pull-right -->
        </div>
    </div>
</div>
<!-- /. box -->

<?php page_asset('/admin/js/mensagens/_add-favorita'); ?>
<?php page_asset('/admin/js/mensagens/_mailbox'); ?>
<?php page_asset('/admin/js/mensagens/_dinamic-filter'); ?>
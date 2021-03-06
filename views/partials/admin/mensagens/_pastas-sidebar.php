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
            <li class="<?php classActiveUrl('/admin/mensagens'); ?>">
                <a href="<?php url('/admin/mensagens'); ?>">
                    <i class="fa fa-inbox"></i> Caixa de Entrada
                    <span class="label label-primary pull-right"><?php echo count($mensagens); ?></span>
                </a>
            </li>
            <li class="<?php classActiveUrl('/admin/mensagens/favoritas'); ?>">
                <a href="<?php url('/admin/mensagens/favoritas'); ?>">
                    <i class="fa fa-star text-yellow"></i> Favoritas 
                </a>
            </li>
            <li class="<?php classActiveUrl('/admin/mensagens/lixeira'); ?>">
                <a href="<?php url('/admin/mensagens/lixeira'); ?>">
                    <i class="fa fa-trash-o"></i> Lixeira 
                </a>
            </li>
        </ul>
    </div>
</div>
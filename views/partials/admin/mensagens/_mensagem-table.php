<tr>
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
<tr>
    <td><input type="checkbox" name="mensagem[]"></td>
    <td class="mailbox-star"><a href="#"><i class="fa fa-star-o text-yellow"></i></a></td>
    <td class="mailbox-name"><a href="#"><?php echo $mensagem->nome; ?></a></td>
    <td class="mailbox-subject"><b><?php echo ($mensagem->assunto ? $mensagem->assunto : '(sem assunto)'); ?></b><?php echo ' - '.$mensagem->conteudo; ?></td>
    <td class="mailbox-attachment"><?php echo $mensagem->empresa; ?></td>
    <td class="mailbox-date"><?php echo $mensagem->created_at; ?></td>
</tr>
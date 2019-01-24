var mensagens_id = '';
var _token = null;
var check_mensagens = $('input.check-mensagem').parent().find('input');

$('.add-lixeira').on('click', function() {
    _token = $(this).find('input[name="_token"]').val();

    for(let i = 0; i < check_mensagens.length; i++) {
        
        if(check_mensagens[i].checked)
            mensagens_id = mensagens_id+check_mensagens[i].value+(i < check_mensagens.length ? '|' : '');
    }
    if(mensagens_id) {
        $.ajax({
            url: "http://techstone.loc/admin/mensagens/add-lixeira-multi/",
            type: 'POST',
            data: {_token:_token,mensagens_id:mensagens_id},
            success: function(data) {
                if($.isEmptyObject(data.error)) {
                    alert('A mensagem foi removida !');
                } else {
                    alert('Ops, algo deu errado !');
                }
            }
        });
    } else {
        alert('Selecione uma mensagem !');
    }
});

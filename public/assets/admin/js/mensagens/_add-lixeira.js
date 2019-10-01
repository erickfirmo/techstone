var check_mensagens = $('input.check-mensagem').parent().find('input');
$('.add-lixeira').on('click', function() {
    _token = $(this).find('input[name="_token"]').val();
    mensagens_id = '';
    for(let i = 0; i < check_mensagens.length; i++) {
        if(check_mensagens[i].checked)
            mensagens_id = mensagens_id+check_mensagens[i].value+(i < check_mensagens.length ? '|' : '');
    }
    var text_alert;
    text_alert = check_mensagens.length > 1 ? 'Suas mensagens serão adicionadas à lixeira !' : 'Sua mensagem será adicionada à lixeira !';
    if(mensagens_id) {
        swal({
            title: "Tem certeza ?",
            text: text_alert,
            icon: "warning",
            dangerMode: true,
            buttons: {
                cancel: "Cancelar",
                confirm: "Sim, adicionar a lixeira"
            },
          })
          .then((isConfirmed) => {
            if (isConfirmed) {
                $.ajax({
                    url: "http://techstone.loc/admin/mensagens/add-lixeira-multi/",
                    type: 'POST',
                    data: {_token:_token,mensagens_id:mensagens_id},
                    success: function(data) {
                        if($.isEmptyObject(data.error)) {
                          msg_trashed = JSON.parse(data);
                          for (let i = 0; i < msg_trashed.length; i++) {
                            $('.msg-'+msg_trashed[i]).css('display', 'none');
                            $('.msg-'+msg_trashed[i]).removeClass('is_favorite');
                            $('.msg-'+msg_trashed[i]).removeClass('inbox');
                            $('.msg-'+msg_trashed[i]).addClass('is_trashed');
                          }
                          swal("A mensagem foi adicionada a lixeira !", {
                            timer: 4000,
                            icon: "success",
                          });
                        } else {
                          swal("Ops, algo deu errado !", {
                            icon: "warning",
                            timer: 1200,
                            buttons: false,
                          }); 
                        }
                    }
                });
            } else {
              swal("Nada foi alterado !", {
                timer: 1200,
                buttons: false,
              });
            }
          });
    } else {
        swal("Selecione uma mensagem !", {
            timer: 1200,
            buttons: false,
          });
    }
});
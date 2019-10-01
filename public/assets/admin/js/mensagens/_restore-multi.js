
var check_mensagens = $('input.check-mensagem').parent().find('input');

$('.restore_class').on('click', function() {
    _token = $(this).find('input[name="_token"]').val();
    for(let i = 0; i < check_mensagens.length; i++) {
        if(check_mensagens[i].checked)
            mensagens_id = mensagens_id+check_mensagens[i].value+(i < check_mensagens.length ? '|' : '');
    }
    if(mensagens_id) {
        swal({
            title: "Tem certeza ?",
            text: "Sua mensagem será devolvida à caixa de mensagens !",
            icon: "warning",
            dangerMode: true,
            buttons: {
                cancel: "Cancelar",
                confirm: "Sim, restaurar mensagem"
            },
          })
          .then((isConfirmed) => {
            if (isConfirmed) {
                $.ajax({
                    url: "http://techstone.loc/admin/mensagens/restaurar_multi/",
                    type: 'POST',
                    data: {_token:_token,mensagens_id:mensagens_id},
                    success: function(data) {
                        if($.isEmptyObject(data.error)) {
                            swal("A mensagem foi devolvida à caixa de mensagens !", {
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


                        setInterval(function(){window.location.reload()}, 3000);

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

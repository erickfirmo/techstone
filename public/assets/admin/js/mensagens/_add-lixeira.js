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
        swal({
            title: "Tem certeza ?",
            text: "Sua mensagem será adicionada à lixeira !",
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

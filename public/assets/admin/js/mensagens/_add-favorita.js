var mensagem_id = null;
var _token = null;
var favorite_icon = null;

//$('.mailbox-star').click( function(event){event.stopPropagation()});

$('.add-favorita').on('click', function() {
    mensagem_id = $(this).find('input[name="mensagem_id"]').val();
    _token = $(this).find('input[name="_token"]').val();
    favorite_icon = $(this).find('i');
    if(mensagem_id) {
        $.ajax({
            url: "http://techstone.loc/admin/mensagens/add-favorita/",
            type: 'POST',
            data: {_token:_token,mensagem_id:mensagem_id},
            success: function(data) {
                if($.isEmptyObject(data.error)) {
                    if(favorite_icon.hasClass('fa-star') && !favorite_icon.hasClass('fa-star-o')) {
                        favorite_icon.removeClass('fa-star-o');
                        favorite_icon.addClass('fa-star');
                        //alert('A mensagem foi adicionada aos favoritos.');
                        swal('A mensagem foi adicionada aos favoritos !', " ", "success", {
							buttons: false,
							type: "success",
     						timer: 1200
						});
                    } else if(favorite_icon.hasClass('fa-star-o') && !favorite_icon.hasClass('fa-star')) {
                        favorite_icon.removeClass('fa-star');
                        favorite_icon.addClass('fa-star-o');
                        //alert('A mensagem foi removida dos favoritos !');
                        swal('A mensagem foi removida dos favoritos !', " ", "success", {
							buttons: false,
							type: "success",
     						timer: 1200
						});
                    }
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
        swal("Selecione uma mensagem !", {
            timer: 1200,
            buttons: false,
          });
    }
});

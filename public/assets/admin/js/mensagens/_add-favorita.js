var favorite_icon = null;
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
                    msg_favorita = JSON.parse(data);
                    msg_favorita = $('.msg-'+msg_favorita);
                    if(msg_favorita.hasClass('is_favorite') && location.hash == '#favoritas') {
                        msg_favorita.css('display', 'none');
                    } else {
                        msg_favorita.removeClass('is_trashed');
                        msg_favorita.css('display', 'show');
                    }
                    if(favorite_icon.hasClass('fa-star') && !favorite_icon.hasClass('fa-star-o')) {
                        favorite_icon.removeClass('fa-star-o');
                        favorite_icon.addClass('fa-star');
                        msg_favorita.addClass('is_favorite');
                        swal('A mensagem foi adicionada aos favoritos !', " ", "success", {
							buttons: false,
     						timer: 1200
                        });
                    } else if(favorite_icon.hasClass('fa-star-o') && !favorite_icon.hasClass('fa-star')) {
                        favorite_icon.removeClass('fa-star');
                        favorite_icon.addClass('fa-star-o');
                        msg_favorita.removeClass('is_favorite');
                        swal('A mensagem foi removida dos favoritos !', " ", "success", {
							buttons: false,
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
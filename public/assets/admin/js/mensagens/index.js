var mensagens_id = '';
var _token = null;
var current_msg = document.getElementsByClassName('msg-row');





function message_box(box_name){
  if(location.hash == '' || location.hash == 'inbox') {
      location.hash = 'inbox';
  } else {
      location.hash = box_name;
  }
}

function filtroMensagens(hash) {
  location.hash = hash;
  for(let i = 0; current_msg.length > i; i++) {
    current_msg[i].style.display = '';
    if(current_msg[i].classList.contains("inbox") && location.hash == '#inbox') {
      current_msg[i].style.display = '';
    } else if(current_msg[i].classList.contains("is_favorite") && location.hash == '#favoritas') {
      current_msg[i].style.display = '';
    } else if(current_msg[i].classList.contains("is_trashed") && location.hash == '#lixeira') {
      current_msg[i].style.display = '';
    } else {
      current_msg[i].style.display = 'none';
    }
  }
  if(location.hash == '#lixeira') {
    $('.msg-row').find('td a i.favorite-star').css('display', 'none');
  } else {
    $('.msg-row').find('td a i.favorite-star').css('display', '');
  }
}

filtroMensagens('inbox');
let header__menu = document.getElementById('header__menu');
let header__button = document.querySelector('.header__button');

setInterval(function fun(){
  let cost = document.querySelector('.info__cost-service span');
  if (cost.style.opacity != 0.5) {
    cost.style.opacity = 0.5;
  }
  else {
    cost.style.opacity = 1;
  }

},1000);



function open_menu() {
  console.log(1);
  let menu_list = document.querySelector('.header__menu-list');

  if (menu_list.style.display != 'flex') {
    menu_list.style.display = 'flex';
  }
  else {
    menu_list.style.display = 'none';
  }

}

function open_form_call() {

  let menu_list = document.querySelector('.header__button-form');

  if (menu_list.style.display != 'flex') {
    menu_list.style.display = 'flex';
  }
  else {
    menu_list.style.display = 'none';
  }

}

// function open_main() {
//
//   let main_child = document.querySelectorAll('.main-child');
//   for (var i = 0; i < main_child.length; i++) {
//     main_child[i].style.display = 'none';
//   }
//   document.querySelector('.advertising').style.display = 'flex';
//   document.querySelector('.container').style.display = 'flex';
//
// }



header__menu.addEventListener('click', open_menu);
header__button.addEventListener('click', open_form_call);

$(document).ready(function() {
    $('#goPage1').click( function(){//клик по кнопке
         $('#myoverlay').fadeIn(400, //показываем перекрывающий слой
             function(){
                 $('#modal_window1')
                     .css('display', 'flex') //делаем окно видимым
                     .animate({opacity: 1, top: '90%'}, 300); //увеличиваем прозрачность, окно плавно съезжает
         });
     });
     /* убираем окно */
     $('#window_close1, #myoverlay').click( function(){ //нажатие по перекрывающему слою или кресту
         $('#modal_window1')
             .animate({opacity: 0, top: '45%'}, 200,  //вкл прозрачность, окно идёт вверх
                 function(){
                     $(this).css('display', 'none'); //делаем окно невидимым
                     $('#myoverlay').fadeOut(400); //убираем слой перекрытие
                 }
             );
     });
});


$(document).ready(function() {
    $('#goPage2').click( function(){//клик по кнопке
         $('#myoverlay').fadeIn(400, //показываем перекрывающий слой
             function(){
                 $('#modal_window2')
                     .css('display', 'flex') //делаем окно видимым
                     .animate({opacity: 1, top: '90%'}, 300); //увеличиваем прозрачность, окно плавно съезжает
         });
     });
     /* убираем окно */
     $('#window_close2, #myoverlay').click( function(){ //нажатие по перекрывающему слою или кресту
         $('#modal_window2')
             .animate({opacity: 0, top: '45%'}, 200,  //вкл прозрачность, окно идёт вверх
                 function(){
                     $(this).css('display', 'none'); //делаем окно невидимым
                     $('#myoverlay').fadeOut(400); //убираем слой перекрытие
                 }
             );
     });
});


$(document).ready(function() {
    $('#goPage3').click( function(){//клик по кнопке
         $('#myoverlay').fadeIn(400, //показываем перекрывающий слой
             function(){
                 $('#modal_window3')
                     .css('display', 'flex') //делаем окно видимым
                     .animate({opacity: 1, top: '90%'}, 300); //увеличиваем прозрачность, окно плавно съезжает
         });
     });
     /* убираем окно */
     $('#window_close3, #myoverlay').click( function(){ //нажатие по перекрывающему слою или кресту
         $('#modal_window3')
             .animate({opacity: 0, top: '45%'}, 200,  //вкл прозрачность, окно идёт вверх
                 function(){
                     $(this).css('display', 'none'); //делаем окно невидимым
                     $('#myoverlay').fadeOut(400); //убираем слой перекрытие
                 }
             );
     });
});



$(document).ready(function() {
    $('#goPage4').click( function(){//клик по кнопке
         $('#myoverlay').fadeIn(400, //показываем перекрывающий слой
             function(){
                 $('#modal_window4')
                     .css('display', 'flex') //делаем окно видимым
                     .animate({opacity: 1, top: '90%'}, 300); //увеличиваем прозрачность, окно плавно съезжает
         });
     });
     /* убираем окно */
     $('#window_close4, #myoverlay').click( function(){ //нажатие по перекрывающему слою или кресту
         $('#modal_window4')
             .animate({opacity: 0, top: '45%'}, 200,  //вкл прозрачность, окно идёт вверх
                 function(){
                     $(this).css('display', 'none'); //делаем окно невидимым
                     $('#myoverlay').fadeOut(400); //убираем слой перекрытие
                 }
             );
     });
});


$(document).ready(function() {
    $('#goPage5').click( function(){//клик по кнопке
         $('#myoverlay').fadeIn(400, //показываем перекрывающий слой
             function(){
                 $('#modal_window5')
                     .css('display', 'flex') //делаем окно видимым
                     .animate({opacity: 1, top: '90%'}, 300); //увеличиваем прозрачность, окно плавно съезжает
         });
     });
     /* убираем окно */
     $('#window_close5, #myoverlay').click( function(){ //нажатие по перекрывающему слою или кресту
         $('#modal_window5')
             .animate({opacity: 0, top: '45%'}, 200,  //вкл прозрачность, окно идёт вверх
                 function(){
                     $(this).css('display', 'none'); //делаем окно невидимым
                     $('#myoverlay').fadeOut(400); //убираем слой перекрытие
                 }
             );
     });
});



$(document).ready(function() {
    $('#goPage6').click( function(){//клик по кнопке
         $('#myoverlay').fadeIn(400, //показываем перекрывающий слой
             function(){
                 $('#modal_window6')
                     .css('display', 'flex') //делаем окно видимым
                     .animate({opacity: 1, top: '90%'}, 300); //увеличиваем прозрачность, окно плавно съезжает
         });
     });
     /* убираем окно */
     $('#window_close6, #myoverlay').click( function(){ //нажатие по перекрывающему слою или кресту
         $('#modal_window6')
             .animate({opacity: 0, top: '45%'}, 200,  //вкл прозрачность, окно идёт вверх
                 function(){
                     $(this).css('display', 'none'); //делаем окно невидимым
                     $('#myoverlay').fadeOut(400); //убираем слой перекрытие
                 }
             );
     });
});
$(document).ready(function() {
    $('#goPage7').click( function(){//клик по кнопке
         $('#myoverlay').fadeIn(400, //показываем перекрывающий слой
             function(){
                 $('#modal_window7')
                     .css('display', 'flex') //делаем окно видимым
                     .animate({opacity: 1, top: '90%'}, 300); //увеличиваем прозрачность, окно плавно съезжает
         });
     });
     /* убираем окно */
     $('#window_close7, #myoverlay').click( function(){ //нажатие по перекрывающему слою или кресту
         $('#modal_window7')
             .animate({opacity: 0, top: '45%'}, 200,  //вкл прозрачность, окно идёт вверх
                 function(){
                     $(this).css('display', 'none'); //делаем окно невидимым
                     $('#myoverlay').fadeOut(400); //убираем слой перекрытие
                 }
             );
     });
});
$(document).ready(function() {
    $('#goPage8').click( function(){//клик по кнопке
         $('#myoverlay').fadeIn(400, //показываем перекрывающий слой
             function(){
                 $('#modal_window8')
                     .css('display', 'flex') //делаем окно видимым
                     .animate({opacity: 1, top: '90%'}, 300); //увеличиваем прозрачность, окно плавно съезжает
         });
     });
     /* убираем окно */
     $('#window_close8, #myoverlay').click( function(){ //нажатие по перекрывающему слою или кресту
         $('#modal_window8')
             .animate({opacity: 0, top: '45%'}, 200,  //вкл прозрачность, окно идёт вверх
                 function(){
                     $(this).css('display', 'none'); //делаем окно невидимым
                     $('#myoverlay').fadeOut(400); //убираем слой перекрытие
                 }
             );
     });
});

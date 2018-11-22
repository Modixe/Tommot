$(document).ready(function() {
    $('#goPage9').click( function(){//клик по кнопке
         $('#myoverlay').fadeIn(400, //показываем перекрывающий слой
             function(){
                 $('#modal_window9')
                     .css('display', 'flex') //делаем окно видимым
                     .animate({opacity: 1, top: '90%'}, 300); //увеличиваем прозрачность, окно плавно съезжает
         });
     });
     /* убираем окно */
     $('#window_close9, #myoverlay').click( function(){ //нажатие по перекрывающему слою или кресту
         $('#modal_window9')
             .animate({opacity: 0, top: '45%'}, 200,  //вкл прозрачность, окно идёт вверх
                 function(){
                     $(this).css('display', 'none'); //делаем окно невидимым
                     $('#myoverlay').fadeOut(400); //убираем слой перекрытие
                 }
             );
     });
});

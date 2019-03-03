$(function() {
  var Accordion = function(el, multiple) {
    this.el = el || {};
    this.multiple = multiple || false;
    var dropdownlink = this.el.find('.dropdownlink');
    dropdownlink.on('click',
                    { el: this.el, multiple: this.multiple },
                    this.dropdown);
  };
  Accordion.prototype.dropdown = function(e) {
    var $el = e.data.el,
        $this = $(this),
        $next = $this.next();
    $next.slideToggle();
    $this.parent().toggleClass('open');
    if(!e.data.multiple) {
      $el.find('.submenuItems').not($next).slideUp().parent().removeClass('open');
    }
  }
  var accordion = new Accordion($('.accordion-menu'), false);
})

/* Открытие меню */
var main = function() { //главная функция
    $('.navbar-toggle').click(function() { //по клику на объект с выбранным класом будет происходить действие:
        $('#block-category').animate({ //выбираем класс menu и метод animate
            right: '0px' //меню станет видимым
        }, 200); //скорость движения меню в мс

        $('body').animate({ 
            right: '285px' //всё содержимое вправо 
        }, 200); //скорость движения меню в мс
        
        $('.nav-overlay').addClass('visible'); //затемнение экрана
        $("body").css("overflow-y","hidden"); //отключение основного скролла
        $('#block-category').css("overflow-y","scroll"); //скролл для меню
    });
/* Закрытие меню */
    $('.nav-overlay').click(function() { //по клику на затемнение будет происходить действие
        $('.nav-overlay').removeClass('visible'); //убираем затемнение

        $('#block-category').animate({ 
            right: '-285px' //скрытие меню
        }, 200); //скорость движения меню в мс
        
        $('body').animate({ 
            right: '0px' //содержимое страницы снова вернется в положение 0px
        }, 200); //скорость движения меню в мс

        $("body").css("overflow-y","scroll"); //возвращаем основной скролл
    });
};

/*Перемещение верхнего меню в боковое для мобильного, скроллы*/
$(window).resize(function() {
            if (window.matchMedia('(max-width: 768px)').matches) { 
                $(".nav.navbar-nav").prependTo("#block-category");      
            } else 
                $(".nav.navbar-nav").prependTo("#navbar");
            if (window.matchMedia('(min-width: 768px)').matches) {
               $('.nav-overlay').removeClass('visible');
            }
            
            $('#block-category').css("overflow-y","hidden"); //отключение скролла меню
            $("body").css("overflow-y","scroll"); //возвращаем основной скролл
});


$(document).ready(main);/*как только страница полностью загрузится, будет вызвана функция main, 
                        отвечающая за работу меню*/

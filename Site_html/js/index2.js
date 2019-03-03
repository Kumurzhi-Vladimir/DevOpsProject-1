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


var main = function() {
/* Открытие меню */
    $('.navbar-toggle').click(function() {
        $('#block-category').animate({right: '0px'}, 200);
        $('body').animate({right: '285px'}, 200);
        $('.nav-overlay').addClass('visible');
        $("body").css("overflow-y","hidden");
        $('#block-category').css("overflow-y","scroll");
    });   
/* Закрытие меню */
    $('.nav-overlay').click(function() {
        $('#block-category').animate({right: '-285px'}, 200);
        $('body').animate({right: '0px'}, 200);
        $('.nav-overlay').removeClass('visible');
        $("body").css("overflow-y","scroll");
    });
    if (window.matchMedia('(max-width: 768px)').matches) { 
        $(".nav.navbar-nav").prependTo("#block-category");      
    } else 
        $(".nav.navbar-nav").prependTo("#navbar");
};

$(window).resize(function() {
    if (window.width() <= 768) { 
        $(".nav.navbar-nav").prependTo("#block-category");      
    } else {
        $(".nav.navbar-nav").prependTo("#navbar");
    }
    if ($(window).width() >= 768) {
        $('.nav-overlay').removeClass('visible');
    } else if (("#block-category").is(".nav.navbar-nav")) {
        $('.nav-overlay').addClass('visible');
    } else {
        $('.nav-overlay').removeClass('visible');
    }
            
    $('#block-category').css("overflow-y","hidden");
    $("body").css("overflow-y","scroll");
});



$(document).ready(main);
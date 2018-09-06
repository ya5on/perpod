//слайдер основная страница////////////////////
$(document).ready(function() {
    $(".main-slider").owlCarousel({
        autoplay: true,
        items: 1,
        loop: true,
        touchDrag: true,
        nav: true,
        navText: ['', ''],
        dots: true,
        autoplayTimeout: 10000
    });
});
//слайдер HELP block основная страница////////////////////////
$(document).ready(function() {
    $(".help-content").owlCarousel({
        autoplay: true,
        items: 1,
        loop: false,
        touchDrag: true,
        nav: true,
        navText: ['', ''],
        dots: false,
        autoplayTimeout: 15000,
        autoplaySpeed: 2000
    });
});
//слайдер about страница///////////////////////////
$(document).ready(function() {
    $('.about-main-slider').slick({
        adaptiveHeight: true,
        autoplay: true,
        dots: true,
        arrows: true,
        touchMove: true,
        zIndex: 5
    });
});

//слайдер about страница////////////////////////////////
$(document).ready(function() {
    $(".about-page-slider").owlCarousel({
        autoplay: true,
        items: 1,
        loop: true,
        touchDrag: true,
        nav: true,
        navText: ['', ''],
        dots: true,
        mouseDrag: false,
        autoplayTimeout: 10000
    });
});

// кнопка скрол вниз основная страница/////////////////////////////////////
$(document).ready(function() {
    $(".slide-section").click(function(e) {

        var linkHref = $(this).attr('href');
        $('html, body').animate({
            scrollTop: $(linkHref).offset().top
        }, 700);

        e.preventDefault();
    });
});

// SUB-MENU////////////////////////////////////////////////////////
$('.nav-toggle').on('click', function() {
    $('.menu').toggleClass('active');
});

// ОТРПАВКА ФОРМЫ МЕЙН СТРАНИЦА///////////////////////////////////////////////////////////
$(function() {
    document.getElementById('feedback-form').addEventListener('submit', function(evt) {
        var http = new XMLHttpRequest(),
            f = this;
        var th = $(this);
        evt.preventDefault();
        http.open("POST", "mail/mail.php", true);
        http.onreadystatechange = function() {
            if (http.readyState == 4 && http.status == 200) {
                alert(http.responseText);
                if (http.responseText.indexOf(f.nameFF.value) == 0) { // очистить поля формы, если в ответе первым словом будет имя отправителя (nameFF)
                    th.trigger("reset");
                }
            }
        }
        http.onerror = function() {
            alert('Вибачте, дані не були передані');
        }
        http.send(new FormData(f));
    }, false);

});

// ФОРМА ОБРАТНОЙ СВЯЗИ СУБ МЕНЮ/////////////////////////////////

$(document).ready(function() {

    $("#submenuform").submit(function() {
        $.ajax({
            type: "POST",
            url: "mail/submenu.php",
            data: $(this).serialize()
        }).done(function() {
            $(this).find("input").val("");
            alert("Дякуемо за заявку!");
            $("#submenuform").trigger("reset");
        });
        return false;
    });

});
//toggle nav menu //////////////////////////////
$(function() {
  function init() {
    $('[data-behaviour="toggle-menu-icon"]').on('click', toggleMenuIcon);
    $('[data-behaviour="toggle-link-icon"]').on('click', toggleSubMenu);
  };
  
  function toggleMenuIcon() {
    $(this).toggleClass('menu-icon--open');
    $('[data-element="toggle-nav"]').toggleClass('nav--active');
  };
  
  function toggleSubMenu() {
    $(this).toggleClass('nav__link--plus nav__link--minus');
    $('[data-behaviour="toggle-sub-menu"]').slideToggle('nav__sub-list--active');
  };
  
  init()
});



// кнопка выбрать файл/////////////////////////////////////////////////
$(document).ready(function() {
    $(".file-upload input[type=file]").change(function() {
        var filename = $(this).val().replace(/.*\\/, "");
        $("#filename").val(filename);
    });
});



// ////////////////////////////////////////////loader
 window.onload = function() {
      $('.preloader').delay(500).fadeOut('slow');
    };


// ///////////////////// POPUP HEADER
$('.show_popup').click(function() {
    var popup_id = $('#' + $(this).attr("rel"));
    $(popup_id).fadeIn();
    $('.overlay_popup').fadeIn();
})
$('.overlay_popup').click(function() {
    $('.overlay_popup, .popup').fadeOut();
});

////////////////////////////    POUP HELP BLOCK   ////////////////////////////////
( function( window ) {

'use strict';

function classReg( className ) {
  return new RegExp("(^|\\s+)" + className + "(\\s+|$)");
}

// classList support for class management
var hasClass, addClass, removeClass;

if ( 'classList' in document.documentElement ) {
  hasClass = function( elem, c ) {
    return elem.classList.contains( c );
  };
  addClass = function( elem, c ) {
    elem.classList.add( c );
  };
  removeClass = function( elem, c ) {
    elem.classList.remove( c );
  };
}
else {
  hasClass = function( elem, c ) {
    return classReg( c ).test( elem.className );
  };
  addClass = function( elem, c ) {
    if ( !hasClass( elem, c ) ) {
      elem.className = elem.className + ' ' + c;
    }
  };
  removeClass = function( elem, c ) {
    elem.className = elem.className.replace( classReg( c ), ' ' );
  };
}

function toggleClass( elem, c ) {
  var fn = hasClass( elem, c ) ? removeClass : addClass;
  fn( elem, c );
}

var classie = {
  // full names
  hasClass: hasClass,
  addClass: addClass,
  removeClass: removeClass,
  toggleClass: toggleClass,
  // short names
  has: hasClass,
  add: addClass,
  remove: removeClass,
  toggle: toggleClass
};

// transport
if ( typeof define === 'function' && define.amd ) {
  // AMD
  define( classie );
} else {
  // browser global
  window.classie = classie;
}

})( window );
////////////// POPUP ///////////////

var ModalEffects = (function() {

    function init() {

        var overlay = document.querySelector( '.md-overlay' );

        [].slice.call( document.querySelectorAll( '.md-trigger' ) ).forEach( function( el, i ) {

            var modal = document.querySelector( '#' + el.getAttribute( 'data-modal' ) ),
                close = modal.querySelector( '.md-close' );

            function removeModal( hasPerspective ) {
                classie.remove( modal, 'md-show' );

                if( hasPerspective ) {
                    classie.remove( document.documentElement, 'md-perspective' );
                }
            }

            function removeModalHandler() {
                removeModal( classie.has( el, 'md-setperspective' ) ); 
            }

            el.addEventListener( 'click', function( ev ) {
                classie.add( modal, 'md-show' );
                overlay.removeEventListener( 'click', removeModalHandler );
                overlay.addEventListener( 'click', removeModalHandler );

                if( classie.has( el, 'md-setperspective' ) ) {
                    setTimeout( function() {
                        classie.add( document.documentElement, 'md-perspective' );
                    }, 25 );
                }
            });
            if(close){
            close.addEventListener( 'click', function( ev ) {
                ev.stopPropagation();
                removeModalHandler();
            });
                    }
        } );

    }

    init();

})();


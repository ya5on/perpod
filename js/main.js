//слайдер основная страница
$(document).ready(function() {
    $(".main-slider").owlCarousel({
        autoplay: true,
        items: 1,
        loop: true,
        touchDrag: true,
        nav: true,
        navText: ['', ''],
        dots: true
    });
});
//слайдер about страница
$(document).ready(function() {
    $(".about-page-slider").owlCarousel({
        autoplay: true,
        items: 1,
        loop: true,
        touchDrag: true,
        nav: true,
        navText: ['', ''],
        dots: true,
        mouseDrag: false
    });
});


// кнопка скрол вниз основная страница
$(document).ready(function() {
    $(".slide-section").click(function(e) {

        var linkHref = $(this).attr('href');
        $('html, body').animate({
            scrollTop: $(linkHref).offset().top
        }, 700);

        e.preventDefault();
    });
});

// кнопка наверх
// $(function() {
//     $(window).scroll(function() {
//         if ($(this).scrollTop() != 0) {
//             $('#toTop').fadeIn();
//         } else {
//             $('#toTop').fadeOut();
//         }
//     });
//     $('#toTop').click(function() {
//         $('body,html').animate({ scrollTop: 0 }, 800);
//     });
// });

// SUB-MENU
$('.nav-toggle').on('click', function(){
$('.menu').toggleClass('active');
});
 
// ОТРПАВКА ФОРМЫ МЕЙН СТРАНИЦА
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
            alert('Извините, данные не были переданы');
        }
        http.send(new FormData(f));
    }, false);

});

// ФОРМА ОБРАТНОЙ СВЯЗИ СУБ МЕНЮ


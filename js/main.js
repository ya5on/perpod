//слайдер основная страница
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
//слайдер HELP block основная страница
$(document).ready(function() {
    $(".help-content").owlCarousel({
        autoplay: true,
        items: 1,
        loop: true,
        touchDrag: true,
        nav: true,
        navText: ['', ''],
        dots: false,
        autoplayTimeout: 15000
    });
});
//слайдер about страница
$(document).ready(function() {
    $('.about-main-slider').slick({
        adaptiveHeight: true,
        autoplay: false,
        dots: true,
        arrows: true
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
        mouseDrag: false,
        autoplayTimeout: 10000
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

// SUB-MENU
$('.nav-toggle').on('click', function() {
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
            alert('Вибачте, дані не були передані');
        }
        http.send(new FormData(f));
    }, false);

});

// ФОРМА ОБРАТНОЙ СВЯЗИ СУБ МЕНЮ

$(document).ready(function() {

    $("#submenuform").submit(function() {
        $.ajax({
            type: "POST",
            url: "mail/submenu.php",
            data: $(this).serialize()
        }).done(function() {
            $(this).find("input").val("");
            alert("Дякуемо за заявку! Скоро ми з вами звяжемося");
            $("#submenuform").trigger("reset");
        });
        return false;
    });

});


$(document).ready(function() {
    $(".file-upload input[type=file]").change(function() {
        var filename = $(this).val().replace(/.*\\/, "");
        $("#filename").val(filename);
    });
});
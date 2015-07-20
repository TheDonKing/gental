$(document).ready(function() {
    $(".countdown").countEverest({
        day: 1,
        month: 8,
        year: 2014,
        daysLabel: "Дней",
        dayLabel: "Дней",
        hoursLabel: "Часов",
        hourLabel: "Часов",
        minutesLabel: "Минут",
        minuteLabel: "Минут",
        secondsLabel: "Секунд",
        secondLabel: "Секунд",
    });

    $(".countdown-2").countEverest({
        day: 1,
        month: 8,
        year: 2014,
        daysLabel: "Дней",
        dayLabel: "Дней",
        hoursLabel: "Часов",
        hourLabel: "Часов",
        minutesLabel: "Минут",
        minuteLabel: "Минут",
        secondsLabel: "Секунд",
        secondLabel: "Секунд",
    });

    slidering({
        sliderBlock:    ".slidering",
        sliderIn:       ".inslide > div",
        nextArr:        ".next-arr",  
        prewArr:        ".prev-arr", 
        slideAmount:    $(".slidering .inslide > div > div.item").size(),
        slideWidth:     240,
        duration:       600,
        show:           4,
        auto:           false
    });

    $('.facts-count').countTo();

    $('.free-services-popup-link').magnificPopup({
        closeBtnInside:true,
        removalDelay: 300,
        mainClass: 'mfp-fade',
    });

    $(".slider3d .c-wrapper").carouFredSel({
        height: 510,
        items: {
            visible: 3,
            minimum: 3
        },
        scroll: 1,
        auto: false,
        prev: {
            button: ".slider3d .prev-arr-2",
            key: "left",
            onBefore: function(){
                $(".slider3d .c-wrapper").trigger("currentVisible", function(items) {
                    items.removeClass("foo");
                    items.eq(1).addClass("foo");
                });
            }
        },
        next: {
            button: ".slider3d .next-arr-2",
            key: "right",
            onBefore: function(){
                $(".slider3d .c-wrapper").trigger("currentVisible", function(items) {
                    items.removeClass("foo");
                    items.eq(2).addClass("foo");
                });
            }
        },
        swipe: true,
    });
});


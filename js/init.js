$(document).ready(function () {
    $('.bx-slider').bxSlider({
        auto:true,
        pause:8000,
        controls:false
    });

    $("#top-menu").sticky({topSpacing:0});

    $('#top-menu').on('sticky-start', function() {
        $('.sticky').show();
    });

    $('#top-menu').on('sticky-end', function() {
        $('.sticky').hide();
    });

    (function() {

        var quotes = $(".quotes");
        var quoteIndex = -1;

        function showNextQuote() {
            ++quoteIndex;
            quotes.eq(quoteIndex % quotes.length)
                .fadeIn(250)
                .delay(7000)
                .fadeOut(250, showNextQuote);
        }
        showNextQuote();
    })();
});


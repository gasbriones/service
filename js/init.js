$(document).ready(function () {
    $('.bx-slider').bxSlider({
        auto:true,
        pause:8000
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


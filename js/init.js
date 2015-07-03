$(document).ready(function () {
    $('.bx-slider').bxSlider({
        auto:true,
        pause:8000,
        controls:false
    });

    $("#top-menu").sticky({topSpacing:0});

    $('#top-menu').on('sticky-start', function() {
        $('.sticky').show();
        $('#header-social').addClass('fixed')
    });

    $('#top-menu').on('sticky-end', function() {
        $('.sticky').hide();
        $('#header-social').removeClass('fixed')
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

    $('form').submit(function(e){
        e.preventDefault();
        var $self = $(this);

        $.ajax({
            url:$self.attr('action'),
            data:$self.serialize(),
            success:function(){
                $self.get(0).reset();
                alert('Su mensaje fue enviado, nos pondremos en contacto con ud a la brevedad');
            }
        })
    });
});


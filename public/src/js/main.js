$(function () {

    $('.progressbar').each(function () {
        var t = $(this),
            dataperc = t.attr('data-perc'),
            containerLength = t.width(),
            barLength = Math.round(parseInt(containerLength * dataperc / 100)),
            barperc = Math.round(dataperc * 5.56);

        t.find('.bar').animate({width: barLength}, dataperc * 25);
        t.find('.label').append('<div class="perc"></div>');

        function perc() {
            var length = t.width(),
                perc = Math.round(parseInt(length) * dataperc / 100),
                labelpos = (parseInt(perc) - 18);
            t.find('.label').animate({left: labelpos}, dataperc * 25);
            t.find('.perc').text(dataperc + '%');
        }

        perc();
    });
});
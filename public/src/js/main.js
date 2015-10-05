$(function () {

    $('.progressbar').each(function () {
        var t = $(this),
            dataperc = t.attr('data-perc'),
            barLength = dataperc + '%';

        t.find('.bar').animate({width: barLength}, dataperc * 25);
        t.find('.label').append('<div class="perc"></div>');

        function perc() {
            var length = t.width(),
                perc = Math.round(parseInt(length) * dataperc / 100),
                labelpos = 'calc(' + dataperc + '% - 20px)';

            t.find('.label').css({left: labelpos});
            t.find('.perc').text(dataperc + '%');
        }

        perc();
    });
});
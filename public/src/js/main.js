$(function () {

    $.wijets.make();

    $('.progressbar').each(function () {
        var t = $(this),
            dataPercent = t.attr('data-perc') || 0,
            barLength = dataPercent + '%';

        t.find('.bar').animate({width: barLength}, dataPercent * 25);
        t.find('.label').append('<div class="perc"></div>');

        function perc() {
            var labelPos = 'calc(' + dataPercent + '% - 20px)';

            t.find('.label').css({left: labelPos});
            t.find('.perc').text(dataPercent + '%');
        }

        perc();
    });
});
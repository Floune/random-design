$('.encore').on('click', function(e) {

    $.get("/phrase", function (response) {
        $('.phrase').html('<h3>' + JSON.parse(response.phrase)[0] + '</h3> <h3>' + JSON.parse(response.phrase)[1] + '</h3> <h3>' + JSON.parse(response.phrase)[2] + '</h3>'
    );
        $('body').css('background-color', response.bodyColor);
        transformBarres(response);
    });

});

$('.contrib').on('click', function(e) {

});

function transformBarres(response) {
    $('.barounette-jolie').each(function(index) {
        $(this).css("background-color", response.barreColor[index]);
        $(this).css({
            '-webkit-transform' : 'rotate(' + Math.floor((Math.random() * 180)) + 'deg)',
            '-moz-transform' : 'rotate(' + Math.floor((Math.random() * 180)) + 'deg)',
            '-ms-transform' : 'rotate(' + Math.floor((Math.random() * 180)) + 'deg)',
            '-o-transform' : 'rotate(' + Math.floor((Math.random() * 180)) + 'deg)',
            'transform' : 'rotate(' + Math.floor((Math.random() * 180)) + 'deg)',
        });
    })
}

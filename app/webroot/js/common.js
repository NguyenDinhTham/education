
var APP = {};

APP.ApiUrl = function(path, param) {
    param = typeof param !== 'undefined' ? param : '';
    if (param != '') {
        path += '?' + $.param(param);
    }
    return APP.API_URL + path;
};

$(function() {

    //Slider
    /*$('.bxslider').bxSlider({
        speed: 800,
        auto: true
    });*/

    $.backTop();

    $(".scroll").click(function(event){
        event.preventDefault();
        $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
    });
});

$.backTop = function () {
    var el = "#back-top";
    $(window).scroll(function () {
        $(this).scrollTop() > 300 ? $(el).fadeIn() : $(el).fadeOut()
    });
    $(el).click(function () {
        return $("body,html").animate({scrollTop: 0}, 800)
    });
};

$.loadingStart = function() {
    var cover = $('<div class="loading-cover"></div>')
        .css('position', 'fixed')
        .css('width', $(window).width())
        .css('height', $(window).height())
        .css('z-index', 25000)
        .css('opacity', '0.4')
        .css('filter', 'alpha(opacity=40);')
        .css('background-color', 'black')
        .css('top', 0)
        .css('background-image', 'url('+APP.ApiUrl("img/ajax-loader-green.gif")+')')
        .css('background-repeat', 'no-repeat')
        .css('background-size', '50px 50px')
        .css('background-position', 'center center')
        .appendTo('body');
};

$.loadingEnd = function() {
    $('div.loading-cover').remove();
};

$.loadAjax = function(url, dataPost) {
    $.loadingStart();
    var dataJson = $.ajax({
        'url': url,
        'type': 'POST',
        'dataType': 'json',
        'data': dataPost,
        'async': false,
        success: function(data) {
            $.loadingEnd();
        },
        error: function(xhr, textStatus, thrownError) {
            $.loadingEnd();
        }
    });
    return dataJson.responseText;
};

$.postFormAjax = function(form) {
    var fields = form.serializeArray();
    var url = form.attr("action");
    var dataPost = {};
    $.each( fields, function( i, field ) {
        dataPost[field.name] = field.value;
    });
    var dataJson = $.loadAjax(url, dataPost);
    return dataJson;
};

function slideTopMessage(message, type, delay){
    if(delay === undefined) {
        delay = 3000;
    }

    $.notify({
        message: message
    },{
        allow_dismiss: true,
        type: type,
        placement: {
            from: "top",
            align: "center"
        },
        animate: {
            enter: 'animated fadeInDown',
            exit: 'animated fadeOutUp'
        },
        delay: delay,
        z_index: 99999,
        timer: 1000
    });
}
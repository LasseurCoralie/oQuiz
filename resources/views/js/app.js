let app = {
    init : () => {
        console.log('coucou');

    var h1Title = $(".shadow-Line");
    $(window).scroll(function() {
    var scroll = $(window).scrollTop();

    if (scroll >= 10) {
        h1Title.removeClass('shadow-Line').addClass("shadow-Line1");
    } else {
        h1Title.removeClass("shadow-Line1").addClass('shadow-Line');
    }
    });
    }
}


$(app.init);
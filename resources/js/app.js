$('.faq-dropdown').click(function(){
    if ($(this).hasClass("open")) {
        $('.faq-dropdown').removeClass("open");
    } else {
        $('.faq-dropdown').removeClass("open");
        $(this).addClass("open");
    }
});

$('#burger').click(function(){
    $('#menu').toggleClass("open");
});
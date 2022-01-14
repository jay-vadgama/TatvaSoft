$(window).scroll(function(){
    $('navbar').toggleClass('scrolled',$(this).scrollTop()>60);
});
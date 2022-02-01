$(function () {
    $(document).scroll(function () {
      var $nav = $(".fixed-top");
      $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
    });
  });
  
  $(window).scroll(function(){
      $('navbar').toggleClass('scrolled',$(this).scrollTop()>60);
  });

 
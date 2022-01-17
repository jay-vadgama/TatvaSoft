$(window).scroll(function(){
    $('navbar').toggleClass('scrolled',$(this).scrollTop()>60);
});

const toTop = document.querySelector(".to-top");

window.addEventListener("scroll", () => {
    if (window.pageYOffset > 100) {
      toTop.classList.add("active");
    } else {
      toTop.classList.remove("active");
    }
  })
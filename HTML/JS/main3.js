function Check1(){
  if(document.getElementById("Check1").checked){
    document.getElementById("CheckImg1").src="Images/1-green.png";
  }
  else{
    document.getElementById("CheckImg1").src="Images/price-1.png";
  }
}
function Check2(){
  if(document.getElementById("Check2").checked){
    document.getElementById("CheckImg2").src="Images/2-green.png";
  }
  else{
    document.getElementById("CheckImg2").src="Images/price-2.png";
  }
}
function Check3(){
  if(document.getElementById("Check3").checked){
    document.getElementById("CheckImg3").src="Images/3-green.png";
  }
  else{
    document.getElementById("CheckImg3").src="Images/price-3.png";
  }
}
function Check4(){
  if(document.getElementById("Check4").checked){
    document.getElementById("CheckImg4").src="Images/4-green.png";
  }
  else{
    document.getElementById("CheckImg4").src="Images/price-4.png";
  }
}
function Check5(){
  if(document.getElementById("Check5").checked){
    document.getElementById("CheckImg5").src="Images/5-green.png";
  }
  else{
    document.getElementById("CheckImg5").src="Images/price-5.png";
  }
}


$(function () {
    $(document).scroll(function () {
      var $nav = $(".fixed-top");
      $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
    });
  });
  
  $(window).scroll(function(){
      $('navbar').toggleClass('scrolled',$(this).scrollTop()>60);
  });

  
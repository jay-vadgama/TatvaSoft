var add = document.getElementById("extra");
var addd = document.getElementById("extra1");

var addS1 = document.getElementById("extraService1");
var addR1 = document.getElementById("extraRight1");
var addS11 = document.getElementById("extraService11");
var addR11 = document.getElementById("extraRight11");

var addS2 = document.getElementById("extraService2");
var addR2 = document.getElementById("extraRight2");
var addS22 = document.getElementById("extraService22");
var addR22 = document.getElementById("extraRight22");

var addS3 = document.getElementById("extraService3");
var addR3 = document.getElementById("extraRight3");
var addS33 = document.getElementById("extraService33");
var addR33 = document.getElementById("extraRight33");

var addS4 = document.getElementById("extraService4");
var addR4 = document.getElementById("extraRight4");
var addS44 = document.getElementById("extraService44");
var addR44 = document.getElementById("extraRight44");

var addS5 = document.getElementById("extraService5");
var addR5 = document.getElementById("extraRight5");
var addS55 = document.getElementById("extraService55");
var addR55 = document.getElementById("extraRight55");

var ts = document.getElementById("totalService");
var tsr = document.getElementById("totalSeriveRight");




function Check1(){
  if(!document.getElementById("Check1").checked){
    document.getElementById("CheckImg1").src="Images/1-green.png";
    add.innerHTML = "Extra"
    addS1.innerHTML = "Inside cabinets";
    addR1.innerHTML = "30 minutes";
    addd.innerHTML = "Extra"
    addS11.innerHTML = "Inside cabinets";
    addR11.innerHTML = "30 minutes";
  }
  else{
    document.getElementById("CheckImg1").src="Images/price-1.png";
    add.innerHTML = "";
    addS1.innerHTML = "";
    addR1.innerHTML = "";
    addd.innerHTML = "";
    addS11.innerHTML = "";
    addR11.innerHTML = "";
  }
}
function Check2(){
  if(!document.getElementById("Check2").checked){
    document.getElementById("CheckImg2").src="Images/2-green.png";
    add.innerHTML = "Extra"
    addS2.innerHTML = "Inside Fridge";
    addR2.innerHTML = "30 minutes";
    addd.innerHTML = "Extra"
    addS22.innerHTML = "Inside Fridge";
    addR22.innerHTML = "30 minutes";
  }
  else{
    document.getElementById("CheckImg2").src="Images/price-2.png";
    addS2.innerHTML = "";
    addR2.innerHTML = "";
    addS22.innerHTML = "";
    addR22.innerHTML = "";
  }
}
function Check3(){
  if(!document.getElementById("Check3").checked){
    document.getElementById("CheckImg3").src="Images/3-green.png";
    add.innerHTML = "Extra"
    addS3.innerHTML = "Inside Oven";
    addR3.innerHTML = "30 minutes";
    add.innerHTML = "Extra"
    addS33.innerHTML = "Inside Oven";
    addR33.innerHTML = "30 minutes";
  }
  else{
    document.getElementById("CheckImg3").src="Images/price-3.png";
    addS3.innerHTML = "";
    addR3.innerHTML = "";
    addS33.innerHTML = "";
    addR33.innerHTML = "";
  }
}
function Check4(){
  if(!document.getElementById("Check4").checked){
    document.getElementById("CheckImg4").src="Images/4-green.png";
    add.innerHTML = "Extra"
    addS4.innerHTML = "Laundry Wash & Dry";
    addR4.innerHTML = "30 minutes";
    addd.innerHTML = "Extra"
    addS44.innerHTML = "Laundry Wash & Dry";
    addR44.innerHTML = "30 minutes";
  }
  else{
    document.getElementById("CheckImg4").src="Images/price-4.png";
    addS4.innerHTML = "";
    addR4.innerHTML = "";
    addS44.innerHTML = "";
    addR44.innerHTML = "";
  }
}
function Check5(){
  if(!document.getElementById("Check5").checked){
    document.getElementById("CheckImg5").src="Images/5-green.png";
    add.innerHTML = "Extra"
    addS5.innerHTML = "Interior Windows";
    addR5.innerHTML = "30 minutes";
    addd.innerHTML = "Extra"
    addS55.innerHTML = "Interior Windows";
    addR55.innerHTML = "30 minutes";
  }
  else{
    document.getElementById("CheckImg5").src="Images/price-5.png";
    addS5.innerHTML = "";
    addR5.innerHTML = "";
    addS55.innerHTML = "";
    addR55.innerHTML = "";
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

  
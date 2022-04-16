// Sidebar functions
function dashboard(){
    var tab1 = document.getElementById("side1");
    var tab2 = document.getElementById("side2");
    var tab3 = document.getElementById("side3");
    var tab4 = document.getElementById("side4");
    var tab5 = document.getElementById("side5");
    var tab6 = document.getElementById("side6");
    
    tab1.classList.add("activeSidebar");
    tab2.classList.remove("activeSidebar");
    tab3.classList.remove("activeSidebar");
    tab4.classList.remove("activeSidebar");
    tab5.classList.remove("activeSidebar");
    tab6.classList.remove("activeSidebar");

    document.getElementById("tab1_Dashboard").style.display = "block";
    document.getElementById("tab2_ServiceHistory").style.display = "none";
    document.getElementById("tab_mySettings").style.display = "none";
    
}
function Service_History(){
    var tab1 = document.getElementById("side1");
    var tab2 = document.getElementById("side2");
    var tab3 = document.getElementById("side3");
    var tab4 = document.getElementById("side4");
    var tab5 = document.getElementById("side5");
    var tab6 = document.getElementById("side6");

    tab1.classList.remove("activeSidebar");
    tab2.classList.add("activeSidebar");
    tab3.classList.remove("activeSidebar");
    tab4.classList.remove("activeSidebar");
    tab5.classList.remove("activeSidebar");
    tab6.classList.remove("activeSidebar");

    document.getElementById("tab1_Dashboard").style.display = "none";
    document.getElementById("tab2_ServiceHistory").style.display = "block";
    document.getElementById("tab_mySettings").style.display = "none";
}
function Service_Schedule(){
    var tab1 = document.getElementById("side1");
    var tab2 = document.getElementById("side2");
    var tab3 = document.getElementById("side3");
    var tab4 = document.getElementById("side4");
    var tab5 = document.getElementById("side5");
    var tab6 = document.getElementById("side6");
    
    tab1.classList.remove("activeSidebar");
    tab2.classList.remove("activeSidebar");
    tab3.classList.add("activeSidebar");
    tab4.classList.remove("activeSidebar");
    tab5.classList.remove("activeSidebar");
    tab6.classList.remove("activeSidebar");
}
function Favourite_Pros(){
    var tab1 = document.getElementById("side1");
    var tab2 = document.getElementById("side2");
    var tab3 = document.getElementById("side3");
    var tab4 = document.getElementById("side4");
    var tab5 = document.getElementById("side5");
    var tab6 = document.getElementById("side6");
    
    tab1.classList.remove("activeSidebar");
    tab2.classList.remove("activeSidebar");
    tab3.classList.remove("activeSidebar");
    tab4.classList.add("activeSidebar");
    tab5.classList.remove("activeSidebar");
    tab6.classList.remove("activeSidebar");
}
function Invoices(){
    var tab1 = document.getElementById("side1");
    var tab2 = document.getElementById("side2");
    var tab3 = document.getElementById("side3");
    var tab4 = document.getElementById("side4");
    var tab5 = document.getElementById("side5");
    var tab6 = document.getElementById("side6");
    
    tab1.classList.remove("activeSidebar");
    tab2.classList.remove("activeSidebar");
    tab3.classList.remove("activeSidebar");
    tab4.classList.remove("activeSidebar");
    tab5.classList.add("activeSidebar");
    tab6.classList.remove("activeSidebar");
}
function Notifications(){
    var tab1 = document.getElementById("side1");
    var tab2 = document.getElementById("side2");
    var tab3 = document.getElementById("side3");
    var tab4 = document.getElementById("side4");
    var tab5 = document.getElementById("side5");
    var tab6 = document.getElementById("side6");
    
    tab1.classList.remove("activeSidebar");
    tab2.classList.remove("activeSidebar");
    tab3.classList.remove("activeSidebar");
    tab4.classList.remove("activeSidebar");
    tab5.classList.remove("activeSidebar");
    tab6.classList.add("activeSidebar");
}



// nav-drop-down functions
function openMyDashboard(){
    var element1 = document.getElementById("side1");
    var element2 = document.getElementById("side2");
    var element3 = document.getElementById("side3");
    var element4 = document.getElementById("side4");
    var element5 = document.getElementById("side5");
    var element6 = document.getElementById("side6");

    element1.classList.add("activeSidebar");
    element2.classList.remove("activeSidebar");
    element3.classList.remove("activeSidebar");
    element4.classList.remove("activeSidebar");
    element5.classList.remove("activeSidebar");
    element6.classList.remove("activeSidebar");

    var tb1 = document.getElementById("tab1_Dashboard");
    var tb2 = document.getElementById("tab2_ServiceHistory");
    var tb3 = document.getElementById("tab_mySettings");

    tb1.style.display = "block";
    tb2.style.display = "none";
    tb3.style.display = "none";
}

function openMySetting(){

    var element1 = document.getElementById("side1");
    var element2 = document.getElementById("side2");
    var element3 = document.getElementById("side3");
    var element4 = document.getElementById("side4");
    var element5 = document.getElementById("side5");
    var element6 = document.getElementById("side6");

    element1.classList.remove("activeSidebar");
    element2.classList.remove("activeSidebar");
    element3.classList.remove("activeSidebar");
    element4.classList.remove("activeSidebar");
    element5.classList.remove("activeSidebar");
    element6.classList.remove("activeSidebar");
    
    var tb1 = document.getElementById("tab1_Dashboard");
    var tb2 = document.getElementById("tab2_ServiceHistory");
    var tb3 = document.getElementById("tab_mySettings");

    tb1.style.display = "none";
    tb2.style.display = "none";
    tb3.style.display = "block";
    
}


// MySetting tab Functions

function tab1_show(){
    var element1 = document.getElementById("tb1");
    var element2 = document.getElementById("tb2");
    var element3 = document.getElementById("tb3");
    
    var show1 = document.getElementById("tab_body1");
    var show2 = document.getElementById("tab_body2");
    var show3 = document.getElementById("tab_body3");

    element1.classList.add("activeTAB");
    element2.classList.remove("activeTAB");
    element3.classList.remove("activeTAB");

    show1.style.display = "block";
    show2.style.display = "none";
    show3.style.display = "none";
}
function tab2_show(){
    var element1 = document.getElementById("tb1");
    var element2 = document.getElementById("tb2");
    var element3 = document.getElementById("tb3");

    var show1 = document.getElementById("tab_body1");
    var show2 = document.getElementById("tab_body2");
    var show3 = document.getElementById("tab_body3");

    element1.classList.remove("activeTAB");
    element2.classList.add("activeTAB");
    element3.classList.remove("activeTAB");

    show1.style.display = "none";
    show2.style.display = "block";
    show3.style.display = "none";
}
function tab3_show(){
    var element1 = document.getElementById("tb1");
    var element2 = document.getElementById("tb2");
    var element3 = document.getElementById("tb3");

    var show1 = document.getElementById("tab_body1");
    var show2 = document.getElementById("tab_body2");
    var show3 = document.getElementById("tab_body3");

    element1.classList.remove("activeTAB");
    element2.classList.remove("activeTAB");
    element3.classList.add("activeTAB");

    show1.style.display = "none";
    show2.style.display = "none";
    show3.style.display = "block";
}

// onTime fun
function star1(){
  let r1 = document.getElementById('radio1');
  if(r1.checked) 
  {
      document.getElementById("radioImg1").src="Images/star1.png";
      document.getElementById("radioImg2").src="Images/star2.png";
      document.getElementById("radioImg3").src="Images/star2.png";
      document.getElementById("radioImg4").src="Images/star2.png";
      document.getElementById("radioImg5").src="Images/star2.png";
      // console.log("OTA : " + r1.value);
  }

}
function star2(){
  let r2 = document.getElementById('radio2');
  if(r2.checked) 
  {
      document.getElementById("radioImg1").src="Images/star1.png";
      document.getElementById("radioImg2").src="Images/star1.png";
      document.getElementById("radioImg3").src="Images/star2.png";
      document.getElementById("radioImg4").src="Images/star2.png";
      document.getElementById("radioImg5").src="Images/star2.png";
      // console.log("OTA : " + r2.value);
  }

}
function star3(){
  var r3 = document.getElementById('radio3');
  if(r3.checked) 
  {
      document.getElementById("radioImg1").src="Images/star1.png";
      document.getElementById("radioImg2").src="Images/star1.png";
      document.getElementById("radioImg3").src="Images/star1.png";
      document.getElementById("radioImg4").src="Images/star2.png";
      document.getElementById("radioImg5").src="Images/star2.png";
      
      // console.log("OTA : " + r3.value);
  }

}
function star4(){
  var r4 = document.getElementById('radio4');
  if(r4.checked) 
  {
      document.getElementById("radioImg1").src="Images/star1.png";
      document.getElementById("radioImg2").src="Images/star1.png";
      document.getElementById("radioImg3").src="Images/star1.png";
      document.getElementById("radioImg4").src="Images/star1.png";
      document.getElementById("radioImg5").src="Images/star2.png";
      // console.log("OTA : " + r4.value);
  }

}
function star5(){
  var r5 = document.getElementById('radio5');
  if(r5.checked) 
  {
      document.getElementById("radioImg1").src="Images/star1.png";
      document.getElementById("radioImg2").src="Images/star1.png";
      document.getElementById("radioImg3").src="Images/star1.png";
      document.getElementById("radioImg4").src="Images/star1.png";
      document.getElementById("radioImg5").src="Images/star1.png";
      // console.log("OTA : " + r5.value);
  }

}


// Friendly fun  
function star6(){
  var r6 = document.getElementById('radio6');
  if(r6.checked) 
  {
      document.getElementById("radioImg6").src="Images/star1.png";
      document.getElementById("radioImg7").src="Images/star2.png";
      document.getElementById("radioImg8").src="Images/star2.png";
      document.getElementById("radioImg9").src="Images/star2.png";
      document.getElementById("radioImg10").src="Images/star2.png";
      // console.log("friendly : " + r6.value);
  }

}

function star7(){
  var r7 = document.getElementById('radio7');
  if(r7.checked) 
  {
      document.getElementById("radioImg6").src="Images/star1.png";
      document.getElementById("radioImg7").src="Images/star1.png";
      document.getElementById("radioImg8").src="Images/star2.png";
      document.getElementById("radioImg9").src="Images/star2.png";
      document.getElementById("radioImg10").src="Images/star2.png";
      // console.log("friendly : " + r7.value);
  }

}
function star8(){
  var r8 = document.getElementById('radio8');
  if(r8.checked) 
  {
      document.getElementById("radioImg6").src="Images/star1.png";
      document.getElementById("radioImg7").src="Images/star1.png";
      document.getElementById("radioImg8").src="Images/star1.png";
      document.getElementById("radioImg9").src="Images/star2.png";
      document.getElementById("radioImg10").src="Images/star2.png";
      // console.log("friendly : " + r8.value);
  }

}
function star9(){
  var r9 = document.getElementById('radio9');
  if(r9.checked) 
  {
      document.getElementById("radioImg6").src="Images/star1.png";
      document.getElementById("radioImg7").src="Images/star1.png";
      document.getElementById("radioImg8").src="Images/star1.png";
      document.getElementById("radioImg9").src="Images/star1.png";
      document.getElementById("radioImg10").src="Images/star2.png";
      // console.log("friendly : " + r9.value);
  }

}
function star10(){
  var r10 = document.getElementById('radio10');
  if(r10.checked) 
  {
      document.getElementById("radioImg6").src="Images/star1.png";
      document.getElementById("radioImg7").src="Images/star1.png";
      document.getElementById("radioImg8").src="Images/star1.png";
      document.getElementById("radioImg9").src="Images/star1.png";
      document.getElementById("radioImg10").src="Images/star1.png";
      // console.log("friendly : " + r10.value);
  }

}

//  Qos

function star11(){
  var r11 = document.getElementById('radio11');
  if(r11.checked) 
  {
      document.getElementById("radioImg11").src="Images/star1.png";
      document.getElementById("radioImg12").src="Images/star2.png";
      document.getElementById("radioImg13").src="Images/star2.png";
      document.getElementById("radioImg14").src="Images/star2.png";
      document.getElementById("radioImg15").src="Images/star2.png";
      // console.log("QoS : " + r11.value);
  }

}
function star12(){
  var r12 = document.getElementById('radio12');
  if(r12.checked) 
  {
      document.getElementById("radioImg11").src="Images/star1.png";
      document.getElementById("radioImg12").src="Images/star1.png";
      document.getElementById("radioImg13").src="Images/star2.png";
      document.getElementById("radioImg14").src="Images/star2.png";
      document.getElementById("radioImg15").src="Images/star2.png";
      // console.log("QoS : " + r12.value);
  }

}
function star13(){
  var r13 = document.getElementById('radio13');
  if(r13.checked) 
  {
      document.getElementById("radioImg11").src="Images/star1.png";
      document.getElementById("radioImg12").src="Images/star1.png";
      document.getElementById("radioImg13").src="Images/star1.png";
      document.getElementById("radioImg14").src="Images/star2.png";
      document.getElementById("radioImg15").src="Images/star2.png";
      // console.log("QoS : " + r13.value);
  }

}
function star14(){
  var r14 = document.getElementById('radio14');
  if(r14.checked) 
  {
      document.getElementById("radioImg11").src="Images/star1.png";
      document.getElementById("radioImg12").src="Images/star1.png";
      document.getElementById("radioImg13").src="Images/star1.png";
      document.getElementById("radioImg14").src="Images/star1.png";
      document.getElementById("radioImg15").src="Images/star2.png";
      // console.log("QoS : " + r14.value);
  }

}
function star15(){
  var r15 = document.getElementById('radio15');
  if(r15.checked) 
  {
      document.getElementById("radioImg11").src="Images/star1.png";
      document.getElementById("radioImg12").src="Images/star1.png";
      document.getElementById("radioImg13").src="Images/star1.png";
      document.getElementById("radioImg14").src="Images/star1.png";
      document.getElementById("radioImg15").src="Images/star1.png";
      // console.log("QoS : " + r15.value);
  }
}
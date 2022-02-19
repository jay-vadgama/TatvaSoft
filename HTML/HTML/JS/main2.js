var rotate = document.getElementsByClassName('r-arrow');
  var open = 0;
  for (let i=0; i<rotate.length; i++)
  {
    rotate[i].addEventListener("click", function(){
      if(open==0){
        rotate[i].style.transform="rotate(90deg)";
        open = 1;
      }else{
        rotate[i].style.transform="rotate(0deg)";
        open = 0;
      }
    });

  }
  function activeCust(){
    document.getElementById("faqCust").style.display="block";
    document.getElementById("faqSpv").style.display="none";
    document.getElementById("customer").style.backgroundColor="#1d7a8c";
    document.getElementById("custtxt").style.color="#fff";
    document.getElementById("serviceP").style.backgroundColor="#f6f6f6";
    document.getElementById("servicetxt").style.color="#646464";
  }
  
  function activeSpv(){
    document.getElementById("faqSpv").style.display="block";
    document.getElementById("faqCust").style.display="none";
    document.getElementById("serviceP").style.backgroundColor="#1d7a8c";
    document.getElementById("servicetxt").style.color="#fff";
    document.getElementById("customer").style.backgroundColor="#f6f6f6";
    document.getElementById("custtxt").style.color="#646464";
  }
  

  
  function addnewAddress(){
    document.getElementById("Addnew").style.display="none";
    document.getElementById("newAdd").style.display="block";
  }
  function btnclose(){
    document.getElementById("Addnew").style.display="block";
    document.getElementById("newAdd").style.display="none";
  }


  // function display2(){
  //   document.getElementById("body1").style.display="none";
  //   document.getElementById("body2").style.display="block";
  //   document.getElementById("body3").style.display="none";
  //   document.getElementById("body4").style.display="none";
  //   document.getElementById("tabbtn2").style.backgroundColor="#1D7A8C";
  //   document.getElementById("tabtxt2").style.color="white";
  //   document.getElementById("tabimg2").src="Images/schedule-white.png";
  //   document.getElementById("tabbtn3").style.backgroundColor="#F3F3F3";
  //   document.getElementById("tabtxt3").style.color="#4F4F4F";
  //   document.getElementById("tabimg3").src="Images/details.png";
  //   document.getElementById("tabbtn4").style.backgroundColor="#F3F3F3";
  //   document.getElementById("tabtxt4").style.color="#4F4F4F";
  //   document.getElementById("tabimg4").src="Images/payment.png";
  // }
  

  function show1(){
    document.getElementById("tabbtn2").style.backgroundColor="#F3F3F3";
    document.getElementById("tabtxt2").style.color="#4F4F4F";
    document.getElementById("tabimg2").src="Images/schedule.png";
    document.getElementById("tabbtn3").style.backgroundColor="#F3F3F3";
    document.getElementById("tabtxt3").style.color="#4F4F4F";
    document.getElementById("tabimg3").src="Images/details.png";
    document.getElementById("tabbtn4").style.backgroundColor="#F3F3F3";
    document.getElementById("tabtxt4").style.color="#4F4F4F";
    document.getElementById("tabimg4").src="Images/payment.png";
    document.getElementById("body1").style.display="block";
    document.getElementById("body2").style.display="none";
    document.getElementById("body3").style.display="none";
    document.getElementById("body4").style.display="none";
  }
  function show2(){
    document.getElementById("tabbtn2").style.backgroundColor="#1D7A8C";
    document.getElementById("tabtxt2").style.color="white";
    document.getElementById("tabimg2").src="Images/schedule-white.png";
    document.getElementById("tabbtn3").style.backgroundColor="#F3F3F3";
    document.getElementById("tabtxt3").style.color="#4F4F4F";
    document.getElementById("tabimg3").src="Images/details.png";
    document.getElementById("tabbtn4").style.backgroundColor="#F3F3F3";
    document.getElementById("tabtxt4").style.color="#4F4F4F";
    document.getElementById("tabimg4").src="Images/payment.png";
    document.getElementById("body1").style.display="none";
    document.getElementById("body2").style.display="block";
    document.getElementById("body3").style.display="none";
    document.getElementById("body4").style.display="none";
    
  }
  function show3(){
    document.getElementById("tabbtn2").style.backgroundColor="#1D7A8C";
    document.getElementById("tabtxt2").style.color="white";
    document.getElementById("tabimg2").src="Images/schedule-white.png";
    document.getElementById("tabbtn3").style.backgroundColor="#1D7A8C";
    document.getElementById("tabtxt3").style.color="white";
    document.getElementById("tabimg3").src="Images/details-white.png";
    document.getElementById("tabbtn4").style.backgroundColor="#F3F3F3";
    document.getElementById("tabtxt4").style.color="#4F4F4F";
    document.getElementById("tabimg4").src="Images/payment.png";
    document.getElementById("body1").style.display="none";
    document.getElementById("body2").style.display="none";
    document.getElementById("body3").style.display="block";
    document.getElementById("body4").style.display="none";
  }
  function show4(){
    document.getElementById("tabbtn2").style.backgroundColor="#1D7A8C";
    document.getElementById("tabtxt2").style.color="white";
    document.getElementById("tabimg2").src="Images/schedule-white.png";
    document.getElementById("tabbtn3").style.backgroundColor="#1D7A8C";
    document.getElementById("tabtxt3").style.color="white";
    document.getElementById("tabimg3").src="Images/details-white.png";
    document.getElementById("tabbtn4").style.backgroundColor="#1D7A8C";
    document.getElementById("tabtxt4").style.color="white";
    document.getElementById("tabimg4").src="Images/payment-white.png";
    document.getElementById("body1").style.display="none";
    document.getElementById("body2").style.display="none";
    document.getElementById("body3").style.display="none";
    document.getElementById("body4").style.display="block";
  }


  
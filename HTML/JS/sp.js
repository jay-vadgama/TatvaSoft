// Sidebar functions
function New_Service_Request(){
    var tab1 = document.getElementById("side1");
    var tab2 = document.getElementById("side2");
    var tab3 = document.getElementById("side3");
    var tab4 = document.getElementById("side4");
    var tab5 = document.getElementById("side5");
    
    tab1.classList.add("activeSidebar");
    tab2.classList.remove("activeSidebar");
    tab3.classList.remove("activeSidebar");
    tab4.classList.remove("activeSidebar");
    tab5.classList.remove("activeSidebar");
    

    document.getElementById("tab1_Dashboard").style.display = "block";
    document.getElementById("tab2_UpcomingServices").style.display = "none";
    document.getElementById("tab3_ServiceHistory").style.display = "none";
    document.getElementById("tab4_MyRatings").style.display = "none";
    document.getElementById("tab3_ServiceHistory").style.display = "none";
    
    document.getElementById("tab_mySettings").style.display = "none";
    
}
function Upcoming_Services(){
    var tab1 = document.getElementById("side1");
    var tab2 = document.getElementById("side2");
    var tab3 = document.getElementById("side3");
    var tab4 = document.getElementById("side4");
    var tab5 = document.getElementById("side5");

    tab1.classList.remove("activeSidebar");
    tab2.classList.add("activeSidebar");
    tab3.classList.remove("activeSidebar");
    tab4.classList.remove("activeSidebar");
    tab5.classList.remove("activeSidebar");
    

    document.getElementById("tab1_Dashboard").style.display = "none";
    document.getElementById("tab2_UpcomingServices").style.display = "block";
    document.getElementById("tab3_ServiceHistory").style.display = "none";
    document.getElementById("tab4_MyRatings").style.display = "none";
    document.getElementById("tab5_BlockCustomer").style.display = "none";
    
    document.getElementById("tab_mySettings").style.display = "none";
}
function Service_History(){
    var tab1 = document.getElementById("side1");
    var tab2 = document.getElementById("side2");
    var tab3 = document.getElementById("side3");
    var tab4 = document.getElementById("side4");
    var tab5 = document.getElementById("side5");
    
    tab1.classList.remove("activeSidebar");
    tab2.classList.remove("activeSidebar");
    tab3.classList.add("activeSidebar");
    tab4.classList.remove("activeSidebar");
    tab5.classList.remove("activeSidebar");
    
    document.getElementById("tab1_Dashboard").style.display = "none";
    document.getElementById("tab2_UpcomingServices").style.display = "none";
    document.getElementById("tab3_ServiceHistory").style.display = "block";
    document.getElementById("tab4_MyRatings").style.display = "none";
    document.getElementById("tab5_BlockCustomer").style.display = "none";

    document.getElementById("tab_mySettings").style.display = "none";

}
function My_Ratings(){
    var tab1 = document.getElementById("side1");
    var tab2 = document.getElementById("side2");
    var tab3 = document.getElementById("side3");
    var tab4 = document.getElementById("side4");
    var tab5 = document.getElementById("side5");
    
    tab1.classList.remove("activeSidebar");
    tab2.classList.remove("activeSidebar");
    tab3.classList.remove("activeSidebar");
    tab4.classList.add("activeSidebar");
    tab5.classList.remove("activeSidebar");

    document.getElementById("tab1_Dashboard").style.display = "none";
    document.getElementById("tab2_UpcomingServices").style.display = "none";
    document.getElementById("tab3_ServiceHistory").style.display = "none";
    document.getElementById("tab4_MyRatings").style.display = "block";
    document.getElementById("tab5_BlockCustomer").style.display = "none";

    document.getElementById("tab_mySettings").style.display = "none";
    
}
function Block_Customer(){
    var tab1 = document.getElementById("side1");
    var tab2 = document.getElementById("side2");
    var tab3 = document.getElementById("side3");
    var tab4 = document.getElementById("side4");
    var tab5 = document.getElementById("side5");
    
    tab1.classList.remove("activeSidebar");
    tab2.classList.remove("activeSidebar");
    tab3.classList.remove("activeSidebar");
    tab4.classList.remove("activeSidebar");
    tab5.classList.add("activeSidebar");

    document.getElementById("tab1_Dashboard").style.display = "none";
    document.getElementById("tab2_UpcomingServices").style.display = "none";
    document.getElementById("tab3_ServiceHistory").style.display = "none";
    document.getElementById("tab4_MyRatings").style.display = "none";
    document.getElementById("tab5_BlockCustomer").style.display = "block";

    document.getElementById("tab_mySettings").style.display = "none";
    
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

    element1.classList.remove("activeSidebar");
    element2.classList.remove("activeSidebar");
    element3.classList.remove("activeSidebar");
    element4.classList.remove("activeSidebar");
    element5.classList.remove("activeSidebar");

    var tb1 = document.getElementById("tab1_Dashboard");
    var tb2 = document.getElementById("tab2_UpcomingServices");
    var tb3 = document.getElementById("tab3_ServiceHistory");
    var tb4 = document.getElementById("tab4_MyRatings");
    var tb5 = document.getElementById("tab5_BlockCustomer");

    
    var tb = document.getElementById("tab_mySettings");

    tb.style.display = "block";
    tb1.style.display = "none";
    tb2.style.display = "none";
    tb3.style.display = "none";
    tb4.style.display = "none";
    tb5.style.display = "none";

    
    
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

function changeToCar(){
    document.getElementById("avtarDisplay").src = "Images/avatar-car.png";
}
function changeToFemale(){
    document.getElementById("avtarDisplay").src = "Images/avatar-female.png";
}
function changeToHat(){
    document.getElementById("avtarDisplay").src = "Images/avatar-hat.png";
}
function changeToIron(){
    document.getElementById("avtarDisplay").src = "Images/avatar-iron.png";
}
function changeToMale(){
    document.getElementById("avtarDisplay").src = "Images/avatar-male.png";
}
function changeToShip(){
    document.getElementById("avtarDisplay").src = "Images/avatar-ship.png";
}

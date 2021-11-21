
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("item1");
  for (i = 0; i < x.length; i++) {
	x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 5000); // Change image every 2 seconds
}
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    document.getElementById("header").style.background = "#0030ff";
	document.getElementById("header").style.background = "linear-gradient(to bottom, #0030ff 0%, #006dff 100%)";
	document.getElementById("header").getElementsByClassName("nav-menu").style.padding="43px 21px";
  }  
  else{
	document.getElementById("header").style= "right: 0, width: 100%,z-index: 999,position: fixed,transition: 0.2s linear, background-color: blue";
	
  }
}
	

// header.fixed {
// 	background: #0030ff;
// 	background: linear-gradient(to bottom, #0030ff 0%, #006dff 100%);
// }

// 	header.fixed .nav-menu li {
// 		padding: 43px 21px;
// 	}

// 	header.fixed .nav-menu .sub-menu li {
// 		padding: 0;
// 	}


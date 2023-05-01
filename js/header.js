
function returnToX() {
var nr1 = document.getElementById("nr1");
  var nr2 = document.getElementById("nr2");
  var nr3 = document.getElementById("nr3");
  var menu = document.getElementById("menu");
  menu.style.transform = "translateX(0%)";
  nr1.style.rotate = "-45deg";
  nr1.style.transform = "translate3D(-9px,9px,0)";
  nr1.style.width = "45px";
  nr2.style.opacity = "0";
  nr3.style.rotate = "45deg";
  nr3.style.transform = "translate3D(-8px,-8px,0)";
  nr3.style.width = "45px";}

  returnToX();

var open = true;
document.getElementById("burgermenu").addEventListener('click', function(e) {
  var nr1 = document.getElementById("nr1");
  var nr2 = document.getElementById("nr2");
  var nr3 = document.getElementById("nr3");
  var menu = document.getElementById("menu");
  if(open === true) {
    menu.style.transform = "translateX(100%)";
    nr1.style.rotate = "0deg";
    nr1.style.transform = "translate3D(0px,0px,0)";
    nr1.style.width = "40px";
    nr2.style.opacity = "1";
    nr3.style.rotate = "0deg";
    nr3.style.transform = "translate3D(0px,0px,0)";
    nr3.style.width = "40px";
  }
  setTimeout(returnToX, 1000);
});


$(function() {
  $('.page-responsive-menu').hover(function() {
    $('#header-scroll').addClass('scrolled');
  });

  $('.page-responsive-menu').mouseleave(function() {
    $('#header-scroll').removeClass('scrolled');
  });
});

$(function() {
  $('.image-bg').mouseenter(function() {
    console.log("left first page");
    $('#header-scroll').addClass('scrolled');
  });

  $('.image-bg').mouseleave(function() {
    console.log("left first page");
    $('#header-scroll').removeClass('scrolled');
  });
});

$(function() {
  $('.header-hoverer').mouseenter(function() {
    console.log("left first page");
    $('#header-scroll').removeClass('scrolled');
  });
});



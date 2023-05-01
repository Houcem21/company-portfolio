gsap.fromTo(
    ".loading-page",
    {opacity:1}, 
    {opacity: 0,
    duration:1.5,
    delay: 8
    }
);


function fullLoadDisappear() { var element = document.getElementById("loading-page");
element.style.display = "none";}
window.setTimeout(fullLoadDisappear, 9100);
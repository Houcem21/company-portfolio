const track = document.getElementById("image-track");
console.log('fire');
window.onmousedown = e => {
    e.clientX;

}

window.onmouseup = () => {
    track.dataset.mouseDownAt = "0";
}

window.onmousemove = e => {
    if(track.dataset.mouseDownAt === "0") return;

    const mouseDelta = parseFloat(track.dataset.mouseDownAt) - e.clientX,
    maxDelta = window.innerWidth / 2;

    const percentage = (mouseDelta/maxDelta) *100;

    track.style.transform = 'translate(${percentage}%, -25%)' ;
}
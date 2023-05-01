let activeIndex = 0;

const groups = document.getElementsByTagName('article');

console.log(groups);

const handleRightClick = () => {
    //increment index

    const nextIndex = activeIndex + 1 <= groups.length - 1 ? activeIndex + 1 : 0;
    

    const currentGroup = document.querySelector('[data-index="'+ activeIndex +'"]'),
            nextGroup = document.querySelector('[data-index="'+ nextIndex +'"]');

    currentGroup.dataset.status = "after";
    nextGroup.dataset.status = "active";

    activeIndex = nextIndex;
}

const handleLeftClick = () => {

    const nextIndex = activeIndex -1 >= 0 ? activeIndex - 1 : groups.length -1;

    const currentGroup = document.querySelector('[data-index="'+ activeIndex +'"]'),
            nextGroup = document.querySelector('[data-index="'+ nextIndex +'"]');

    currentGroup.dataset.status = "before";
    nextGroup.dataset.status = "active";

    activeIndex = nextIndex;

}


// Slider

$(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});
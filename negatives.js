const intro = document.querySelector('.intro');
const video = intro.querySelector('video');
const text = intro.querySelector('h1');

const quoteSection = document.querySelector('.quoteSection');
const end = quoteSection.querySelector('h1');

const body = document.querySelector('body');

//scrollmagic
const controller = new ScrollMagic.Controller();

//scenes
let scene = new ScrollMagic.Scene({
    duration: 1500,
    triggerElement: intro,
    triggerHook: 0
})
//.addIndicators()
.setPin(intro)
.addTo(controller);


const backgroundAnimation = TweenMax.fromTo(body, 1, {backgroundColor: "#000000"}, {backgroundColor: "#180000"});

let scene2 = new ScrollMagic.Scene({
    duration: 1000,
    triggerElement: quoteSection,
    triggerHook: 0
})
//.addIndicators()
.setTween(backgroundAnimation)
.addTo(controller);

//Video animation
let accelAmount = 0.1;
let scrollpos = 0;
let delay = 0;

scene.on('update', e => {
    scrollpos = e.scrollPos / 1000;
});

setInterval(()=> {
    delay += (scrollpos - delay) * accelAmount;

    video.currentTime = delay;
}, 33.3);
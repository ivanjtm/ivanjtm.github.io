const intro = document.querySelector('.intro');
const video = intro.querySelector('video');
const text = intro.querySelector('h1');

const section = document.querySelector('section');
const end = section.querySelector('h1');

const body = document.querySelector('body');

//scrollmagic
const controller = new ScrollMagic.Controller();

//scenes
let scene = new ScrollMagic.Scene({
    duration: 1000,
    triggerElement: intro,
    triggerHook: 0
})
.addIndicators()
.setPin(intro)
.addTo(controller);


const backgroundAnimation = TweenMax.fromTo(body, 5, {backgroundColor: "#000000"}, {backgroundColor: "#170000"});

let scene2 = new ScrollMagic.Scene({
    duration: 1000,
    triggerElement: intro,
    triggerHook: 0
})
.addIndicators()
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
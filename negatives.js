const intro = document.querySelector('.intro');
const video = intro.querySelector('video');
const text = intro.querySelector('h1');

const section = document.querySelector('section');
const end = section.querySelector('h1');

//scrollmagic
const controller = new ScrollMagic.Controller();

//scenes
const scene = new ScrollMagic.Scene({
    duration: 1100,
    triggerElement: intro,
    triggerHook: 0
})
.addIndicators()
.setPin(intro)
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
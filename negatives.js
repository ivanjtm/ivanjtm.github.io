const intro = document.querySelector('.intro');
const video = intro.querySelector('video');
const text = intro.querySelector('h1');
const pIntro = intro.querySelector('p');
const chromeAlert = document.querySelector('.chrome-alert');

const quoteSection = document.querySelector('.quoteSection');
const end = quoteSection.querySelector('h1');

const sectionBeforeFilms = document.querySelector('.quoteBeforeFilms');

const body = document.querySelector('body');

var isChrome = /Chrome/.test(navigator.userAgent) && /Google Inc/.test(navigator.vendor) && !/OPR/.test(navigator.userAgent);

if (isChrome) {video.src = "nsk33.mp4";} else {chromeAlert.style.display = "none";}

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


//Background in photos section
const photosBackgroundAnimation = TweenMax.fromTo(body, 1, {backgroundColor: "#000000"}, {backgroundColor: "#180000"});

let scenePhotos = new ScrollMagic.Scene({
    duration: 1000,
    triggerElement: quoteSection,
    triggerHook: 0
})
//.addIndicators()
.setTween(photosBackgroundAnimation)
.addTo(controller);


//Background in films section
const filmsBackgroundAnimation = TweenMax.fromTo(body, 1, {backgroundColor: "#180000"}, {backgroundColor: "#2b2900"});

let sceneFilms = new ScrollMagic.Scene({
    duration: 1000,
    triggerElement: sectionBeforeFilms,
    triggerHook: 0
})
//.addIndicators()
.setTween(filmsBackgroundAnimation)
.addTo(controller);


//Video animation
let accelAmount = 0.1;
let scrollpos = 0;
let delay = 0;

scene.on('update', e => {
    scrollpos = e.scrollPos / 1500;
});

setInterval(()=> {
    delay += (scrollpos - delay) * accelAmount;

    video.currentTime = delay;
}, 33.3);

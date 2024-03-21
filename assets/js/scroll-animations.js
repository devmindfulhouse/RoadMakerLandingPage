
var controller = new ScrollMagic.Controller();


var animateElements = document.querySelectorAll('.animate-on-scroll');

animateElements.forEach(function(elem) {
    var animateScene = new ScrollMagic.Scene({
        triggerElement: elem,
        triggerHook: 0.8
    })
        .setClassToggle(elem, 'visible')
        .addTo(controller);
});
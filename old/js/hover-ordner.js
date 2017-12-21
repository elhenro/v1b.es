/**
 * Created by Henry on 24/03/2017.
 */

(function() {
    [].slice.call(document.querySelectorAll('.grid--effect-vega > .grid__item')).forEach(function(stackEl) {
        new VegaFx(stackEl);
    });
    [].slice.call(document.querySelectorAll('.grid--effect-castor > .grid__item')).forEach(function(stackEl) {
        new CastorFx(stackEl);
    });
    [].slice.call(document.querySelectorAll('.grid--effect-hamal > .grid__item')).forEach(function(stackEl) {
        new HamalFx(stackEl);
    });
    [].slice.call(document.querySelectorAll('.grid--effect-polaris > .grid__item')).forEach(function(stackEl) {
        new PolarisFx(stackEl);
    });
    [].slice.call(document.querySelectorAll('.grid--effect-alphard > .grid__item')).forEach(function(stackEl) {
        new AlphardFx(stackEl);
    });
    [].slice.call(document.querySelectorAll('.grid--effect-altair > .grid__item')).forEach(function(stackEl) {
        new AltairFx(stackEl);
    });
    [].slice.call(document.querySelectorAll('.grid--effect-rigel > .grid__item')).forEach(function(stackEl) {
        new RigelFx(stackEl);
    });
    [].slice.call(document.querySelectorAll('.grid--effect-canopus > .grid__item')).forEach(function(stackEl) {
        new CanopusFx(stackEl);
    });
    [].slice.call(document.querySelectorAll('.grid--effect-pollux > .grid__item')).forEach(function(stackEl) {
        new PolluxFx(stackEl);
    });
    [].slice.call(document.querySelectorAll('.grid--effect-deneb > .grid__item')).forEach(function(stackEl) {
        new DenebFx(stackEl);
    });
})();
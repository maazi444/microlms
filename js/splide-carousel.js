new Splide(".splide").mount();
document.addEventListener("DOMContentLoaded", function () {
  var splide = new Splide(".splide", {
    type: "loop",
    padding: "10em",
    autoplay: true,
    lazyLoad: 'nearby',
    autoWidth: true,
    // drag   : 'free',
  });
  splide.mount();
});

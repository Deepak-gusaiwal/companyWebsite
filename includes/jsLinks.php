<!-- bootstrap js -->
<script src="./assets/js/bootstrap.bundle.min.js"></script>
<!-- splider js -->
<script src="./assets/splideSlider/splide.js"></script>
<!--Home splide slider config -->
<script>
  var splide = new Splide(".heroSplide", {
    perPage: 1,
    gap: "1rem",
    padding: "0",
    type: "loop",
    drag: "free",
    snap: true,
    autoplay: true,
  });
  splide.mount();
</script>
<!--Ratings Section splide slider config -->
<script>
  var splide2 = new Splide(".ratingsSectionSlider", {
    perPage: 6,
    gap: "1rem",
    padding: "0",
    type: "loop",
    drag: "free",
    snap: true,
    autoplay: true,
    breakpoints: {
      768: { perPage: 3, gap: '1rem' },
      500: {arrows:false, perPage: 2,gap: 0 },
    },
  });
  splide2.mount();
</script>
<!--seoToolsSection Section splide slider config -->
<script>
  var splide3 = new Splide(".seoToolsSection", {
    perPage: 3,
    gap: "1rem",
    padding: "0",
    type: "loop",
    drag: "free",
    snap: true,
    autoplay: true,
    arrows:false,
    breakpoints: {
      768: { perPage: 2, gap: '1rem' },
      500: { perPage: 1 },
    },
  });
  splide3.mount();
</script>
<!--seoResultSection Section splide slider config -->
<script>
  var splide4 = new Splide(".seoResultSection", {
    perPage: 1,
    gap: "0px",
    padding: "0",
    type: "loop",
    drag: "free",
    snap: true,
    autoplay: true,
    arrows:false,
  });
  splide4.mount();
</script>

<!-- navbar js -->
<script src="./assets/js/navbar.js"></script>
<!-- dataTabs js -->
<script src="./assets/js/dataTabs.js"></script>
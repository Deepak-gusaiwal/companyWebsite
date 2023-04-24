<?php if ($isProductPage): ?>
  <!-- bootstrap js -->
  <script src="../assets/js/bootstrap.bundle.min.js"></script>
  <!-- splider js -->
  <script src="../assets/splideSlider/splide.js"></script>

  <!-- navbar js -->
  <script src="../assets/js/navbar.js"></script>
  <!-- script js -->
  <script src="../assets/js/script.js"></script>
<?php else: ?>
  <!-- bootstrap js -->
  <script src="./assets/js/bootstrap.bundle.min.js"></script>
  <!-- splider js -->
  <script src="./assets/splideSlider/splide.js"></script>

  <!-- navbar js -->
  <script src="./assets/js/navbar.js"></script>
  <!-- script js -->
  <script src="./assets/js/script.js"></script>
<?php endif ?>



<!--Home splide slider config -->
<script>
  const heroSplide = document.querySelector('.heroSplide');
  if (heroSplide) {
    const splideHero = new Splide(".heroSplide", {
      perPage: 1,
      gap: "1rem",
      padding: "0",
      type: "loop",
      drag: "free",
      snap: true,
      autoplay: true,
    });

    splideHero.mount();
  }
</script>

<!--Ratings Section splide slider config -->
<script>
  const ratingsSectionSlider = document.querySelector('.ratingsSectionSlider');
  if (ratingsSectionSlider) {
    const splide2 = new Splide(".ratingsSectionSlider", {
      perPage: 6,
      gap: "1rem",
      padding: "0",
      type: "loop",
      drag: "free",
      snap: true,
      autoplay: true,
      breakpoints: {
        768: { perPage: 3, gap: '1rem' },
        500: { arrows: false, perPage: 2, gap: 0 },
      },
    });

    splide2.mount();
  }
</script>

<!--seoToolsSection Section splide slider config -->

<script>
  const seoToolsSection = document.querySelector('.seoToolsSection');
  if (seoToolsSection) {
    const splide3 = new Splide(".seoToolsSection", {
      perPage: 3,
      gap: "1rem",
      padding: "0",
      type: "loop",
      drag: "free",
      snap: true,
      autoplay: true,
      breakpoints: {
        768: { perPage: 2, gap: '1rem' },
        500: { perPage: 2 },
      },
    });

    splide3.mount();
  }
</script>

<!--seoToolsSection2 Section splide slider config -->
<script>
  const seoToolsSection2 = document.querySelector('.seoToolsSection2');
  if (seoToolsSection2) {
    const splide4 = new Splide(".seoToolsSection2", {
      perPage: 1,
      gap: "1rem",
      padding: "0",
      type: "loop",
      drag: "free",
      snap: true,
      autoplay: true,
    });


    splide4.mount();
  }
</script>


<!--seoResultSection Section splide slider config -->
<script>
  const seoResultSection = document.querySelector('.seoResultSection');
  if (seoResultSection) {
    const splide5 = new Splide(".seoResultSection", {
      perPage: 1,
      gap: "1rem",
      padding: "0",
      type: "loop",
      drag: "free",
      snap: true,
      arrows: false,
      autoplay: true,
    });

    splide5.mount();
  }
</script>
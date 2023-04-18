<?php

$seoToolsImages = [
    ["img" => "seotool.webp"],
    ["img" => "seotool.webp"],
    ["img" => "seotool.webp"],
    ["img" => "seotool.webp"],
    ["img" => "seotool.webp"],
];
$seoResultsImages = [
    ["img" => "seo result.webp"],
    ["img" => "seo result.webp"],
]

    ?>

<div class="container">
    <div class="row">

        <div class="col-md-6">
            <div class="seoToolsSectionContainer">
                <h1 class="commonTitle">SEO Services Tools We Use</h1>

                <section class="splide seoToolsSection" aria-label="Splide Slider ">
                    <div class="splide__track px-5">
                        <div class="splide__list">

                            <?php foreach ($seoToolsImages as $data): ?>
                                <!-- slide-1 -->
                                <div class="splide__slide seoToolsSlide">
                                    <img src="./assets/img/seoTools/<?php echo $data['img'] ?>"
                                        alt="sliderimg-<?php echo $data['img'] ?>" />
                                </div>
                                <!-- slide-1 end -->
                            <?php endforeach; ?>

                        </div>
                </section>
            </div>
        </div>

        <div class="col-md-6 seoResultContainer">
            <h1 class="commonTitle">SEO Services Results We Delivered in 2022</h1>

            <section class="splide seoResultSection" aria-label="Splide Slider ">
                <div class="splide__track px-5">
                    <div class="splide__list">

                        <?php foreach ($seoResultsImages as $data): ?>
                            <!-- slide-1 -->
                            <div class="splide__slide seoResultSlide">
                                <img src="./assets/img/seoResult/<?php echo $data['img'] ?>"
                                    alt="sliderimg-<?php echo $data['img'] ?>" />
                            </div>
                            <!-- slide-1 end -->
                        <?php endforeach; ?>

                    </div>
            </section>
        </div>

    


    </div>
</div>



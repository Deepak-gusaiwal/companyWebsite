<?php
$ratingsImageArray = [
    [
        "img" => "jd.png"
    ],
]
    ?>

<div class="servicesRatingsContianer d-flex justify-content-center align-items-center ">
    <div
        class="commonTitleContainer d-flex justify-content-center align-items-center gap-md-2 gap-1 flex-wrap p-2 text-center">
        <h2 class="commonTitle purpleColor">SEO Services Reviews & Ratings </h2>
        <div class="starContainer d-flex justify-content-center align-items-center text-warning fs-3 gap-1">
            <span>
                <i class="fa fa-star" aria-hidden="true"></i>
            </span>
            <span>
                <i class="fa fa-star" aria-hidden="true"></i>
            </span>
            <span>
                <i class="fa fa-star" aria-hidden="true"></i>
            </span>
            <span>
                <i class="fa fa-star" aria-hidden="true"></i>
            </span>
            <span>
                <i class="fa fa-star" aria-hidden="true"></i>
            </span>
        </div>
    </div>
</div>

<!-- ratings slider -->
<section class="splide ratingsSectionSlider" aria-label="Splide Slider ">
    <div class="splide__track px-5">
        <div class="splide__list">

            <?php foreach ($ratingsImageArray as $data): ?>
                <!-- slide-1 -->
                <div class="splide__slide ratingSlide">
                    <img src="./assets/img/ratings/<?php echo $data['img'] ?>" alt="sliderimg-<?php echo $data['img'] ?>" />
                </div>
                <!-- slide-1 end -->
            <?php endforeach; ?>

        </div>
</section>
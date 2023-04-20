<?php

$seoToolsImages = [
    ["img" => "tool-1.webp"],
    ["img" => "tool-2.webp"],
    ["img" => "tool-3.webp"],
    ["img" => "tool-4.webp"],
    ["img" => "tool-5.webp"],
    ["img" => "tool-6.webp"],
    ["img" => "tool-7.webp"],
];
$seoResultsImages = [
    ["img" => "seo result.webp"],
    ["img" => "seo result.webp"],
]

    ?>

<div class="container">
    <div class="row">

        <div class="col-md-6">

            <!-- seo Tools Slide started -->
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
            <!-- seo Tools Slide ended -->

            <!-- seo Tools Slide started -->
            <div class="seoToolsSectionContainer">
                <h1 class="commonTitle">How Can We Help You?</h1>

                <section class="splide seoToolsSection2 mb-2" aria-label="Splide Slider ">
                    <div class="splide__track px-md-5 px-0">
                        <div class="splide__list ">

                            <!-- slide-1 -->
                            <div class="splide__slide seoToolsSlide2 contactFormToogler">
                                <div class="iconBox">
                                    <i class="fa fa-line-chart facebookColor" aria-hidden="true"></i>
                                </div>
                                <div class="slideContentBox facebookBg">
                                    <p>Fully Managed SEO Services</p>
                                    <p>To Increase Your Leads</p>
                                </div>
                            </div>
                            <!-- slide-1 end -->

                            <!-- slide-2 -->
                            <div class="splide__slide seoToolsSlide2 contactFormToogler">
                                <div class="iconBox">
                                <i class="fa fa-shopping-cart whatsappColor" aria-hidden="true"></i>
                                </div>
                                <div class="slideContentBox whatsappLightBg">
                                    <p>E-commerce SEO</p>
                                    <p>To Increase Your Sale</p>
                                </div>
                            </div>
                            <!-- slide-2 end -->

                            <!-- slide-3 -->
                            <div class="splide__slide seoToolsSlide2 contactFormToogler">
                                <div class="iconBox">
                                <i class="fa fa-object-group instaColor" aria-hidden="true"></i>
                                </div>
                                <div class="slideContentBox instaBg">
                                    <p>Enterprise SEO </p>
                                    <p>Increase Traffic & Revenue</p>
                                </div>
                            </div>
                            <!-- slide-3 end -->

                            <!-- slide-4 -->
                            <div class="splide__slide seoToolsSlide2 contactFormToogler">
                                <div class="iconBox">
                                <i class="fa fa-bullseye skypeColor" aria-hidden="true"></i>
                                </div>
                                <div class="slideContentBox skypeBg">
                                    <p>Get Your Website Design</p>
                                    <p>To Drive Growth</p>
                                </div>
                            </div>
                            <!-- slide-4 end -->

                        </div>
                </section>
            </div>
            <!-- seo Tools Slide ended -->

        </div>

        <div class="col-md-6 seoResultContainer">
            <h1 class="commonTitle ">SEO Results We Delivering in 2023</h1>

            <section class="splide seoResultSection" aria-label="Splide Slider ">
                <div class="splide__track ">
                    <div class="splide__list">

                        <?php foreach ($seoResultsImages as $data): ?>
                            <!-- slide-1 -->
                            <div class="splide__slide seoResultSlide">
                                <table class="table">
                                    <div class="tableCaption brandBg text-center fs-5 fw-bold px-2">
                                        <span>Project Name - Quality Pest ControllGTA (Canada,Toronto)</span>
                                    </div>
                                    <thead>
                                        <tr>
                                            <th scope="col">Keywords</th>
                                            <th scope="col">Ranking (jun 2022)</th>
                                            <th scope="col">Ranking (jan 2023)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Steam Cell Therappy</td>
                                            <td>15</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>Steam Cell Therappy</td>
                                            <td>15</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>Steam Cell Therappy</td>
                                            <td>15</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>Steam Cell Therappy</td>
                                            <td>15</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>Steam Cell Therappy</td>
                                            <td>15</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>Steam Cell Therappy</td>
                                            <td>15</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>Steam Cell Therappy</td>
                                            <td>15</td>
                                            <td>1</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- slide-1 end -->
                        <?php endforeach; ?>

                    </div>
            </section>
        </div>




    </div>
</div>
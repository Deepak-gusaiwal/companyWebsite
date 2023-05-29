<!-- popular podcast array started -->
<?php
$popularPodcastArr = [
    [
        "img" => "spotify.png",
        "title" => "spotify",
        "url" => "/product/spotify-podcast-submission-services.php"
    ],
    [
        "img" => "gaana-com.png",
        "title" => "ganna.com",
        "url" => "/product/gaana-com-podcast-submission-services.php"
    ],
    [
        "img" => "soundcloud.webp",
        "title" => "sound cloud",
        "url" => "/product/soundcloud-podcast-submission-services.php"
    ],
    [
        "img" => "amazon.webp",
        "title" => "Amazon Music",
        "url" => "/product/amazon-podcast-submission-services.php"
    ],
    [
        "img" => "apple.webp",
        "title" => "Apple Podcast",
        "url" => "/product/apple-podcast-submission-services.php"
    ],
    [
        "img" => "buzzsprout.png",
        "title" => "buzzsprout",
        "url" => "/product/buzzsprout-podcast-submission-services.php"
    ],
  
]
    ?>
<!-- popular podcast array ended -->



<div class="container">

    <div class="popularPodcasteContainer">
        <h1 class="commonTitle text-center mt-2">Popular <span class="text-white">Podcast</span></h1>

        <section class="splide popularPodcastSplideContainer py-2" aria-label="Splide Slider ">
            <div class="splide__track ">
                <div class="splide__list">

                    <?php foreach ($popularPodcastArr as $data): ?>
                        <!-- slide-1 -->
                        <div class="splide__slide popularPodcasteSlide">

                            <div class="imgBox">
                                <a href="<?php echo $data['url'] ?>">
                                    <img src="../assets/img/podcast/<?php echo $data['img'] ?>"
                                        alt="sliderimg-<?php echo $data['img'] ?>" />
                                </a>
                            </div>
                            <h2 class="text-capitalize"><a href="<?php echo $data['url'] ?>"><?php echo $data['title']; ?></a></h2>
                        </div>
                        <!-- slide-1 end -->
                    <?php endforeach; ?>

                </div>
        </section>
    </div>
</div>
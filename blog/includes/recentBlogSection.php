<?php

// Sort the blogs based on date (most recent first)
usort($blogs, function ($a, $b) {
    $dateA = DateTime::createFromFormat('d F y', $a['date']);
    $dateB = DateTime::createFromFormat('d F y', $b['date']);
    return $dateB <=> $dateA;
});

$recentBlogs = array_slice($blogs, 0, 6);
?>


<div class="row recentBlogsSection mt-2">

    <h1 class="titleBanner col-12 m-0">Recent Blogs</h1>

    <?php foreach ($recentBlogs as $data): ?>
        <div class="col-md-4 col-sm-6  my-2">
            <div class="blogCommonCard">
                <a href="<?php echo $data['url'] ?>" class="imgBox">
                    <img src="./img/<?php echo $data['img'] ?>" alt="blog image">
                </a>
                <div class="contentBox">
                    <h4 class="my-2"><a href="<?php echo $data['url'] ?>"><?php echo $data['title'] ?></a></h4>
                    <p class="my-2"><?php echo $data['excerpt'] ?>....</p>

                    <div class="blogCommonCardBottom">
                        <a href="<?php echo $data['url'] ?>">Continue Reading</a>
                        <span class="date"><?php echo $data['date'] ?></span>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>




</div>
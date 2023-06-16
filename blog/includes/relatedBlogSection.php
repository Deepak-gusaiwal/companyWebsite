<?php
$filteredBlogs = array_filter($blogs, function($blog) use ($blogCategoryName) {
    return strtolower($blog['category'])  === strtolower($blogCategoryName);
});


?>

<div class="row relatedBlogSection mt-2">

    <h1 class="titleBanner col-12 m-0">
        <?php echo $pageTitle; ?> Related Blogs
    </h1>

    <?php foreach ($filteredBlogs as $data): ?>
        <div class="col-md-4 col-sm-6  my-2">
            <div class="blogCommonCard">
                <a href="<?php echo $data['url'] ?>" class="imgBox">
                    <img src="./img/<?php echo $data['img'] ?>" alt="blogImage">
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
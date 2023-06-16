<div class="row blogCategoriesSection mt-2">

    <h1 class="titleBanner col-12 m-0">Our Blog Categories</h1>

    <?php foreach ($blogCategoryArr as $data): ?>
        <div class="col-md-4 col-sm-6  my-2">
            <div class="blogCommonCard">
                <a href="/blog/<?php echo $data['url']; ?>" class="imgBox imgcontain">
                    <img src="./img/categories/<?php echo $data['img']; ?>" alt="<?php echo $data['img']; ?>">
                </a>
                <div class="contentBox">
                    <h3 class=" text-center fw-bold"><?php echo $data['title']; ?></h3>
                    <div class="blogCommonCardBottom justify-content-center">
                        <a href="/blog/category/<?php echo $data['url']; ?>">Explore More</a>

                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>



</div>
<div class="row blogCategoriesSection mt-2">

    <h1 class="titleBanner col-12 m-0 mw-100">Our Blog Categories</h1>

    <?php foreach ($blogCategoryArr as $data): ?>
        <div class="col-md-4 col-sm-6  my-2">
            <div class="blogCommonCard blogCategoryCard d-flex flex-md-row flex-column justify-content-md-center justify-content-end align-items-center gap-2">
                <a href="/blog/<?php echo $data['url']; ?>" class="imgBox imgcontain">
                    <img src="./img/categories/<?php echo $data['img']; ?>" alt="<?php echo $data['img']; ?>">
                </a>
                <div class="contentBox w-100">
                    <h3 class="text-capitalize text-center fw-bold">
                        <a href="<?php echo $data['url']; ?>"><?php echo $data['title']; ?></a>
                    </h3>
                    <div class="blogCommonCardBottom justify-content-center">
                        <a href="/blog/<?php echo $data['url']; ?>">Explore More</a>

                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>



</div>
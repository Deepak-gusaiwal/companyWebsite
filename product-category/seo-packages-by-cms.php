<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEO Package By CMS</title>

    <!-- cssLinks -->
    <?php
    $pageTitle = "SEO Package By CMS";
    $isProductPage = true;
    require "../includes/cssLinks.php";
    ?>
</head>

<body>
    <!-- header Section Starteed -->
    <?php require "../includes/header.php"; ?>
    <!-- header Section Ended -->
    <!-- breadCrumb started -->
    <?php require "../includes/breadCrumb.php"; ?>
    <!-- breadCrumb ended -->


    <!-- All podcast array started -->
    <?php
    $AllProducts = [
        [
            "img" => "ecommerceSeoService/wordpress.png",
            "title" => "WordPress SEO",
            "url" => "/product/wordpress-seo-packages.php",
        ],
        [
            "img" => "ecommerceSeoService/shopify.png",
            "title" => "Shopify SEO",
            "url" => "/product/shopify-seo-packages.php",
        ],
        [
            "img" => "ecommerceSeoService/magento.png",
            "title" => "Magento SEO",
            "url" => "/product/magento-seo-packages.php",
        ],
        [
            "img" => "ecommerceSeoService/wix.png",
            "title" => "Wix SEO",
            "url" => "/product/wix-seo-packages.php",
        ],
    ]
        ?>
    <!-- all podcast array ended -->
    <!-- <div class="contentHolderSection pb-2">
        <div class="container ">
            <div class="bannerSection BottomBorder">
      
            </div>

            <div class="content">
            
            </div>

        </div>
    </div> -->


    <div class="container">

        <div class="productListContainer">
            <h1 class="titleBanner"> All
                <?php echo $pageTitle; ?>
            </h1>

            <div class="row">
                <?php foreach ($AllProducts as $data): ?>
                    <div class="col-md-3 col-sm-6 productCardCol">
                        <div class="singleProductCard">
                            <div class="imgBox">
                                <a href="<?php echo $data['url'] ?>">
                                    <img src="../assets/img/services/<?php echo $data['img'] ?>" alt="">
                                </a>

                            </div>
                            <h2 class="text-capitalize"><a href="<?php echo $data['url'] ?>"><?php echo $data['title'] ?></a></h2>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>





    <!-- contactSetion started -->
    <?php require "../includes/contactSection.php"; ?>
    <!-- contactSetion ended -->

    <!-- <div class="contentHolderSection pb-2">
        <div class="container ">
            <div class="content">
 
            </div>
        </div>
    </div> -->

    <!-- other Services Section Started -->
    <div class="contentHolderSection">
        <div class=" container ">
            <div class="bannerSection BottomBorder">
                <h1 class="redColor">Other services we Provide</h1>
            </div>
            <?php require "../includes/Products/otherServices.php"; ?>
        </div>
    </div>
    <!-- other Services Section ended -->

    <!-- footer started -->
    <?php require "../includes/footer.php"; ?>
    <!-- footer ended -->
    <!-- jsLinks -->
    <?php require "../includes/jsLinks.php"; ?>
</body>

</html>
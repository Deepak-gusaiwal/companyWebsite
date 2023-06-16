<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ecommerce website designing & development packages</title>

    <!-- cssLinks -->
    <?php
    $pageTitle = "ecommerce website designing & development packages";
    $categoryTitle="web development";
    $categoryUrl="/product-category/website-designing-development-packages.php";
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
            "img" => "webdevelopment/ecommerce/shopify.png",
            "title" => "Shopify Website",
            "url" => "/shopify-ecommerce-designing-development-packages.php",
        ],
        [
            "img" => "webdevelopment/ecommerce/wordpress.png",
            "title" => "WordPress Website",
            "url" => "/wordpress-ecommerce-designing-development-packages.php",
        ],
        [
            "img" => "webdevelopment/ecommerce/magento.png",
            "title" => "Magento Website",
            "url" => "/magento-ecommerce-designing-development-packages.php",
        ],
        [
            "img" => "webdevelopment/ecommerce/opencart.png",
            "title" => "OpenCart Website",
            "url" => "/opencart-website-designing-company.php",
        ],
        [
            "img" => "webdevelopment/ecommerce/wix.png",
            "title" => "Wix Website",
            "url" => "/wix-website-designing-company.php",
        ],
       

    ]
        ?>
    <!-- all podcast array ended -->
    <div class="contentHolderSection pb-2">
        <div class="container ">
            <div class="bannerSection BottomBorder">
                <h1><?php echo $pageTitle; ?></h1>
           
        </div>
    </div>


    <div class="container">

        <div class="productListContainer">
            <h1 class="titleBanner mw-100"> All
                <?php echo $pageTitle; ?>
            </h1>

            <div class="row ">
                <?php foreach ($AllProducts as $data): ?>
                    <div class="col-md-3 col-sm-6 productCardCol">
                        <div class="singleProductCard">
                            <div class="imgBox bg-white p-2">
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

<!-- 
    <div class="contentHolderSection pb-2">
        <div class="container ">

            <div class="content">
             
            </div>

        </div>
    </div> -->

    <!-- footer started -->
    <?php require "../includes/footer.php"; ?>
    <!-- footer ended -->
    <!-- jsLinks -->
    <?php require "../includes/jsLinks.php"; ?>
</body>

</html>
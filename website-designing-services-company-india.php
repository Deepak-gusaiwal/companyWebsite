<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Designing Services</title>

    <!-- cssLinks -->
    <?php
    $pageTitle = "Website Designing Services";
    $isProductPage = false;
    require "./includes/cssLinks.php";
    ?>
</head>

<body>
    <!-- header Section Starteed -->
    <?php require "./includes/header.php"; ?>
    <!-- header Section Ended -->
    <!-- breadCrumb started -->
    <?php require "./includes/breadCrumb.php"; ?>
    <!-- breadCrumb ended -->


    <!-- All podcast array started -->
    <?php
    $AllProducts = [
        [
            "img" => "websitedesigning/responsivewesbite.png",
            "title" => "Mobile Web Designing",
            "url" => "/mobile-responsive-website-designing-services-company-india.php",
        ],
        [
            "img" => "websitedesigning/wordpress.png",
            "title" => "WordPress Web Designing",
            "url" => "/wordpress-website-designing-services-company-india.php",
        ],
        [
            "img" => "websitedesigning/shopify.png",
            "title" => "Shopify Web Designing",
            "url" => "/shopify-ecommerce-website-designing-services-company-india.php",
        ],
        [
            "img" => "websitedesigning/cms.png",
            "title" => "CMS Web Designing",
            "url" => "/cms-based-website-designing-development-packages.php",
        ],
        [
            "img" => "websitedesigning/magento.png",
            "title" => "Magento Web Designing",
            "url" => "/magento-website-designing-company.php",
        ],
        [
            "img" => "websitedesigning/ecommerece.png",
            "title" => "eCommerce Web Designing",
            "url" => "/ecommerce-website-designing-company.php",
        ],
        [
            "img" => "websitedesigning/portfoliowebsite.png",
            "title" => "Portfolio Web Designing",
            "url" => "/portfolio-website-designing-company.php",
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

            <div class="row">
                <?php foreach ($AllProducts as $data): ?>
                    <div class="col-md-3 col-sm-6 productCardCol">
                        <div class="singleProductCard">
                            <div class="imgBox bg-white p-2">
                                <a href="<?php echo $data['url'] ?>">
                                    <img src="./assets/img/services/<?php echo $data['img'] ?>" alt="">
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
    <?php require "./includes/contactSection.php"; ?>
    <!-- contactSetion ended -->
    <!-- <div class="d-flex justify-content-center align-items-center text-center fw-bold brandBg py-3">
                <div class="fw-bolder d-flex flex-column text-center text-capitalize px-2">
                    <h1 class=" fw-bold">Top Pay Per Click Services | PPC Advertising Agency:</h1>
                    <h2 class="fw-bold redColor"><a href="tel:<?php echo $phoneNumber1; ?>">Call Us At: <?php echo $phoneNumber1; ?></a></h2>
                </div>

            </div> -->


    <!-- other Services Section Started -->
    <div class="contentHolderSection">
        <div class=" container ">
            <div class="bannerSection BottomBorder">
                <h1 class="redColor">Other services we Provide</h1>
            </div>
            <?php require "./includes/Products/otherServices.php"; ?>
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
    <?php require "./includes/footer.php"; ?>
    <!-- footer ended -->
    <!-- jsLinks -->
    <?php require "./includes/jsLinks.php"; ?>
</body>

</html>
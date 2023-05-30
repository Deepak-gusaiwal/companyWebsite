<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Product Page</title>

    <!-- cssLinks -->
    <?php
    $pageTitle = "National SEO Packages";
    $categoryTitle = "SEO Package By Region";
    $categoryUrl = "/product-category/seo-package-by-region.php";
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


    <div class="contentHolderSection">
        
        <div class="content container p-2">
           <h1>What Is Local SEO (Search Engine Optimization)?</h1>
           <p>What Is Local SEO? Local SEO refers to the search optimization of Locally based business websites to help them get more local search visibility so they can be easily found online or in search by local customers. Local business owners can purchase Local SEO Packages form India’s Top Rated Local SEO Service.</p>
        </div>

      

    </div>



    <!-- image previewBox -->
    <div class="productImagePreviewBox">
        <i class="fa fa-times" aria-hidden="true"></i>
    </div>



    <?php

    $productsPackagesArray = [

        "range" => "₹12,000 – ₹72,000",

       
        "packageData" => [
            "1-10" => [
                "price" =>
                "₹14,400/-",
                "title" => "Number of Monthly Backlinks = 90 + Advanced On - Page SEO Activities",
                "description" => "description",
                "img" =>
                "ecommerceSeo/nationalPackages/1.webp"
            ],
            "11-20" => [
                "price" =>
                "₹17,600/-",
                "title" => "Number of Monthly Backlinks = 110 + Advanced On - Page SEO Activities",
                "description" => "description",
                "img" =>
                "ecommerceSeo/nationalPackages/2.webp"
            ],
            "21-30" => [
                "price" =>
                "₹20,000/-",
                "title" => "Number of Monthly Backlinks = 130 + Advanced On - Page SEO Activities",
                "description" => "description",
                "img" =>
                "ecommerceSeo/nationalPackages/3.webp"
            ],
            "31-40" => [
                "price" =>
                "₹24,000/-",
                "title" => "Number of Monthly Backlinks = 150 + Advanced On - Page SEO Activities",
                "description" => "description",
                "img" =>
                "ecommerceSeo/nationalPackages/4.webp"
            ],
            "41-50" => [
                "price" =>
                "₹28,000/-",
                "title" => "Number of Monthly Backlinks = 170 + Advanced On - Page SEO Activities",
                "description" => "description",
                "img" =>
                "ecommerceSeo/nationalPackages/5.webp"
            ],
            "51-60" => [
                "price" =>
                "₹32,000/-",
                "title" => "Number of Monthly Backlinks = 200 + Advanced On - Page SEO Activities",
                "description" => "description",
                "img" =>
                "ecommerceSeo/nationalPackages/6.webp"
            ],
            "61-70" => [
                "price" =>
                "₹40,000/-",
                "title" => "Number of Monthly Backlinks = 230 + Advanced On - Page SEO Activities",
                "description" => "description",
                "img" =>
                "ecommerceSeo/nationalPackages/7.webp"
            ],
            "71-80" => [
                "price" =>
                "₹48,000/-",
                "title" => "Number of Monthly Backlinks = 260 + Advanced On - Page SEO Activities",
                "description" => "description",
                "img" =>
                "ecommerceSeo/nationalPackages/8.webp"
            ],
            "81-90" => [
                "price" =>
                "₹56,000/-",
                "title" => "Number of Monthly Backlinks = 300 + Advanced On - Page SEO Activities",
                "description" => "description",
                "img" =>
                "ecommerceSeo/nationalPackages/9.webp"
            ],
            "91-100" => [
                "price" =>
                "₹64,000/-",
                "title" => "Number of Monthly Backlinks = 400 + Advanced On - Page SEO Activities",
                "description" => "description",
                "img" =>
                "ecommerceSeo/nationalPackages/10.webp"
            ],
        ],

    ]
        ?>


    <!-- productDetails started -->
  

    <div class="productPageContainer my-2">
        <div class="container packagesContainer">
            <div class="productBanner mb-2">
                <h1>
                    <?php echo $pageTitle; ?>
                </h1>
                <span class="productPriceRange">
                    (
                    <?php echo $productsPackagesArray['range']; ?>)
                </span>
            </div>

            <div class="packagesTabs">
                <button data-filter="localPackage" class="packageTab active">
                <?php echo $pageTitle; ?>
                </button>

            </div>
            <div class="PackagesTabsDataContainer">
                <!-- local Packages Section started -->

                <div class="localPackage PackagesTabsData active">
                    <h4>Select The No. Of Keywords </h4>

                    <div class="keywordAccordionContainer">
                        <!-- accordion started -->
                        <?php foreach ($productsPackagesArray['packageData'] as $localKey => $localData): ?>
                            <div class="keywordAccordion">
                                <div class="keywordAccordionHead">
                                    <span><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <span>
                                        <?php echo $localKey; ?>
                                    </span>
                                    <span class="accordionPrice">
                                        (
                                        <?php echo $localData['price']; ?>
                                        <sup>+18% GST</sup>)
                                    </span>
                                </div>

                                <div class="keywordAccordionBody">
                                    <div class="contentBox">
                                        <span class="accordionPrice d-md-none d-block">
                                            <?php echo $localData['price']; ?>
                                            <sup>+18% GST</sup>
                                        </span>
                                        <span>
                                            <?php echo $localData['title']; ?>
                                        </span>
                                        <h4>Description</h4>
                                        <p>
                                            <?php echo $localData['description']; ?>
                                        </p>
                                        <?php require "../includes/Helpers/productButtonGroup.php"; ?>
                                    </div>
                                    <div class="imgBox">
                                        <img width="640" height="457"
                                            src="../assets/img/product/<?php echo $localData['img']; ?>"
                                            alt="product Image" />
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <!-- accordion ended -->
                    </div>
                </div>
                <!-- local Packages Section ended -->

            </div>
        </div>
    </div>

    <!-- productDetails ended -->



    <!-- seo weekly checklist section started -->
    <?php $checkListCardTitle = $pageTitle;
    $checkListTitile = "$pageTitle Weekly On-Page Checklist 2023";

    require "../includes/seoCheckList.php"; ?>
    <!-- seo weekly checklist section ended -->

    <!-- product Content Section started -->
    <!-- <div class="contentHolderSection">
        <div class="content container p-2">
           
        </div>
    </div> -->

    <!-- contactSetion started -->
    <?php require "../includes/contactSection.php"; ?>
    <!-- contactSetion ended -->

    <!-- <div class="contentHolderSection">
        <div class="content container p-2">
          
        </div>
    </div> -->
    <!--======================== seoToolsAndResult sections started==================== -->

    <?php require "../includes/seoToolsAndResult.php"; ?>

    <!--====================== seoToolsAndResult sections ended=================== -->
    <!-- <div class="contentHolderSection">

        <div class="content container p-2">
           
        </div>
    </div> -->

    <!-- servicesRatings section started -->
    <?php require "../includes/servicesRating.php"; ?>
    <!-- servicesRatings section ended -->
    <div class="contentHolderSection">
        <!-- <div class="content container p-2">
           
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
        <!-- 
        <div class="content container p-2">

          
        </div> -->
    </div>
    <!-- product Content Section ended -->




    <!-- contactSetion started -->
    <?php require "../includes/contactSection.php"; ?>
    <!-- contactSetion ended -->
    <!-- footer started -->
    <?php require "../includes/footer.php"; ?>
    <!-- footer ended -->



    <!-- jsLinks -->
    <?php require "../includes/jsLinks.php"; ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Product Page</title>

    <!-- cssLinks -->
    <?php
    $pageTitle = "SEO for Marketing Research";
    $categoryTitle = "SEO Packages By Industry";
    $categoryUrl = "product-category/seo-packages-by-industies";
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
            <!-- Product Top Content started -->
            
            <!-- Product Top Content ended -->
        </div>
    </div>



    <!-- image previewBox -->
    <div class="productImagePreviewBox">
        <i class="fa fa-times" aria-hidden="true"></i>
    </div>



    <?php

    $productsPackagesArray = [

        "range" => "₹12,000 – ₹72,000",
        "packages" => [
            // local packages started
            "localPackages" => [
                "1-10" => [
                    "price" => "₹12,000/-",
                    "title" => "Number of Monthly Backlinks = 70 + Advanced On - Page SEO Activities",
                    "description"
                    => "description",
                    "img" => "ecommerceSeo/localpackages/1.webp"
                ],
                "11-20" =>
                [
                    "price" => "₹14,400/-",
                    "title" => "Number of Monthly Backlinks = 90 + Advanced On - Page SEO Activities",
                    "description" => "description",
                    "img" =>
                    "ecommerceSeo/localpackages/2.webp"
                ],
                "21-30" => [
                    "price" => "₹17,600/-",
                    "title" => "Number of Monthly Backlinks = 110 + Advanced On-Page SEO Activities",
                    "description" => "description",
                    "img" =>
                    "ecommerceSeo/localpackages/3.webp"
                ],
                "31-40" => [
                    "price" => "₹20,000/-",
                    "title" => "Number of Monthly Backlinks = 130 + Advanced On-Page SEO Activities",
                    "description" => "description",
                    "img" =>
                    "ecommerceSeo/localpackages/4.webp"
                ],
                "41-50" => [
                    "price" => "₹24,000/-",
                    "title" => "Number of Monthly Backlinks = 150 + Advanced On-Page SEO Activities",
                    "description" => "description",
                    "img" =>
                    "ecommerceSeo/localpackages/5.webp"
                ],
                "51-60" => [
                    "price" => "₹28,000/-",
                    "title" => "Number of Monthly Backlinks = 170 + Advanced On-Page SEO Activities",
                    "description" => "description",
                    "img" =>
                    "ecommerceSeo/localpackages/6.webp"
                ],
                "61-70" => [
                    "price" => "₹32,000/-",
                    "title" => "Number of Monthly Backlinks = 200 + Advanced On-Page SEO Activities",
                    "description" => "description",
                    "img" =>
                    "ecommerceSeo/localpackages/7.webp"
                ],
                "71-80" => [
                    "price" => "₹40,000/-",
                    "title" => "Number of Monthly Backlinks = 230 + Advanced On-Page SEO Activities",
                    "description" => "description",
                    "img" =>
                    "ecommerceSeo/localpackages/8.webp"
                ],
                "81-90" => [
                    "price" => "₹48,000/-",
                    "title" => "Number of Monthly Backlinks = 260 + Advanced On-Page SEO Activities",
                    "description" => "description",
                    "img" =>
                    "ecommerceSeo/localpackages/9.webp"
                ],
                "91-100" => [
                    "price" =>
                    "₹56,000/-",
                    "title" => "Number of Monthly Backlinks = 300 + Advanced On - Page SEO Activities",
                    "description" => "description",
                    "img" =>
                    "ecommerceSeo/localpackages/10.webp"
                ],
            ],

            // local packages ended //
            "nationalPackages" => [
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

            // national packages ended //
            "internationalPackages" => [
                "1-10" => [
                    "price" => "₹17,600/-",
                    "title" => "Number of Monthly Backlinks = 100 + Advanced On - Page SEO Activities",
                    "description" => "description",
                    "img" =>
                    "ecommerceSeo/internationalPackages/1.webp"
                ],
                "11-20" => [
                    "price" =>
                    "₹20,000/-",
                    "title" => "Number of Monthly Backlinks = 130 + Advanced On - Page SEO Activities",
                    "description" => "description",
                    "img" =>
                    "ecommerceSeo/internationalPackages/2.webp"
                ],
                "21-30" => [
                    "price" =>
                    "₹24,000/-",
                    "title" => "Number of Monthly Backlinks = 150 + Advanced On - Page SEO Activities",
                    "description" => "description",
                    "img" =>
                    "ecommerceSeo/internationalPackages/3.webp"
                ],
                "31-40" => [
                    "price" =>
                    "₹28,000/-",
                    "title" => "Number of Monthly Backlinks = 180 + Advanced On - Page SEO Activities",
                    "description" => "description",
                    "img" =>
                    "ecommerceSeo/internationalPackages/4.webp"
                ],
                "41-50" => [
                    "price" =>
                    "₹32,000/-",
                    "title" => "Number of Monthly Backlinks = 210 + Advanced On - Page SEO Activities",
                    "description" => "description",
                    "img" =>
                    "ecommerceSeo/internationalPackages/5.webp"
                ],
                "51-60" => [
                    "price" =>
                    "₹40,000/-",
                    "title" => "Number of Monthly Backlinks = 240 + Advanced On - Page SEO Activities",
                    "description" => "description",
                    "img" =>
                    "ecommerceSeo/internationalPackages/6.webp"
                ],
                "61-70" => [
                    "price" =>
                    "₹48,000/-",
                    "title" => "Number of Monthly Backlinks = 270 + Advanced On - Page SEO Activities",
                    "description" => "description",
                    "img" =>
                    "ecommerceSeo/internationalPackages/7.webp"
                ],
                "71-80" => [
                    "price" =>
                    "₹56,000/-",
                    "title" => "Number of Monthly Backlinks = 300 + Advanced On - Page SEO Activities",
                    "description" => "description",
                    "img" =>
                    "ecommerceSeo/internationalPackages/8.webp"
                ],
                "81-90" => [
                    "price" =>
                    "₹64,000/-",
                    "title" => "Number of Monthly Backlinks = 350 + Advanced On - Page SEO Activities",
                    "description" => "description",
                    "img" =>
                    "ecommerceSeo/internationalPackages/9.webp"
                ],
                "91-100" => [
                    "price" =>
                    "₹72,000/-",
                    "title" => "Number of Monthly Backlinks = 450 + Advanced On - Page SEO Activities",
                    "description" => "description",
                    "img" =>
                    "ecommerceSeo/internationalPackages/10.webp"
                ],
            ]
            // international packages  ended 
        ],

    ]
        ?>


    <!-- productDetails started -->
    <?php
    $PackagesArr = $productsPackagesArray['packages'];
    ?>

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
                    Local
                </button>
                <button data-filter="nationalPackage" class="packageTab">
                    National
                </button>
                <button data-filter="interNatinalPackage" class="packageTab">
                    International
                </button>
            </div>
            <div class="PackagesTabsDataContainer">
                <!-- local Packages Section started -->

                <div class="localPackage PackagesTabsData active">
                    <h4>Select The No. Of Keywords </h4>

                    <div class="keywordAccordionContainer">
                        <!-- accordion started -->
                        <?php foreach ($PackagesArr['localPackages'] as $localKey => $localData): ?>
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

                <!-- national Packages Section started -->
                <div class="nationalPackage PackagesTabsData">
                    <h4>Select The No. Of Keywords </h4>

                    <div class="keywordAccordionContainer">
                        <?php foreach ($PackagesArr['nationalPackages'] as $localKey => $localData): ?>
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
                <!-- national Packages Section ended -->

                <!-- international Packages Section started -->
                <div class="interNatinalPackage PackagesTabsData">
                    <h4>Select The No. Of Keywords </h4>

                    <div class="keywordAccordionContainer">
                        <?php foreach ($PackagesArr['internationalPackages'] as $localKey => $localData): ?>
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
                <!-- international Packages Section ended -->
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
    </div>
    <!-- product Content Section ended -->

    <!-- <div class="contentHolderSection">
        
        <div class="content container p-2">
           
        </div>

        <div class="content container p-2">
          
        </div>

    </div> -->
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
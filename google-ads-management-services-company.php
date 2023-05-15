<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Product Page</title>

    <!-- cssLinks -->
    <?php
    $pageTitle = "Google Ads";
    $categoryTitle = "PPC Services";
    $categoryUrl = "product-category/seo-packages-by-industies";
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




            // international packages  ended 
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

            </div>

            <div class="packagesTabs">
                <button data-filter="localPackage" class="packageTab active">
                    Local/National/International
                </button>
            </div>
            <div class="PackagesTabsDataContainer">
                <!-- local Packages Section started -->

                <div class="localPackage PackagesTabsData active">
                    <h4>Select the Type of Package</h4>

                    <div class="keywordAccordionContainer">


                        <!-- accordion-1 started -->
                        <div class="keywordAccordion">
                            <div class="keywordAccordionHead">
                                <span><i class="fa fa-plus" aria-hidden="true"></i></span>
                                <span>
                                    Google Sales Ads
                                </span>

                            </div>

                            <div class="keywordAccordionBody serviceAccordion row">
                                <div class="contentBox">


                                    <h4>Description</h4>
                                    <p>
                                        Google sales ads campaign allow your business to generate online sales through
                                        Phone Calls, Direct user Purchase from Your Website or App, and can generate
                                        leads/inquiries directly over the phone call.
                                    </p>
                                    <ul class="accordionUl">
                                        <li>
                                            <strong>Available Ad Placement Opportunities :</strong> Search, Performance
                                            Max, Display,
                                        </li>

                                        <li>
                                            <strong>Campaign Daily Budget (Suggested):</strong> $12 to $50 Per day. The
                                            daily budget depends up on the industry, keywords and their targeted CPC
                                            Suggestions for the top page bid and low page bid by the Keywords Planner
                                            Tool.
                                        </li>

                                        <li>
                                            <strong>Google Ads Campaign Creation Cost:</strong> For non-Ecommerce Google
                                            ads campaigns we charge a flat fee of $100 for 1 Google ads campaign
                                            creation. For eCommerce Industry Campaign Creation Cost varies in between
                                            $150 to $200 on the basis of the type of campaign and integrations required.
                                        </li>

                                        <li>
                                            <strong>Monthly Professional Fee:</strong>
                                            We charge a fee of 15% on the total monthly spending on the campaign in
                                            which we manage and optimize and keep a track on the campaign performance.
                                        </li>

                                        <li>
                                            <strong>Number of Keywords Inclusions:</strong> Unlimited Keywords Inclusion
                                            and Exclusion in the Google sales ad campaign.
                                        </li>
                                    </ul>
                                    <?php require "./includes/Helpers/productButtonGroup.php"; ?>
                                </div>
                                <div class="imgBox">
                                    <img width="640" height="457" src="./assets/img/serrvices/googleAds/1.webp ?>"
                                        alt="product Image" />
                                </div>
                            </div>
                        </div>
                        <!-- accordion-1 ended -->


                        <!-- accordion-2 started -->
                        <div class="keywordAccordion">
                            <div class="keywordAccordionHead">
                                <span><i class="fa fa-plus" aria-hidden="true"></i></span>
                                <span>
                                    Google Leads Ads
                                </span>

                            </div>

                            <div class="keywordAccordionBody serviceAccordion row">
                                <div class="contentBox">


                                    <h4>Description</h4>
                                    <p>
                                        Google leads generation campaign is best suitable for the businesses willing to
                                        generate more leads directly through display and search ads by allowing users to
                                        visit the business landing page designed for the Google ads campaign and
                                        encouraging visitors/customers to take action by filling up the contact form,
                                        call, live chat, or connecting through WhatsApp.
                                    </p>
                                    <ul class="accordionUl">
                                        <li>
                                            <strong>Available Ad Placement Opportunities :</strong> Search, Performance
                                            Max, Display, Discovery.
                                        </li>

                                        <li>
                                            <strong>Campaign Daily Budget (Suggested): </strong> $15 to $65 Per day. The
                                            daily budget depends up on the industry, keywords and their targeted CPC
                                            Suggestions for the top page bid and low page bid by the Keywords Planner
                                            Tool.
                                        </li>

                                        <li>
                                            <strong>Google Ads Campaign Creation Cost:</strong> For non-Ecommerce Google
                                            ads campaigns we charge a flat fee of $100 for 1 Google ads campaign
                                            creation. For eCommerce Industry Campaign Creation Cost varies in between
                                            $150 to $200 on the basis of the type of campaign and integrations required.
                                        </li>

                                        <li>
                                            <strong>Monthly Professional Fee:</strong>
                                            We charge a fee of 15% on the total monthly spending on the campaign in
                                            which we manage and optimize and keep a track on the campaign performance.
                                        </li>

                                        <li>
                                            <strong>Number of Keywords Inclusions:</strong> Unlimited Keywords Inclusion
                                            and Exclusion in the Google sales ad campaign.
                                        </li>

                                        <li>
                                            <strong>Available Ad Placement Opportunities :</strong> Search, Performance
                                            Max, Display, Discovery
                                        </li>
                                    </ul>
                                    <?php require "./includes/Helpers/productButtonGroup.php"; ?>
                                </div>
                                <div class="imgBox">
                                    <img width="640" height="457" src="./assets/img/serrvices/googleAds/1.webp ?>"
                                        alt="product Image" />
                                </div>
                            </div>
                        </div>
                        <!-- accordion-2 ended -->


                        <!-- accordion-3 started -->
                        <div class="keywordAccordion">
                            <div class="keywordAccordionHead">
                                <span><i class="fa fa-plus" aria-hidden="true"></i></span>
                                <span>
                                    Google Website Traffic Ads
                                </span>

                            </div>

                            <div class="keywordAccordionBody serviceAccordion row">
                                <div class="contentBox">
                                    <ul class="accordionUl">
                                        <li>
                                            <strong>Available Ad Placement Opportunities :</strong>Search, Performance
                                            Max, Display, Discovery
                                        </li>

                                    </ul>
                                    <?php require "./includes/Helpers/productButtonGroup.php"; ?>
                                </div>
                                <div class="imgBox">
                                    <img width="640" height="457" src="./assets/img/serrvices/googleAds/1.webp ?>"
                                        alt="product Image" />
                                </div>
                            </div>
                        </div>
                        <!-- accordion-3 ended -->

                        <!-- accordion-4 started -->
                        <div class="keywordAccordion">
                            <div class="keywordAccordionHead">
                                <span><i class="fa fa-plus" aria-hidden="true"></i></span>
                                <span>
                               Google Product and Branding Ads
                                </span>

                            </div>

                            <div class="keywordAccordionBody serviceAccordion row">
                                <div class="contentBox">
                                    <ul class="accordionUl">
                                        <li>
                                            <strong>Available Ad Placement Opportunities :</strong>
                                            Video Ads on YouTube
                                        </li>

                                    </ul>
                                    <?php require "./includes/Helpers/productButtonGroup.php"; ?>
                                </div>
                                <div class="imgBox">
                                    <img width="640" height="457" src="./assets/img/serrvices/googleAds/1.webp ?>"
                                        alt="product Image" />
                                </div>
                            </div>
                        </div>
                        <!-- accordion-4 ended -->

                        <!-- accordion-5 started -->
                        <div class="keywordAccordion">
                            <div class="keywordAccordionHead">
                                <span><i class="fa fa-plus" aria-hidden="true"></i></span>
                                <span>
                                Brand awareness and reach ads
                                </span>

                            </div>

                            <div class="keywordAccordionBody serviceAccordion row">
                                <div class="contentBox">
                                    <ul class="accordionUl">
                                        <li>
                                            <strong>Available Ad Placement Opportunities :</strong>
                                            Display and Video Ads
                                        </li>

                                    </ul>
                                    <?php require "./includes/Helpers/productButtonGroup.php"; ?>
                                </div>
                                <div class="imgBox">
                                    <img width="640" height="457" src="./assets/img/serrvices/googleAds/1.webp ?>"
                                        alt="product Image" />
                                </div>
                            </div>
                        </div>
                        <!-- accordion-5 ended -->

                        <!-- accordion-6 started -->
                        <div class="keywordAccordion">
                            <div class="keywordAccordionHead">
                                <span><i class="fa fa-plus" aria-hidden="true"></i></span>
                                <span>
                                App Promotion Ads
                                </span>

                            </div>

                            <div class="keywordAccordionBody serviceAccordion row">
                                <div class="contentBox">
                                    <ul class="accordionUl">
                                        <li>
                                            <strong>Available Ad Placement Opportunities :</strong>
                                            Targeted Apps, Google Play Store
                                        </li>

                                    </ul>
                                    <?php require "./includes/Helpers/productButtonGroup.php"; ?>
                                </div>
                                <div class="imgBox">
                                    <img width="640" height="457" src="./assets/img/serrvices/googleAds/1.webp ?>"
                                        alt="product Image" />
                                </div>
                            </div>
                        </div>
                        <!-- accordion-6 ended -->

                        <!-- accordion-7 started -->
                        <div class="keywordAccordion">
                            <div class="keywordAccordionHead">
                                <span><i class="fa fa-plus" aria-hidden="true"></i></span>
                                <span>
                                Local Store Visits and Promotion Ads
                                </span>

                            </div>

                            <div class="keywordAccordionBody serviceAccordion row">
                                <div class="contentBox">
                                    <ul class="accordionUl">
                                        <li>
                                            <strong>Available Ad Placement Opportunities: </strong>
                                             Performance Max Ads Integration with Google My Business/Google Maps Profile
                                        </li>

                                    </ul>
                                    <?php require "./includes/Helpers/productButtonGroup.php"; ?>
                                </div>
                                <div class="imgBox">
                                    <img width="640" height="457" src="./assets/img/serrvices/googleAds/1.webp ?>"
                                        alt="product Image" />
                                </div>
                            </div>
                        </div>
                        <!-- accordion-7 ended -->



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

    require "./includes/seoCheckList.php"; ?>
    <!-- seo weekly checklist section ended -->

    <!-- product Content Section started -->
    <!-- <div class="contentHolderSection">
        <div class="content container p-2">
    
        </div>
    </div> -->

    <!-- contactSetion started -->
    <?php require "./includes/contactSection.php"; ?>
    <!-- contactSetion ended -->

    <!-- <div class="contentHolderSection">
        <div class="content container p-2">
           
        </div>
    </div> -->
    <!--======================== seoToolsAndResult sections started==================== -->

    <?php require "./includes/seoToolsAndResult.php"; ?>

    <!--====================== seoToolsAndResult sections ended=================== -->
    <!-- <div class="contentHolderSection">
        <div class="content container p-2">
   
        </div>
    </div> -->

    <!-- servicesRatings section started -->
    <?php require "./includes/servicesRating.php"; ?>
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
                <?php require "./includes/Products/otherServices.php"; ?>
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
    <?php require "./includes/contactSection.php"; ?>
    <!-- contactSetion ended -->
    <!-- footer started -->
    <?php require "./includes/footer.php"; ?>
    <!-- footer ended -->



    <!-- jsLinks -->
    <?php require "./includes/jsLinks.php"; ?>
</body>

</html>
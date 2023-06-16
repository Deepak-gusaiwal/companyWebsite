<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>linkedin Ads</title>

    <!-- cssLinks -->
    <?php
    $pageTitle = "linkedin Ads";
    $categoryTitle = "PPC Services";
    $categoryUrl = "/ppc-pay-per-click-services-india.php";
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
            <h1>linkedin Ads</h1>
            <!-- Product Top Content ended -->
        </div>
    </div>



    <!-- image previewBox -->
    <div class="productImagePreviewBox">
        <i class="fa fa-times" aria-hidden="true"></i>
    </div>





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
                    <h4>Choose Your Google Ad Type</h4>

                    <div class="keywordAccordionContainer">


                        <!-- accordion-1 started -->
                        <!-- <div class="keywordAccordion">
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
                                            <strong>Available Ad Placement Opportunities:</strong> Search, Performance
                                            Max, Display, Discovery.
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
                                            <strong>Monthly Professional Fee:</strong> We charge a fee of 15% on the
                                            total monthly spending on the campaign in which we manage and optimize and
                                            keep a track on the campaign performance.
                                        </li>

                                        <li>
                                            <strong>Number of Keywords Inclusions:</strong> Unlimited Keywords Inclusion
                                            and Exclusion in the Google sales ad campaign.
                                        </li>
                                    </ul>
                                    <?php require "./includes/Helpers/productButtonGroup.php"; ?>
                                </div>
                                <div class="imgBox">
                                    <img src="./assets/img/services/googleAds/goggle-1.png" alt="product Image" />
                                </div>
                            </div>
                        </div> -->
                        <!-- accordion-1 ended -->




                    </div>
                </div>
                <!-- local Packages Section ended -->




            </div>
        </div>
    </div>

    <!-- productDetails ended -->




    <!-- contactSetion started -->
    <?php require "./includes/contactSection.php"; ?>
    <!-- contactSetion ended -->

    <!-- <div class="contentHolderSection">

        <div class="content container p-2">

        </div>

    </div> -->


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





    <!-- footer started -->
    <?php require "./includes/footer.php"; ?>
    <!-- footer ended -->



    <!-- jsLinks -->
    <?php require "./includes/jsLinks.php"; ?>
</body>

</html>
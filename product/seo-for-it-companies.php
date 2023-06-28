<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Product Page</title>

    <!-- cssLinks -->
    <?php
    $pageTitle = "SEO For IT Companies";
    $categoryTitle = "SEO Packages By Industry";
    $categoryUrl = "/product-category/seo-packages-by-industies.php";
    $isProductPage=true;
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
            <h2 class="fs-1 ">Information Technology SEO Packages India – On-Page Activities List</h2>
            <p>
            Our Information Technology SEO packages includes basic to advance on-page SEO activities coming from various advancements for each section of your website service or product pages.
            </p>

    
            <!-- Product Top Content ended -->
        </div>
    </div>



    <!-- image previewBox -->
    <div class="productImagePreviewBox">
        <i class="fa fa-times" aria-hidden="true"></i>
    </div>



    <?php
    
    $productsPackagesArray = [
   
             "range" =>"₹12,000 – ₹72,000",
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
                                        (<?php echo $localData['price']; ?>
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
                                        (<?php echo $localData['price']; ?>
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
                                        (<?php echo $localData['price']; ?>
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
    <div class="contentHolderSection">
        <div class="content container p-2">

        <h3>On-Page Activities Checklist Week 1:</h3>
            <p>Keywords Research, URL Rewriting, Page Title, Meta Description, Meta Keywords, OG Tags, DC Tags, Canonical Tags, Twitter Cards, JSON LD Business & Location Schema, Google Analytics Integration, Google Webmasters Integrations, Contact Forms Testing</p>
            <h3>On-Page Activities Checklist Week 2:</h3>
            <p>Sticky Call Button, Sticky Live Chat Button, Image Alt Tags, Image Title Tags, Heading Tags Optimization, Keywords Density Optimization, Broken Links Check, XML Sitemap Generation, Location/GEO Sitemap Generation</p>
            <h3>On-Page Activities Checklist Week 3:</h3>
            <p>FAQ Schema Implementation, Review Schema Implementation, Product Schema Implementation, Price Schema Implementation, Internal/Contextual Linking</p>
            <h3>On-Page Activities Checklist Week 4:</h3>
            <p>CSS Compression, JS Compression, HTML Compression, Image Compression, Speed Optimization Through cPanel, Htaccess File Compression Codes</p>

            <p><i><b>Everything else related to Website Designing and Development will be separately chargeable.</b></i></p>



        </div>
    </div>

    <!-- contactSetion started -->
    <?php require "../includes/contactSection.php"; ?>
    <!-- contactSetion ended -->

    <div class="contentHolderSection">
        <div class="content container p-2">

        
        <h2 class="fs-1">Management of SEO for technological enterprises</h2>
          <h3>All-star group</h3>

           <p>With the assistance of specialists, SEO becomes straightforward and success is simply attainable. Our consistent, day-to-day management ensures that you’ll never lose out on growth again.</p>
           <h3>Increased return on investment</h3>
           <p>When you have an all-star staff working for you consistently, you’ll notice a higher rate of return on your investment. With our SEO For IT Companies firm, our goal is to increase your visitors, prospects, and income.</p>
           <h3>Every detail is taken care of</h3>
           <p>SEO For IT Companies involves a plethora of distinct components that must be optimized. Our SEO staff is meticulous in their planning and implementation to guarantee that nothing gets between the cracks.</p>
           <p>SEO that is stress-free for technology and information technology organizations On-Page SEO</p>
           <p>Enhance your site’s overall SEO structure and user experience to help search engines index and rank your site more effectively. Additional information</p>

         

        </div>
    </div>
    <!--======================== seoToolsAndResult sections started==================== -->

    <?php require "../includes/seoToolsAndResult.php"; ?>

    <!--====================== seoToolsAndResult sections ended=================== -->
    <div class="contentHolderSection">

        <div class="content container p-2">

        <h3>Off-Page Search Engine Optimization</h3>
           <p>Acquire high-quality backlinks and social signals to help you increase your online authority and search rankings. Additional information</p>



           <h3>Conduct Keyword Research</h3>
           <p>Concentrate on terms with a high perceived value to improve website traffic, conversions, and sales revenue. Additional information</p>
           <h3>Development of Content</h3>
           <p>Create content that engages viewers, motivates them to act, and results in conversions.</p>

           




        </div>
    </div>

    <!-- servicesRatings section started -->
    <?php require "../includes/servicesRating.php"; ?>
    <!-- servicesRatings section ended -->
    <div class="contentHolderSection">


    
    <div class="content container p-2">





  <h2>Indeed, unlimited SEO assistance is available</h2>
  <h3>Check-ins that is consistent</h3>
    <p>
    We’ll communicate with you frequently to discuss strategy, reporting, and other topics. Do you face pressing marketing issues? There is no issue. With our SEO services For IT Companies will respond within one business day or less. Additionally, you’ll have direct access to your account strategist, who you may contact through phone or text at any time.
    </p>

    <h3>Meetings that are adaptable</h3>

    <p>
    You can schedule a conversation with your account strategist at any moment to discuss your SEO strategy and other topics. With regular meetings, you’ll feel secure in the knowledge that you’ll always have access to your expert.
    </p>

    <h3>Month-to-month assistance</h3>
    <p>Each month, our strategy team is available to provide expert website help at no additional charge.</p>

</div>
      

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
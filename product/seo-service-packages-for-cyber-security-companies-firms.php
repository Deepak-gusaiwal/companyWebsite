<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Product Page</title>

    <!-- cssLinks -->
    <?php
    $pageTitle = "SEO for Cyber Security Sites";
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
          <h1>What is SEO for Cyber Security?</h1>
         <p>SEO for Cyber Security Companies is a complete online strategy that uses SEO methods and procedures to increase the visibility of a website on search engines such as Google and Bing.</p>
         <p>As cyber security becomes more prominent and well-known, customers will increasingly turn to the internet to find the best local and national cyber security firms. Although social media and word-of-mouth will always play a part, over 90% of buyers conduct internet research before making a purchase.</p>
         <p>There are several advantages to SEO for Cyber Security Companies. Over time, SEO for Cyber Security Firms has the power to snowball. For instance, content offers two possibilities</p>
         <p>The first is the possibility of ranking higher in search results for more keywords.</p>
         <p>The second point to consider is the likelihood of spontaneous connection formation from outside sources.</p>
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
          <h2>Why SEO is important for cyber security?</h2>
          <p>When other organizations and even individuals need services like these, the easiest way to access them is by going online and doing a quick search. They introduce the search queries that they’re interested in, such as the ones above. When your website is optimized, chances are that it will show in the users’ search results. This makes your target audience into the awareness phase of promotion, when users see your website on their desktops or mobile screens, they move through to the consideration phase when they click through to your website.</p>
        </div>
    </div>

    <!-- contactSetion started -->
    <?php require "../includes/contactSection.php"; ?>
    <!-- contactSetion ended -->

    <div class="contentHolderSection">
        <div class="content container p-2">
    <h2>You may hire our SEO team.</h2>
    <p>Extend the capability of your SEO for Cyber Security Companies to take on or expand SEO right now. Our SEO for Cyber Security Companies  services know the SEO for Cyber Security Companies  services market and can provide you with the resources of a well-trained, dynamic, and well-aligned staff Bringing together the services of a graphic designer, web developer, editor, content writer, CRO, data analyst, SEO, social media specialist, and other professionals. All of this is in line with your revenue and lead generation objectives, and it’s all handled as part of a well-thought-out strategy.</p>

        </div>
    </div>
    <!--======================== seoToolsAndResult sections started==================== -->

    <?php require "../includes/seoToolsAndResult.php"; ?>

    <!--====================== seoToolsAndResult sections ended=================== -->
    <div class="contentHolderSection">

        <div class="content container p-2">
        <h2>Our SEO for Cyber Security Firm Work with Your Team</h2>
        <p>Many of our clients have marketing and sales teams on staff. Our SEO for Cyber Security Firms communicate with your teams right away to give a uniform and coordinated extension that supports and educates you every step of the way.</p>
        <h3>SEO for Cyber Security Firms Gain a Comprehensive Understanding of Your Target Personalities</h3>
        <p>To sell successfully, we must first identify and assess comprehensive personas and their purchasing journeys, ensuring that content, keywords, on-page, and off-page SEO for Cyber Security Firms methods all function in concert.</p>
        <h3>At the right touch point, we put you in the right light.</h3>
        <p>Before choosing our SEO for Cyber Security Firms product, a decision-maker goes through a lengthy process that includes research, content, and several touch points. Our SEO for Cyber Security Firm work together to find and zero in on them.</p>
        <h3>SEO for Cyber Security Firms well-versed in technology and B2B leads.</h3>
        <p>With the rise in cybercrime and legislation, we keep up to speed on themes as well as our particular customers to assist them to find the greatest organic development prospects.</p>



        </div>
    </div>

    <!-- servicesRatings section started -->
    <?php require "../includes/servicesRating.php"; ?>
    <!-- servicesRatings section ended -->
    <div class="contentHolderSection">
        <div class="content container p-2">
      <h2>SEO is Dynamic</h2>
      <p>The Playbook is updated every month. The cyber city industry is rapidly changing, and as a data-driven firm, we assess and adjust our strategy depending on that data. SEO for Cyber Security Firms shifts allow us to re-align the team and strategy every month.</p>

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
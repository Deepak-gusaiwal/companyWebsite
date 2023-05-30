<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEO Package By Industry</title>

    <!-- cssLinks -->
    <?php
    $pageTitle = "SEO Package By Industry";
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
            "img" => "regionalSeo/local.png",
            "title" => "AI Software and Tools",
            "url" => "/product/seo-for-ai-softwares-tools.php",
        ],
        [
            "img" => "regionalSeo/national.png",
            "title" => "Astrology",
            "url" => "/product/seo-for-astrology-astrologers.php",
        ],
        [
            "img" => "regionalSeo/international.png",
            "title" => "Automobile",
            "url" => "/product/seo-for-automotive-automobile-industry.php",
        ],
        [
            "img" => "regionalSeo/international.png",
            "title" => "Casino",
            "url" => "/product/seo-for-online-casino-websites.php",
        ],
        [
            "img" => "regionalSeo/international.png",
            "title" => "Consultants/Consultancies",
            "url" => "/product/seo-for-consulting-firms.php",
        ],
        [
            "img" => "regionalSeo/international.png",
            "title" => "Coworking Office",
            "url" => "/product/seo-for-co-working-space-companies-agencies-websites.php",
        ],
        [
            "img" => "regionalSeo/international.png",
            "title" => "Cyber Security",
            "url" => "/product/seo-service-packages-for-cyber-security-companies-firms.php",
        ],
        [
            "img" => "regionalSeo/international.png",
            "title" => "Data Recovery",
            "url" => "/product/seo-service-packages-for-data-recovery-company-websites.php",
        ],
        [
            "img" => "regionalSeo/international.png",
            "title" => "Data Science & SAAS",
            "url" => "/product/seo-for-saas.php",
        ],
        [
            "img" => "regionalSeo/international.png",
            "title" => "Dentists",
            "url" => "/product/seo-for-dentists.php",
        ],
        [
            "img" => "regionalSeo/international.png",
            "title" => "eCommerce",
            "url" => "/product/ecommerce-seo-service-packages.php",
        ],
        [
            "img" => "regionalSeo/international.png",
            "title" => "Education",
            "url" => "/product/seo-for-education-institute-websites.php",
        ],
        [
            "img" => "regionalSeo/international.png",
            "title" => "Finance",
            "url" => "/product/seo-for-finance-companies.php",
        ],
        [
            "img" => "regionalSeo/international.png",
            "title" => "Gambling",
            "url" => "/product/seo-for-gambling-industry.php",
        ],
        [
            "img" => "regionalSeo/international.png",
            "title" => "Government",
            "url" => "/product/seo-for-government-agencies.php",
        ],
        [
            "img" => "regionalSeo/international.png",
            "title" => "Healthcare",
            "url" => "/product/seo-for-healthcare-industry.php",
        ],
        [
            "img" => "regionalSeo/international.png",
            "title" => "Home Roofing Companies",
            "url" => "/product/seo-for-roofing-companies.php",
        ],
        [
            "img" => "regionalSeo/international.png",
            "title" => "Home Renovator Companies",
            "url" => "/product/seo-for-home-renovators.php",
        ],
        [
            "img" => "regionalSeo/international.png",
            "title" => "Home Improvement Companies",
            "url" => "/product/seo-for-home-improvement-companies.php",
        ],
        [
            "img" => "regionalSeo/international.png",
            "title" => "Hotels",
            "url" => "/product/seo-for-hotel-websites.php",
        ],
        [
            "img" => "regionalSeo/international.png",
            "title" => "Insurance",
            "url" => "/product/seo-for-insurance-companies.php",
        ],
        [
            "img" => "regionalSeo/international.png",
            "title" => "Computers & IT",
            "url" => "/product/seo-for-it-companies.php",
        ],
        [
            "img" => "regionalSeo/international.png",
            "title" => "Law Firms",
            "url" => "/product/seo-for-lawyers-law-firms.php",
        ],
        [
            "img" => "regionalSeo/international.png",
            "title" => "Logistics",
            "url" => "/product/seo-for-logistics-companies.php",
        ],
        [
            "img" => "regionalSeo/international.png",
            "title" => "Manufacturers",
            "url" => "/product/seo-for-manufacturing-companies.php",
        ],
        [
            "img" => "regionalSeo/international.png",
            "title" => "Market Research",
            "url" => "/product/seo-for-market-analysis-research-companies.php",
        ],
        [
            "img" => "regionalSeo/international.png",
            "title" => "Movers And Packers",
            "url" => "/product/seo-for-movers-and-packers.php",
        ],
        [
            "img" => "regionalSeo/international.png",
            "title" => "Pet Groomers",
            "url" => "/product/pet-grooming-care-industry-seo-packages-india.php",
        ],
        [
            "img" => "regionalSeo/international.png",
            "title" => "Politicians",
            "url" => "/product/seo-for-politicians.php",
        ],
        [
            "img" => "regionalSeo/international.png",
            "title" => "Real Estate",
            "url" => "/product/seo-for-real-estate-agents.php",
        ],
        [
            "img" => "regionalSeo/international.png",
            "title" => "Restaurants",
            "url" => "/product/seo-for-restaurants.php",
        ],
        [
            "img" => "regionalSeo/international.png",
            "title" => "Satta Matka",
            "url" => "/product/seo-for-satta-matka-industry-website.php",
        ],
        [
            "img" => "regionalSeo/international.png",
            "title" => "Software",
            "url" => "/product/seo-for-software-companies-and-firms.php",
        ],
        [
            "img" => "regionalSeo/international.png",
            "title" => "Sportsbook",
            "url" => "/product/sportsbook-seo-services-and-packages.php",
        ],
        [
            "img" => "regionalSeo/international.png",
            "title" => "Trading/Traders",
            "url" => "/product/seo-for-trading-companies.php",
        ],
        [
            "img" => "regionalSeo/international.png",
            "title" => "Transportation",
            "url" => "/product/seo-for-transportation-companies.php",
        ],
        [
            "img" => "regionalSeo/international.png",
            "title" => "Travel Agency",
            "url" => "/product/seo-for-travel-agency-website.php",
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
            <h1 class="commonTitle text-center mt-2"> All
                <?php echo $pageTitle; ?>
            </h1>

            <div class="row">
                <?php foreach ($AllProducts as $data): ?>
                    <div class="col-md-3 col-sm-6 productCardCol">
                        <div class="singleProductCard">
                            <div class="imgBox">
                                <a href="<?php echo $data['url'] ?>">
                                    <img src="../assets/img/product/<?php echo $data['img'] ?>" alt="">
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
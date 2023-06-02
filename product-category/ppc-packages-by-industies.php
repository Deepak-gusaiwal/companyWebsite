<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPC Package By Industry</title>

    <!-- cssLinks -->
    <?php
    $pageTitle = "PPC Package By Industry";
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
            "url" => "/product/google-ads-packages-for-ai-software-and-tools.php",
        ],
        [
            "img" => "regionalSeo/local.png",
            "title" => "Astrology",
            "url" => "/product/google-ads-packages-for-astrology-astrologers.php",
        ],
        [
            "img" => "regionalSeo/local.png",
            "title" => "Automobile",
            "url" => "/product/google-ads-packages-for-automotive-automobile-industry.php",
        ],
        [
            "img" => "regionalSeo/local.png",
            "title" => "Casino",
            "url" => "/product/google-ads-packages-for-online-casino-websites.php",
        ],
        [
            "img" => "regionalSeo/local.png",
            "title" => "Consultants/Consultancies",
            "url" => "/product/google-ads-packages-for-consulting-firms.php",
        ],
        [
            "img" => "regionalSeo/local.png",
            "title" => "Coworking Office",
            "url" => "/product/google-ads-packages-for-co-working-space-companies-agencies-websites.php",
        ],
        [
            "img" => "regionalSeo/local.png",
            "title" => "Cyber Security",
            "url" => "/product/google-ads-packages-for-cyber-security-companies-firms.php",
        ],
        [
            "img" => "regionalSeo/local.png",
            "title" => "Data Recovery",
            "url" => "/product/google-ads-packages-for-data-recovery.php",
        ],
        [
            "img" => "regionalSeo/local.png",
            "title" => "Data Science & SAAS",
            "url" => "/product/google-ads-packages-for-saas.php",
        ],
        [
            "img" => "regionalSeo/local.png",
            "title" => "Dentists",
            "url" => "/product/google-ads-packages-for-dentists.php",
        ],
        [
            "img" => "regionalSeo/local.png",
            "title" => "eCommerce",
            "url" => "/product/google-ads-packages-for-ecommerce-websites-stores.php",
        ],
        [
            "img" => "regionalSeo/local.png",
            "title" => "Education",
            "url" => "/product/google-ads-packages-for-education-institute.php",
        ],
        [
            "img" => "regionalSeo/local.png",
            "title" => "Finance",
            "url" => "/product/google-ads-packages-for-finance-companies.php",
        ],
        [
            "img" => "regionalSeo/local.png",
            "title" => "Gambling",
            "url" => "/product/google-ads-packages-for-gambling.php",
        ],
        [
            "img" => "regionalSeo/local.png",
            "title" => "Government",
            "url" => "/product/google-ads-packages-for-government-agencies.php",
        ],
        [
            "img" => "regionalSeo/local.png",
            "title" => "Healthcare",
            "url" => "/product/google-ads-packages-for-healthcare-industry.php",
        ],
        [
            "img" => "regionalSeo/local.png",
            "title" => "Homebuilders",
            "url" => "/product/google-ads-packages-for-homebuilders.php",
        ],
        [
            "img" => "regionalSeo/local.png",
            "title" => "Hotels",
            "url" => "/product/google-ads-packages-for-hotel-websites.php",
        ],
        [
            "img" => "regionalSeo/local.png",
            "title" => "Insurance",
            "url" => "/product/google-ads-packages-for-insurance-companies.php",
        ],
        [
            "img" => "regionalSeo/local.png",
            "title" => "Computers & IT",
            "url" => "/product/google-ads-packages-for-computers-it.php",
        ],
        [
            "img" => "regionalSeo/local.png",
            "title" => "Law Firms",
            "url" => "/product/google-ads-packages-for-lawyers-law-firms.php",
        ],
        [
            "img" => "regionalSeo/local.png",
            "title" => "Logistics",
            "url" => "/product/google-ads-packages-for-logistics.php",
        ],
        [
            "img" => "regionalSeo/local.png",
            "title" => "Manufacturers",
            "url" => "/product/google-ads-packages-for-manufacturing-companies.php",
        ],
        [
            "img" => "regionalSeo/local.png",
            "title" => "Market Research",
            "url" => "/product/google-ads-packages-for-market-research.php",
        ],
        [
            "img" => "regionalSeo/local.png",
            "title" => "Movers And Packers",
            "url" => "/product/google-ads-packages-for-movers-and-packers.php",
        ],
        [
            "img" => "regionalSeo/local.png",
            "title" => "Pet Groomers",
            "url" => "/product/google-ads-packages-for-pet-groomers.php",
        ],
        [
            "img" => "regionalSeo/local.png",
            "title" => "Politicians",
            "url" => "/product/google-ads-packages-for-politicians.php",
        ],
        [
            "img" => "regionalSeo/local.png",
            "title" => "Real Estate",
            "url" => "/product/google-ads-packages-for-real-estate-agents.php",
        ],
        [
            "img" => "regionalSeo/local.png",
            "title" => "Restaurants",
            "url" => "/product/google-ads-packages-for-restaurants.php",
        ],
        [
            "img" => "regionalSeo/local.png",
            "title" => "Satta Matka",
            "url" => "/product/google-ads-packages-for-satta-matka-industry-website.php",
        ],
        [
            "img" => "regionalSeo/local.png",
            "title" => "Software",
            "url" => "/product/google-ads-packages-for-software-companies-and-firms.php",
        ],
        [
            "img" => "regionalSeo/local.png",
            "title" => "Sportsbook",
            "url" => "/product/google-ads-packages-for-sportsbook.php",
        ],
        [
            "img" => "regionalSeo/local.png",
            "title" => "Trading/Traders",
            "url" => "/product/google-ads-packages-for-trading-companies.php",
        ],
        [
            "img" => "regionalSeo/local.png",
            "title" => "Transportation",
            "url" => "/product/google-ads-packages-for-transportation-companies.php",
        ],
        [
            "img" => "regionalSeo/local.png",
            "title" => "Travel Agency",
            "url" => "/product/google-ads-packages-for-travel-agency-website.php",
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
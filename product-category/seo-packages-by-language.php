<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEO Package By Language</title>

    <!-- cssLinks -->
    <?php
    $pageTitle = "SEO Package By Language";
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
            "title" => "French Language",
            "url" => "/product/seo-packages-for-french-language.php",
            "priceRange"=>"10000-20000"
        ],
        [
            "img" => "regionalSeo/local.png",
            "title" => "German Language",
            "url" => "/product/seo-packages-for-german-language.php",
            "priceRange"=>"10000-20000"
        ],
        [
            "img" => "regionalSeo/local.png",
            "title" => "Dutch Language",
            "url" => "/product/seo-packages-for-dutch-language.php",
            "priceRange"=>"10000-20000"
        ],
        [
            "img" => "regionalSeo/local.png",
            "title" => "Spanish Language",
            "url" => "/product/seo-packages-for-spanish.php",
            "priceRange"=>"10000-20000"
        ],
        [
            "img" => "regionalSeo/local.png",
            "title" => "Russian Language",
            "url" => "/product/seo-packages-for-russian-language.php",
            "priceRange"=>"10000-20000"
        ],
        [
            "img" => "regionalSeo/local.png",
            "title" => "danish Language",
            "url" => "/product/seo-packages-for-danish-denmark-language.php",
            "priceRange"=>"10000-20000"
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
            <h1 class="commonTitle text-center mt-2"> All <?php echo $pageTitle; ?></h1>

            <div class="row">
                <?php foreach ($AllProducts as $data): ?>
                    <div class="col-md-4 col-sm-6 productCardCol">
                        <div class="singleProductCard">
                            <div class="imgBox">
                                <a href="<?php echo $data['url'] ?>">
                                    <img src="../assets/img/product/<?php echo $data['img'] ?>" alt="">
                                </a>

                            </div>
                            <h2 class="text-capitalize">
                                <a href="<?php echo $data['url'] ?>">
                                <?php echo $data['title'] ?> SEO
                            </a>
                            </h2>
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
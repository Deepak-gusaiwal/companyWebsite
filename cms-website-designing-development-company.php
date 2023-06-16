<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>cms Website development</title>

    <!-- cssLinks -->
    <?php
    $pageTitle = "cms Website development";
    $categoryTitle = "web development";
    $categoryUrl = "/product-category/website-designing-development-packages.php";
    $subCategory="non-ecommerce website";
    $subCategoryUrl="/product-category/non-ecommerce-website-designing-packages.php";
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
<h2 class="text-capitalize"><?php echo $pageTitle; ?></h2>

        </div>
    </div>




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





   
    <!-- footer started -->
    <?php require "./includes/footer.php"; ?>
    <!-- footer ended -->



    <!-- jsLinks -->
    <?php require "./includes/jsLinks.php"; ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEO Specialists India</title>

    <!-- cssLinks -->
    <?php
    $pageTitle = "SEO Specialists India";
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



    <div class="contentHolderSection pb-2">
        <div class="container ">
            <div class="bannerSection BottomBorder">
                <h1>
                    <?php echo $pageTitle; ?>
                </h1>
            </div>

            <!-- <div class="content">
                
            </div> -->


        </div>
    </div>

    <!-- contactSetion started -->
    <?php require "./includes/contactSection.php"; ?>
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
            <?php require "./includes/Products/otherServices.php"; ?>
        </div>
    </div>
    <!-- other Services Section ended -->

    <!-- <div class="contentHolderSection pb-2">
        <div class="container ">
            <div class="content">
          
            </div>
        </div>
    </div> -->




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
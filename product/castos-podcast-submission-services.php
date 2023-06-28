<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>castos-podcast-submissions</title>

    <!-- cssLinks -->
    <?php
    $pageTitle = "castos Podcast submissions";
    $categoryTitle = "podcast";
    $categoryUrl = "/seo-podcast-submission-services-india.php";
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



    <!-- podcaste container section started -->

    <div class="row flex-md-row-reverse podcastContainer my-2">


        <div class="col-md-8 podcasteRight py-3">
            <div class="contentBox d-flex flex-column align-items-md-start align-items-center">
                <h1><?php echo $pageTitle; ?></h1>
                <h2>Contact Us for Podcast Submissions</h2>
                <div class="descriptionSection">
                    <h3>Description</h3>
                    <p>With Castos, every podcast you publish gets its own responsive website, making it easy for your audience to subscribe, search episodes, and connect with you on social media.</p>
                </div>
                <div class="contactBox my-3">
                    <?php require "../includes/Helpers/productButtonGroup.php"; ?>
                </div>
            </div>
        </div>
        <div class="col-md-4  d-flex justify-content-center align-items-center mt-md-0 mt-3">
            <div class="podcastImgBox">
                <img src="../assets/img/podcast/castos.webp" alt="castos.webp">
            </div>
        </div>
    </div>
    <!-- podcaste container section ended -->



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

<!-- 
    <div class="contentHolderSection">
        <div class="content container p-2">
          

        </div>
    </div> -->



  <!-- popular podcasts started-->
  <?php require "../includes/popularPodcast.php"; ?>
    <!-- popular podcast ended -->
    <!-- footer started -->
    <?php require "../includes/footer.php"; ?>
    <!-- footer ended -->

    <!-- jsLinks -->
    <?php require "../includes/jsLinks.php"; ?>
</body>

</html>
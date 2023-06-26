<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>what is ppc?</title>

    <!-- cssLinks -->
    <?php
    $pageTitle = "what is PPC?";
    $categoryTitle = "Blog";
    $categoryUrl = "/blog";
    $subCategory = "PPC";
    $subCategoryUrl = "/blog/ppc.php";
    $isProductPage = true;
    require "../includes/cssLinks.php";
    ?>
</head>

<body>
    <!-- include blog data -->
    <?php require "./helpers/blogData.php"; ?>
    <!-- header Section Starteed -->
    <?php require "../includes/header.php"; ?>
    <!-- header Section Ended -->

    <!-- breadCrumb started -->
    <?php require "../includes/breadCrumb.php"; ?>
    <!-- breadCrumb ended -->

    <!-- blogwrapperSection started -->
    <div class="blogwrapper container">
        <div class="row">


            <div class="blogContent col-md-9">

                <div class="blogContentContainer">
                    <h2 class="titleBanner">
                        <?php echo $pageTitle; ?>
                    </h2>
                    <div class="featuredImageBox">
                        <img src="./img/ppc/1.png" alt="blog images">
                    </div>
                    <div class="blogContentHolder">
                        <h1>
                            What is PPC?</h1>
                        <p>
                            Hey, their folks! It&rsquo;s great to have you back on this digital marketing adventure. So,
                            you might have heard whispers about the mighty PPC, haven&#39;t you?? Well, whether you have
                            heard about it or not, allow me to give you more insight into PPC.</p>
                        <p>
                            If I tell you that PPC is a game changer for businesses that are looking to supercharge
                            their growth, will you believe me?</p>
                        <p>
                            <strong>There is so much to discover in this adventure. Let me show you!</strong>
                        </p>
                        <p>
                            PPC stands for &quot;Pay Per Click,&quot; and it&rsquo;s a powerful advertising model that
                            can take your business to new heights. If you want more leads for your business, PPC ads are
                            a great way to go. Basically, it&#39;s a digital advertising model where you pay a fee every
                            time someone clicks on your ad. It&#39;s a cost-effective way to drive visitors to your
                            website, and if done right, the benefits can be phenomenal!</p>
                        <p>
                            To make it easier, let&rsquo;s say you own a business website that you need to grow in this
                            online world. SEO might look like an affordable option for this venture. But getting results
                            takes time with SEO. If you have the time to survive in the market until you start getting
                            organic results, you can go for this practice. Otherwise, PPC is another way you can choose
                            to get the expected results.</p>

                    </div>
                </div>



            </div>
            <!-- blogSidebarSection -->
            <?php require "./includes/blogSidebarSection.php"; ?>

        </div>

        <!-- recent Blogs -->
        <?php require "./includes/recentBlogSection.php"; ?>
    </div>
    <!-- blogwrapperSection ended -->




    <!-- <div class="contentHolderSection">
        <div class="content container p-2">


        </div>
    </div> -->



    <!-- contactSetion started -->
    <?php require "../includes/contactSection.php"; ?>
    <!-- contactSetion ended -->



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
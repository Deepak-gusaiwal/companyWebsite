<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>What are Google Ads?</title>

    <!-- cssLinks -->
    <?php
    $pageTitle = "What are Google Ads?";
    $categoryTitle = "Blog";
    $categoryUrl = "/blog";
    $subCategory = "google Ads";
    $subCategoryUrl = "/blog/google-ads.php";
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
                        <img src="./img/googleads/1.png" alt="blog images">
                    </div>
                    <div class="blogContentHolder">
                        <h1>
                            What are Google Ads?</h1>
                        <p>
                            So, you know Google Ads, right? It&rsquo;s an amazing tool that lets you advertise your
                            business or yourself online. Basically, Google ads is a Pay Per Click (PPC) service of
                            Google which helps website owners looking for ways to increase their website&rsquo;s online
                            visibility and reach more potential customers. You can show your ads to millions of people
                            who use Google every day. Seriously, we&#39;re talking about Google&#39;s massive network of
                            websites, including search results, YouTube videos, mobile apps, and even partner websites.
                        </p>
                        <p>
                            With Google Ads, you have many options to run ads that will boost your profile&rsquo;s
                            visibility. These are some of the google ads you can pick from:</p>
                        <ul>
                            <li>
                                <strong>Search Ads:</strong> Show up on Google when someone searches for relevant keywords</li>
                            <li>
                                <strong>Display Ads:</strong> Show up on other websites that are part of the Google network</li>
                            <li>
                                <strong>Shopping Ads:</strong> Show your products with images and prices on Google Shopping or other
                                sites</li>
                            <li>
                                <strong>YouTube Ads:</strong> Show your videos before, during, or after other YouTube videos</li>
                        </ul>
                        <h2>
                            Why Google Ads is Like Having Your Own Marketing Superhero?</h2>
                        <p>
                            The whole point of Google Ads is to help businesses reach the right people and promote their
                            awesome products or services in the most effective way possible. With Google Ads,
                            advertisers can get creative and make all kinds of ads: text-based, image-based, video ads,
                            or even interactive ads. And the best part? Advertisers have total control over their
                            campaigns, like picking their target audience, setting their ad budgets, and choosing the
                            perfect ad formats. It&#39;s like having your own marketing superhero!</p>


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
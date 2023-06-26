<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>what is on page seo?</title>

    <!-- cssLinks -->
    <?php
    $pageTitle = "what is on page seo?";
    $categoryTitle = "Blog";
    $categoryUrl = "/blog";
    $subCategory = "SEO";
    $subCategoryUrl = "/blog/seo.php";
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
                        <img src="./img/seo/3.png" alt="blog images">
                    </div>
                    <div class="blogContentHolder">
                        <h1>
                            What is On-Page SEO?</h1>
                        <p>
                            On-page SEO is like giving your website a superpower! It&rsquo;s all about optimizing the
                            content on your website itself, like using the right targeted keywords and making sure
                            everything looks spick and span. These keyword research studies help you understand your
                            users search intent. These Keywords are just like finding the magic wand that will help you
                            make your website stand out to Search Engines.</p>
                        <p>
                            But let&rsquo;s understand that On-page SEO is not all about words. We also need to make
                            sure your website is technically sound. That means fixing any issues that might be holding
                            it back from ranking higher. You can just think of it just like tidying up your
                            website&rsquo;s house so that Search Engines can easily navigate and understand what
                            it&rsquo;s all about.</p>
                        <h2>
                            Perfecting the Ingredients for Success</h2>
                        <p>
                            On-Page SEO is a perfect blend of content and codes, just like having a secret recipe for
                            success! It&rsquo;s all about fine-tuning various elements on your website or webpage to
                            make it irresistible to Search Engines and users alike. Let&rsquo;s break down these
                            ingredients and make them even more appetizing:</p>
                        <ul>
                            <li>
                                Content</li>
                            <li>
                                Meta Tags</li>
                            <li>
                                Title Tags</li>
                            <li>
                                Headings</li>
                            <li>
                                URLs</li>
                            <li>
                                Internal Linking</li>
                            <li>
                                Images</li>
                        </ul>
                        <p>
                            So, now get ready to learn more about all these ingredients thoroughly, So that you can
                            bring more organic reach to your website.</p>

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
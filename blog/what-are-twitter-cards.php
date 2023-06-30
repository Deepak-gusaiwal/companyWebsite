<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>What are Twitter Cards?</title>

    <!-- cssLinks -->
    <?php
    $pageTitle = "What are Twitter Cards?";
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
                        <img src="./img/seo/6.png" alt="6.png">
                    </div>
                    <div class="blogContentHolder">
                        <h1>
                            What are Twitter Cards?</h1>
                        <p>
                            Have you ever seen a tweet that has a photo, video, or some extra info attached to it?
                            That&rsquo;s a Twitter card. A Twitter Card is like a multimedia upgrade for your tweets.
                            When you include a website URL in your tweet and have a &quot;twitter:card&quot; meta tag in
                            the header of your site, Twitter automatically adds a Twitter Card to your tweet. This meta
                            tag specifies the type of Twitter Card you want to display, giving your tweet a visual boost
                            with multimedia content.</p>
                        <p>
                            It&rsquo;s a cool feature, right? Twitter cards will make your tweets look better and do
                            more. For example, if you share a link to a website, article, product, or anything online,
                            you can use a Twitter card to show a preview or summary of what you&rsquo;re sharing. That
                            way, people can see what it&rsquo;s about and get interested in clicking on it.</p>
                        <p>
                            Twitter cards can have different things on them, like a title, description, image, or even
                            buttons or controls that let you do stuff. It depends on what kind of card you use and how
                            you set it up. There are different types of cards for different kinds of content. Some of
                            the common ones are summary cards, photo cards, gallery cards, video cards, and app cards.
                            They all have their own look and feel.</p>
                        <p>
                            <strong>There are mainly four types of Twitter Cards. Here is a list of them:</strong>
                        </p>
                        <ul>
                            <li>
                                <a href="/blog/what-is-a-summary-twitter-card.php">Summary Card</a>
                            </li>
                            <li>
                                <a href="/blog/what-is-large-photo-summary-card.php">Large Photo Summary Card</a>
                            </li>
                            <li>
                                <a href="/blog/what-is-player-card.php">Player Card</a>
                            </li>
                            <li>
                                <a href="/blog/what-is-twitter-app-card.php"> App Card</a>
                            </li>

                            
                        </ul>
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
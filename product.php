<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>

    <!-- cssLinks -->
    <?php
    $pageTitle = "Ecommerce SEO";
    $categoryTitle = "Industry Packages";
    $categoryUrl = "categoryPageUrl";
    require "./includes/cssLinks.php"; ?>
</head>

<body>
    <!-- header Section Starteed -->
    <?php require "./includes/header.php"; ?>
    <!-- header Section Ended -->

    <!-- breadCrumb started -->
    <?php require "./includes/breadCrumb.php"; ?>
    <!-- breadCrumb ended -->



    <div class="productImagePreviewBox">
    <i class="fa fa-times" aria-hidden="true"></i>
    </div>

    <!-- productDetails started -->
    <div class="productPageContainer my-2">
        <div class="container packagesContainer">
            <div class="productBanner mb-2">
                <h1>
                    <?php echo $pageTitle; ?>
                </h1>
                <span class="productPriceRange">
                    (₹12,000.00 – ₹72,000.00)
                </span>
            </div>


            <div class="packagesTabs">
                <button data-filter="localPackage" class="packageTab active">Local Package</button>
                <button data-filter="nationalPackage" class="packageTab">National Package</button>
                <button data-filter="interNatinalPackage" class="packageTab">International Pakage</button>
            </div>

            <div class="PackagesTabsDataContainer">

                <!-- local Packages Section started -->

                <div class="localPackage PackagesTabsData active">
                    <h4>Choose An Option (Local Packages)</h4>

                    <div class="keywordAccordionContainer">

                        <!-- accordion started -->
                        <div class="keywordAccordion">
                            <div class="keywordAccordionHead">
                                <span><i class="fa fa-plus" aria-hidden="true"></i></span>
                                <span>1-10</span>
                                <span class="accordionPrice">
                                    (
                                    ₹12,000.00
                                    <sup>+ 18% GST</sup>
                                    )
                                </span>
                            </div>

                            <div class="keywordAccordionBody">
                                <div class="contentBox">
                                    <span>Number of Monthly Backlinks = 70 + Advanced On-Page SEO
                                        Activities</span>
                                    <h4>Description</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur sit, illo,
                                        officia pariatur sunt minima sequi dolor, ipsum voluptatem ut excepturi eos
                                        quasi
                                        magnam suscipit. Enim, voluptatibus commodi suscipit repellendus repellat error
                                        atque fugit eius eligendi similique libero, voluptatem dicta, sed aperiam
                                        incidunt
                                        quas nihil quos sit voluptates nostrum quia.</p>
                                    <?php require "./includes/Helpers/productButtonGroup.php"; ?>
                                </div>
                                <div class="imgBox">
                                    <img src="./assets/img/product/product-1.webp" alt="product Image">
                                </div>
                            </div>
                        </div>
                        <!-- accordion ended -->

                        <!-- accordion started -->
                        <div class="keywordAccordion">
                            <div class="keywordAccordionHead">
                                <span><i class="fa fa-plus" aria-hidden="true"></i></span>
                                <span>1-10</span>
                                <span class="accordionPrice">
                                    (
                                    ₹12,000.00
                                    <sup>+ 18% GST</sup>
                                    )
                                </span>
                            </div>

                            <div class="keywordAccordionBody">
                                <div class="contentBox">
                                    <span>Number of Monthly Backlinks = 70 + Advanced On-Page SEO
                                        Activities</span>
                                    <h4>Description</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur sit, illo,
                                        officia pariatur sunt minima sequi dolor, ipsum voluptatem ut excepturi eos
                                        quasi
                                        magnam suscipit. Enim, voluptatibus commodi suscipit repellendus repellat error
                                        atque fugit eius eligendi similique libero, voluptatem dicta, sed aperiam
                                        incidunt
                                        quas nihil quos sit voluptates nostrum quia.</p>
                                    <?php require "./includes/Helpers/productButtonGroup.php"; ?>
                                </div>
                                <div class="imgBox">
                                    <img src="./assets/img/product/product-1.webp" alt="product Image">
                                </div>
                            </div>
                        </div>
                        <!-- accordion ended -->


                    </div>

                </div>
                <!-- local Packages Section ended -->

                <!-- national Packages Section started -->
                <div class="nationalPackage PackagesTabsData">
                    <h4>Choose An Option (National Packages)</h4>

                    <div class="keywordAccordionContainer">

                        <!-- accordion started -->
                        <div class="keywordAccordion">
                            <div class="keywordAccordionHead">
                                <span><i class="fa fa-plus" aria-hidden="true"></i></span>
                                <span>1-10</span>
                                <span class="accordionPrice">
                                    (
                                    ₹12,000.00
                                    <sup>+ 18% GST</sup>
                                    )
                                </span>
                            </div>

                            <div class="keywordAccordionBody">
                                <div class="contentBox">
                                    <span>Number of Monthly Backlinks = 70 + Advanced On-Page SEO
                                        Activities</span>
                                    <h4>Description</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur sit, illo,
                                        officia pariatur sunt minima sequi dolor, ipsum voluptatem ut excepturi eos
                                        quasi
                                        magnam suscipit. Enim, voluptatibus commodi suscipit repellendus repellat error
                                        atque fugit eius eligendi similique libero, voluptatem dicta, sed aperiam
                                        incidunt
                                        quas nihil quos sit voluptates nostrum quia.</p>
                                    <?php require "./includes/Helpers/productButtonGroup.php"; ?>
                                </div>
                                <div class="imgBox">
                                    <img src="./assets/img/product/product-1.webp" alt="product Image">
                                </div>
                            </div>
                        </div>
                        <!-- accordion ended -->

                        
                        <!-- accordion started -->
                        <div class="keywordAccordion">
                            <div class="keywordAccordionHead">
                                <span><i class="fa fa-plus" aria-hidden="true"></i></span>
                                <span>1-10</span>
                                <span class="accordionPrice">
                                    (
                                    ₹12,000.00
                                    <sup>+ 18% GST</sup>
                                    )
                                </span>
                            </div>

                            <div class="keywordAccordionBody">
                                <div class="contentBox">
                                    <span>Number of Monthly Backlinks = 70 + Advanced On-Page SEO
                                        Activities</span>
                                    <h4>Description</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur sit, illo,
                                        officia pariatur sunt minima sequi dolor, ipsum voluptatem ut excepturi eos
                                        quasi
                                        magnam suscipit. Enim, voluptatibus commodi suscipit repellendus repellat error
                                        atque fugit eius eligendi similique libero, voluptatem dicta, sed aperiam
                                        incidunt
                                        quas nihil quos sit voluptates nostrum quia.</p>
                                    <?php require "./includes/Helpers/productButtonGroup.php"; ?>
                                </div>
                                <div class="imgBox">
                                    <img src="./assets/img/product/product-1.webp" alt="product Image">
                                </div>
                            </div>
                        </div>
                        <!-- accordion ended -->

                    </div>
                </div>
                <!-- national Packages Section ended -->

                <!-- international Packages Section started -->
                <div class="interNatinalPackage PackagesTabsData">
                    <h4>Choose An Option (International Packages)</h4>

                    <div class="keywordAccordionContainer">

                    
                        <!-- accordion started -->
                        <div class="keywordAccordion">
                            <div class="keywordAccordionHead">
                                <span><i class="fa fa-plus" aria-hidden="true"></i></span>
                                <span>1-10</span>
                                <span class="accordionPrice">
                                    (
                                    ₹12,000.00
                                    <sup>+ 18% GST</sup>
                                    )
                                </span>
                            </div>

                            <div class="keywordAccordionBody">
                                <div class="contentBox">
                                    <span>Number of Monthly Backlinks = 70 + Advanced On-Page SEO
                                        Activities</span>
                                    <h4>Description</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur sit, illo,
                                        officia pariatur sunt minima sequi dolor, ipsum voluptatem ut excepturi eos
                                        quasi
                                        magnam suscipit. Enim, voluptatibus commodi suscipit repellendus repellat error
                                        atque fugit eius eligendi similique libero, voluptatem dicta, sed aperiam
                                        incidunt
                                        quas nihil quos sit voluptates nostrum quia.</p>
                                    <?php require "./includes/Helpers/productButtonGroup.php"; ?>
                                </div>
                                <div class="imgBox">
                                    <img src="./assets/img/product/product-1.webp" alt="product Image">
                                </div>
                            </div>
                        </div>
                        <!-- accordion ended -->

                        
                        <!-- accordion started -->
                        <div class="keywordAccordion">
                            <div class="keywordAccordionHead">
                                <span><i class="fa fa-plus" aria-hidden="true"></i></span>
                                <span>1-10</span>
                                <span class="accordionPrice">
                                    (
                                    ₹12,000.00
                                    <sup>+ 18% GST</sup>
                                    )
                                </span>
                            </div>

                            <div class="keywordAccordionBody">
                                <div class="contentBox">
                                    <span>Number of Monthly Backlinks = 70 + Advanced On-Page SEO
                                        Activities</span>
                                    <h4>Description</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur sit, illo,
                                        officia pariatur sunt minima sequi dolor, ipsum voluptatem ut excepturi eos
                                        quasi
                                        magnam suscipit. Enim, voluptatibus commodi suscipit repellendus repellat error
                                        atque fugit eius eligendi similique libero, voluptatem dicta, sed aperiam
                                        incidunt
                                        quas nihil quos sit voluptates nostrum quia.</p>
                                    <?php require "./includes/Helpers/productButtonGroup.php"; ?>
                                </div>
                                <div class="imgBox">
                                    <img src="./assets/img/product/product-1.webp" alt="product Image">
                                </div>
                            </div>
                        </div>
                        <!-- accordion ended -->
                        
                    </div>
                </div>
                <!-- international Packages Section ended -->





            </div>




        </div>


    </div>
    <!-- productDetails ended -->

    <!-- footer started -->
    <?php require "./includes/footer.php"; ?>
    <!-- footer ended -->
    <!-- jsLinks -->
    <?php require "./includes/jsLinks.php"; ?>
</body>

</html>
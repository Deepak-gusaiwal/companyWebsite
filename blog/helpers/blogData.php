<?php
// =========================================blog Category Arr
$blogCategoryArr = [
    [
        "img" => "seo.png",
        "url" => "seo.php",
        "title" => "Search Engine Optimization"
    ],
    [
        "img" => "ppc.png",
        "url" => "ppc.php",
        "title" => "pay per click"
    ],
    [
        "img" => "sem.png",
        "url" => "sem.php",
        "title" => "Search Engine Marketing"
    ],
    [
        "img" => "contentmarketing.png",
        "url" => "content-marketing.php",
        "title" => "content marketing"
    ],
    [
        "img" => "appstore.png",
        "url" => "aso.php",
        "title" => "App Store Optimization"
    ],
    [
        "img" => "googlealgo.png",
        "url" => "google-algorithum-updates.php",
        "title" => "Google Algorithum Updates"
    ],
    [
        "img" => "webtechnology.png",
        "url" => "web-technologies.php",
        "title" => "Web Technologies"
    ],
];


?>

<!-- particular category array -->
<?php

$seoCategoryName = 'seo';
$ppcCategoryName="ppc";
$semCategoryName="sem";
$contentMarketCategoryName="content marketing";
$asoCategoryName="aso";
$googleAlgorithumUpdatesCategoryName="google algorithum updates";
$webTechnologiesCategoryName="web Technologies";

// All Blogs
$blogs = [
    [   "category"=>"$seoCategoryName",
        "img" => "seo/1.png",
        "url" => "what-is-seo.php",
        "date"=>"16 june 2023",
        "title" => "what is SEO ?",
        "excerpt" => "Hey there, folks! Let's have a little chat about SEO and discover why it’s such a big deal in the online world, shall we?"
    ],
    [   "category"=>"$seoCategoryName",
        "img" => "seo/2.png",
        "url" => "what-is-off-page-seo.php",
        "date"=>"17 june 2023",
        "title" => "what is off-page seo?",
        "excerpt" => "Off-page SEO is like venturing into the vast digital world beyond your website&rsquo;s
        borders to boost your Search Engine Rankings and increase "
    ],
    [   "category"=>"$seoCategoryName",
        "img" => "seo/3.png",
        "url" => "what-is-on-page-seo.php",
        "date"=>"18 june 2023",
        "title" => "what is on-page seo?",
        "excerpt" => "On-page SEO is like giving your website a superpower! It’s all about optimizing the content on your website itself, like using the right "
    ],
    [   "category"=>"$semCategoryName",
        "img" => "sem/1.png",
        "url" => "what-are-google-ads.php",
        "date"=>"19 june 2023",
        "title" => "What are Google Ads?",
        "excerpt" => "So, you know Google Ads, right? It’s an amazing tool that lets you advertise your business or yourself online. Basically "
    ],
    [   "category"=>"$ppcCategoryName",
        "img" => "ppc/1.png",
        "url" => "what-is-ppc.php",
        "date"=>"20 june 2023",
        "title" => "What is PPC?",
        "excerpt" => "Hey, their folks! It’s great to have you back on this digital marketing adventure. So, you might have heard whispers about the mighty PPC "
    ],
    [   "category"=>"$ppcCategoryName",
        "img" => "ppc/2.png",
        "url" => "how-does-ppc-works.php",
        "date"=>"21 june 2023",
        "title" => "how does PPC works?",
        "excerpt" => "Absolutely! You’ve hit the nail on the head. PPC is like having the power to create compelling ads that capture the attention of your "
    ],
   
];
?>
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
    [
        "img" => "googleads.png",
        "url" => "google-ads.php",
        "title" => "Google Ads"
    ],
    [
        "img" => "youtube.png",
        "url" => "youtube.php",
        "title" => "YouTube"
    ],
];


?>

<?php

$seoCategoryName = 'seo';
$ppcCategoryName="ppc";
$semCategoryName="sem";
$contentMarketCategoryName="content marketing";
$asoCategoryName="aso";
$googleAlgorithumUpdatesCategoryName="google algorithum updates";
$webTechnologiesCategoryName="web Technologies";
$googleAdsCategoryName="Google Ads";
$youtubeCategoryName="youtube";

// All Blogs
$blogs = [
    // ===============SEO=================
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
    [   "category"=>"$seoCategoryName",
        "img" => "seo/4.png",
        "url" => "google-generative-ai-a-helpful-feature-for-local-business-owners.php",
        "date"=>"28 june 2023",
        "title" => "Google’s Generative AI..?",
        "excerpt" => "Generative AI, the upcoming breakthrough technology, is set to revolutionize the landscape for local business owners, providing them  "
    ],
    [   "category"=>"$seoCategoryName",
        "img" => "seo/5.png",
        "url" => "what-is-a-canonical-tag-and-how-does-it-help-seo.php",
        "date"=>"29 june 2023",
        "title" => "What Is a Canonical Tag..?",
        "excerpt" => "A canonical tag, also known as &quot;rel canonical,&quot; is an HTML tag used in SEO (Search Engine Optimization) to indicate to search  "
    ],
    [   "category"=>"$seoCategoryName",
        "img" => "seo/6.png",
        "url" => "what-are-twitter-cards.php",
        "date"=>"29 june 2023",
        "title" => "What are Twitter Cards?",
        "excerpt" => "Have you ever seen a tweet that has a photo, video, or some extra info attached to it? That’s a Twitter card. A Twitter Card is like a multimedia   "
    ],
    [   "category"=>"$seoCategoryName",
        "img" => "seo/7.png",
        "url" => "what-is-large-photo-summary-card.php",
        "date"=>"29 june 2023",
        "title" => "What is Large Photo..",
        "excerpt" => "Do you love to share your stuff on Twitter? If you do, you may want to make your tweets pop with a big and beautiful image   "
    ],
    [   "category"=>"$seoCategoryName",
        "img" => "seo/8.png",
        "url" => "what-is-player-card.php",
        "date"=>"29 june 2023",
        "title" => "What is Player Card?",
        "excerpt" => "Twitter Player Card is a feature that lets you share your video or audio clips on Twitter with more impact and interactivity   "
    ],
    [   "category"=>"$seoCategoryName",
        "img" => "seo/9.png",
        "url" => "what-is-twitter-app-card.php",
        "date"=>"29 june 2023",
        "title" => "What is Twitter App Card?",
        "excerpt" => "Do you want to make your tweets stand out and get more people to download your mobile app? If yes, then you should try the Twitter App   "
    ],
    [   "category"=>"$seoCategoryName",
        "img" => "seo/10.png",
        "url" => "what-is-a-summary-twitter-card.php",
        "date"=>"29 june 2023",
        "title" => "What is a Summary Twitter Card?",
        "excerpt" => "Do you like to share your stuff on Twitter? If you do, you may have seen some tweets that show a cool preview of the link they have   "
    ],
    // ===================GooleAds==================
    [   "category"=>"$googleAdsCategoryName",
        "img" => "googleads/1.png",
        "url" => "what-are-google-ads.php",
        "date"=>"19 june 2023",
        "title" => "What are Google Ads?",
        "excerpt" => "So, you know Google Ads, right? It’s an amazing tool that lets you advertise your business or yourself online. Basically "
    ],
    [   "category"=>"$googleAdsCategoryName",
        "img" => "googleads/2.png",
        "url" => "what-is-search-ads-campaign.php",
        "date"=>"20 june 2023",
        "title" => "What is search Ads Campaign?",
        "excerpt" => "Have you ever seen those text ads that pop up when you search for something on Google? Those are called Search Ads "
    ],
    [   "category"=>"$googleAdsCategoryName",
        "img" => "googleads/3.png",
        "url" => "what-is-google-display-ads.php",
        "date"=>"21 june 2023",
        "title" => "What is Google Display Ads?",
        "excerpt" => "Hey, do you want to know how to create awesome display ads for your business? Display ads are those Image Ads that "
    ],
    [   "category"=>"$googleAdsCategoryName",
        "img" => "googleads/4.png",
        "url" => "what-are-google-shopping-ads.php",
        "date"=>"28 june 2023",
        "title" => "What are Google Shopping Ads?",
        "excerpt" => "Have you ever wondered why we see a bunch of ads after we search for something on Google? Those right there are Google Shopping Ads "
    ],
    [   "category"=>"$googleAdsCategoryName",
        "img" => "googleads/5.png",
        "url" => "what-is-google-discovery-ad.php",
        "date"=>"29 june 2023",
        "title" => "What is Google Discovery Ad?",
        "excerpt" => "Have you ever wondered how to reach more customers online without them having to search for you? Google Discovery Ads can help  "
    ],
    // ===============PPC====================
    [   "category"=>"$ppcCategoryName",
        "img" => "ppc/1.png",
        "url" => "what-is-ppc.php",
        "date"=>"22 june 2023",
        "title" => "What is PPC?",
        "excerpt" => "Hey, their folks! It’s great to have you back on this digital marketing adventure. So, you might have heard whispers about the mighty PPC "
    ],
    [   "category"=>"$ppcCategoryName",
        "img" => "ppc/2.png",
        "url" => "how-does-ppc-works.php",
        "date"=>"23 june 2023",
        "title" => "how does PPC works?",
        "excerpt" => "Absolutely! You’ve hit the nail on the head. PPC is like having the power to create compelling ads that capture the attention of your "
    ],
   
   
];
?>
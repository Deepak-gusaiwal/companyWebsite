<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>google algorithum updates</title>

    <!-- cssLinks -->
    <?php
    $pageTitle = "google algorithum updates";
    $categoryTitle = "Blog";
    $categoryUrl = "/blog";
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

    <!-- google algorithum Blogs Arr -->
    <?php
    $googleAlgorithumBlogs = [
        [
            "title" => "Florida 2003",
            "year" => "2003",
            "url" => "",
            "excerpt" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut impedit ea eaque reiciendis veniam dolore officiis quod provident autem ",

            "updates" => [
                [
                    "title" => "Florida 1.0: Launched on November 16, 2003.",
                    "url" => ""
                ],
                [
                    "title" => "Florida 2.0: Launched on January 23, 2004.",
                    "url" => ""
                ],
                [
                    "title" => "Florida 3.0: Launched on February 2, 2004.",
                    "url" => ""
                ],
                [
                    "title" => "Florida 4.0: Launched on March 9, 2004.",
                    "url" => ""
                ],
                [
                    "title" => "Florida 5.0: Launched on April 22, 2004.",
                    "url" => ""
                ],


            ]
        ],
        [
            "title" => "Big Daddy 2005",
            "year" => "2005",
            "url" => "",
            "excerpt" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut impedit ea eaque reiciendis veniam dolore officiis quod provident autem ",
            "updates" => [
                [
                    "title" => "Big Daddy 1.0: Launched on December 1, 2005.",
                    "url" => ""
                ],
                [
                    "title" => "Big Daddy 2.0: Launched on January 23, 2006.",
                    "url" => ""
                ],
                [
                    "title" => "Big Daddy 3.0: Launched on February 2, 2006.",
                    "url" => ""
                ],
                [
                    "title" => "Big Daddy 4.0: Launched on March 9, 2006.",
                    "url" => ""
                ],
                [
                    "title" => "Big Daddy 5.0: Launched on April 22, 2006.",
                    "url" => ""
                ],
            ]

        ],
        [
            "title" => "Jagger 2005",
            "year" => "2005",
            "url" => "",
            "excerpt" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut impedit ea eaque reiciendis veniam dolore officiis quod provident autem ",
            "updates" => [
                [
                    "title" => "Jagger 1.0: Launched on September 22, 2005.",
                    "url" => ""
                ],
                [
                    "title" => "Jagger 2.0: Launched on October 26, 2005.",
                    "url" => ""
                ],
                [
                    "title" => "Jagger 3.0: Launched on November 15, 2005.",
                    "url" => ""
                ],
                [
                    "title" => "Jagger 4.0: Launched on December 7, 2005.",
                    "url" => ""
                ],
                [
                    "title" => "Jagger 5.0: Launched on January 10, 2006.",
                    "url" => ""
                ],


            ]

        ],
        [
            "title" => "Vince 2009",
            "year" => "2009",
            "url" => "",
            "excerpt" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut impedit ea eaque reiciendis veniam dolore officiis quod provident autem ",
            "updates" => [
                [
                    "title" => "Vince 1.0: Launched on January 18, 2009.",
                    "url" => ""
                ],
                [
                    "title" => "Vince 2.0: Launched on February 23, 2009.",
                    "url" => ""
                ],
                [
                    "title" => "Vince 3.0: Launched on March 24, 2009.",
                    "url" => ""
                ],
                [
                    "title" => "Vince 4.0: Launched on April 28, 2009.",
                    "url" => ""
                ],
                [
                    "title" => "Vince 5.0: Launched on May 26, 2009.",
                    "url" => ""
                ],


            ]

        ],
        [
            "title" => "Caffeine 2009",
            "year" => "2009",
            "url" => "",
            "excerpt" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut impedit ea eaque reiciendis veniam dolore officiis quod provident autem ",
            "updates" => [
                [
                    "title" => "Caffeine 1.0: Announced on August 10, 2009.",
                    "url" => ""
                ],
                [
                    "title" => "Caffeine 2.0: Launched on June 8, 2010.",
                    "url" => ""
                ],
                [
                    "title" => "Caffeine 3.0: Launched on August 10, 2010.",
                    "url" => ""
                ],
                [
                    "title" => "Caffeine 4.0: Launched on November 3, 2010.",
                    "url" => ""
                ],
                [
                    "title" => "Caffeine 5.0: Launched on January 11, 2011.",
                    "url" => ""
                ],


            ]

        ],
        [
            "title" => "Panda 2011",
            "year" => "2011",
            "url" => "",
            "excerpt" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut impedit ea eaque reiciendis veniam dolore officiis quod provident autem ",
            "updates" => [
                [
                    "title" => "Panda 1.0: Launched on February 23, 2011.",
                    "url" => ""
                ],
                [
                    "title" => "Panda 4.0: Launched on May 20, 2014.",
                    "url" => ""
                ],
                [
                    "title" => "Panda Core Algorithm: Announced on January 12, 2016.",
                    "url" => ""
                ],
                [
                    "title" => "Panda 4.2: Launched on July 17, 2015.",
                    "url" => ""
                ],
                [
                    "title" => "Panda #20: Launched on September 27, 2012.",
                    "url" => ""
                ],


            ]

        ],
        [
            "title" => "Freshness Algorithm 2011",
            "year" => "2011",
            "url" => "",
            "excerpt" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut impedit ea eaque reiciendis veniam dolore officiis quod provident autem ",
            "updates" => [
                [
                    "title" => "Freshness 1.0: Announced on November 3, 2011.",
                    "url" => ""
                ],
                [
                    "title" => "Freshness 2.0: Launched on December 1, 2011.",
                    "url" => ""
                ],
                [
                    "title" => "Freshness 3.0: Launched on January 10, 2012.",
                    "url" => ""
                ],
                [
                    "title" => "Freshness 4.0: Launched on February 14, 2012.",
                    "url" => ""
                ],
                [
                    "title" => "Freshness 5.0: Launched on March 20, 2012.",
                    "url" => ""
                ],


            ]

        ],
        [
            "title" => "Page Layout Algorithm 2012",
            "year" => "2012",
            "url" => "",
            "excerpt" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut impedit ea eaque reiciendis veniam dolore officiis quod provident autem ",
            "updates" => [
                [
                    "title" => "Page Layout 1.0: Launched on January 19, 2012.",
                    "url" => ""
                ],
                [
                    "title" => "Page Layout 2.0: Launched on October 9, 2012.",
                    "url" => ""
                ],
                [
                    "title" => "Page Layout 3.0: Launched on February 6, 2014.",
                    "url" => ""
                ],
                [
                    "title" => "Page Layout 4.0: Launched on November 1, 2016.",
                    "url" => ""
                ],
                [
                    "title" => "Page Layout 5.0: Launched on March 7, 2017.",
                    "url" => ""
                ],


            ]

        ],
        [
            "title" => "Venice Update 2012",
            "year" => "2012",
            "url" => "",
            "excerpt" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut impedit ea eaque reiciendis veniam dolore officiis quod provident autem ",
            "updates" => [
                [
                    "title" => "Venice 1.0: Announced on February 27, 2012.",
                    "url" => ""
                ],
                [
                    "title" => "Venice 2.0: Launched on March 23, 2012.",
                    "url" => ""
                ],
                [
                    "title" => "Venice 3.0: Launched on April 24, 2012.",
                    "url" => ""
                ],
                [
                    "title" => "Venice 4.0: Launched on May 25, 2012.",
                    "url" => ""
                ],
                [
                    "title" => "Venice 5.0: Launched on June 26, 2012.",
                    "url" => ""
                ],


            ]

        ],
        [
            "title" => "Penguin 2012",
            "year" => "2012",
            "url" => "",
            "excerpt" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut impedit ea eaque reiciendis veniam dolore officiis quod provident autem ",
            "updates" => [
                [
                    "title" => "Penguin 1.0: Launched on April 24, 2012.",
                    "url" => ""
                ],
                [
                    "title" => "Penguin 2.0: Launched on May 22, 2013.",
                    "url" => ""
                ],
                [
                    "title" => "Penguin 3.0: Launched on October 17, 2014.",
                    "url" => ""
                ],
                [
                    "title" => "Penguin 4.0: Launched on September 23, 2016.",
                    "url" => ""
                ],
                [
                    "title" => "Penguin 5.0: Launched on October 6, 2016.",
                    "url" => ""
                ],


            ]

        ],
        [
            "title" => "EMD (Exact Match Domain) 2012",
            "year" => "2012",
            "url" => "",
            "excerpt" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut impedit ea eaque reiciendis veniam dolore officiis quod provident autem ",
            "updates" => [
                [
                    "title" => "EMD 1.0: Launched on September 27, 2012.",
                    "url" => ""
                ],
                [
                    "title" => "EMD 2.0: Launched on October 9, 2012.",
                    "url" => ""
                ],
                [
                    "title" => "EMD 3.0: Launched on December 11, 2012.",
                    "url" => ""
                ],
                [
                    "title" => "EMD 4.0: Launched on September 5, 2013.",
                    "url" => ""
                ],
                [
                    "title" => "EMD 5.0: Launched on October 17, 2014.",
                    "url" => ""
                ],


            ]

        ],
        [
            "title" => "Payday 2013",
            "year" => "2013",
            "url" => "",
            "excerpt" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut impedit ea eaque reiciendis veniam dolore officiis quod provident autem ",
            "updates" => [
                [
                    "title" => "Payday 1.0: Launched on June 11, 2013.",
                    "url" => ""
                ],
                [
                    "title" => "Payday 2.0: Launched on May 16, 2014.",
                    "url" => ""
                ],
                [
                    "title" => "Payday 3.0: Launched on June 12, 2014.",
                    "url" => ""
                ],
                [
                    "title" => "Payday 4.0: Launched on September 23, 2014.",
                    "url" => ""
                ],
                [
                    "title" => "Payday 5.0: Launched on October 17, 2014.",
                    "url" => ""
                ],


            ]

        ],
        [
            "title" => "Hummingbird 2013",
            "year" => "2013",
            "url" => "",
            "excerpt" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut impedit ea eaque reiciendis veniam dolore officiis quod provident autem ",
            "updates" => [
                [
                    "title" => "Hummingbird 1.0: Launched on August 20, 2013.",
                    "url" => ""
                ],
                [
                    "title" => "Hummingbird 2.0: Launched on September 26, 2013.",
                    "url" => ""
                ],
                [
                    "title" => "Hummingbird 3.0: Launched on October 4, 2013.",
                    "url" => ""
                ],
                [
                    "title" => "Hummingbird 4.0: Launched on November 12, 2013.",
                    "url" => ""
                ],
                [
                    "title" => "Hummingbird 5.0: Launched on December 6, 2013.",
                    "url" => ""
                ],


            ]

        ],
        [
            "title" => "Pigeon 2014",
            "year" => "2014",
            "url" => "",
            "excerpt" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut impedit ea eaque reiciendis veniam dolore officiis quod provident autem ",
            "updates" => [
                [
                    "title" => "Pigeon 1.0: Launched on July 24, 2014.",
                    "url" => ""
                ],
                [
                    "title" => "Pigeon 2.0: Launched on August 1, 2014.",
                    "url" => ""
                ],
                [
                    "title" => "Pigeon 3.0: Launched on December 22, 2014.",
                    "url" => ""
                ],
                [
                    "title" => "Pigeon 4.0: Launched on July 17, 2015.",
                    "url" => ""
                ],
                [
                    "title" => "Pigeon 5.0: Launched on August 28, 2015.",
                    "url" => ""
                ],


            ]

        ],
        [
            "title" => "Mobilegeddon 2015",
            "year" => "2015",
            "url" => "",
            "excerpt" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut impedit ea eaque reiciendis veniam dolore officiis quod provident autem ",
            "updates" => [
                [
                    "title" => "Mobilegeddon 1.0: Launched on April 21, 2015.",
                    "url" => ""
                ],
                [
                    "title" => "Mobilegeddon 2.0: Launched on May 12, 2016.",
                    "url" => ""
                ],
                [
                    "title" => "Mobilegeddon 3.0: Launched on March 26, 2018.",
                    "url" => ""
                ],
                [
                    "title" => "Mobilegeddon 4.0: Launched on July 1, 2019.",
                    "url" => ""
                ],
                [
                    "title" => "Mobilegeddon 5.0: Launched on March 3, 2021.",
                    "url" => ""
                ],


            ]

        ],
        [
            "title" => "Quality Updates 2015",
            "year" => "2015",
            "url" => "",
            "excerpt" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut impedit ea eaque reiciendis veniam dolore officiis quod provident autem ",
            "updates" => [
                [
                    "title" => "Quality 1.0: Launched on May 3, 2015.",
                    "url" => ""
                ],
                [
                    "title" => "Quality 2.0: Launched on November 19, 2015.",
                    "url" => ""
                ],
                [
                    "title" => "Quality 3.0: Launched on January 8, 2016.",
                    "url" => ""
                ],
                [
                    "title" => "Quality 4.0: Launched on May 10, 2017.",
                    "url" => ""
                ],
                [
                    "title" => "Quality 5.0: Launched on December 5, 2022.",
                    "url" => ""
                ],


            ]

        ],
        [
            "title" => "RankBrain 2015",
            "year" => "2015",
            "url" => "",
            "excerpt" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut impedit ea eaque reiciendis veniam dolore officiis quod provident autem ",
            "updates" => [
                [
                    "title" => "RankBrain 1.0: Launched on October 26, 2015.",
                    "url" => ""
                ],
                [
                    "title" => "RankBrain 2.0: Launched on June 23, 2016.",
                    "url" => ""
                ],
                [
                    "title" => "RankBrain 3.0: Launched on March 8, 2017.",
                    "url" => ""
                ],
                [
                    "title" => "RankBrain 4.0: Launched on August 1, 2018.",
                    "url" => ""
                ],
                [
                    "title" => "RankBrain 5.0: Launched on May 4, 2020.",
                    "url" => ""
                ],


            ]

        ],
        [
            "title" => "Fred 2017",
            "year" => "2017",
            "url" => "",
            "excerpt" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut impedit ea eaque reiciendis veniam dolore officiis quod provident autem ",
            "updates" => [
                [
                    "title" => "Fred 1.0: Launched on March 7, 2017.",
                    "url" => ""
                ],
                [
                    "title" => "Fred 2.0: Launched on June 25, 2017.",
                    "url" => ""
                ],
                [
                    "title" => "Fred 3.0: Launched on September 25, 2017.",
                    "url" => ""
                ],
                [
                    "title" => "Fred 4.0: Launched on December 12, 2017.",
                    "url" => ""
                ],
                [
                    "title" => "Fred 5.0: Launched on March 9, 2018.",
                    "url" => ""
                ],


            ]

        ],
        [
            "title" => "BERT 2018",
            "year" => "2018",
            "url" => "",
            "excerpt" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut impedit ea eaque reiciendis veniam dolore officiis quod provident autem ",
            "updates" => [
                [
                    "title" => "BERT 1.0: Launched on October 25, 2019.",
                    "url" => ""
                ],
                [
                    "title" => "BERT 2.0: Launched on December 9, 2019.",
                    "url" => ""
                ],
                [
                    "title" => "BERT 3.0: Launched on October 15, 2020.",
                    "url" => ""
                ],
                [
                    "title" => "BERT 4.0: Launched on December 3, 2020.",
                    "url" => ""
                ],
                [
                    "title" => "BERT 5.0: Launched on July 28, 2021",
                    "url" => ""
                ],


            ]

        ],
        [
            "title" => "Broad Core 2018",
            "year" => "2018",
            "url" => "",
            "excerpt" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut impedit ea eaque reiciendis veniam dolore officiis quod provident autem ",
            "updates" => [
                [
                    "title" => "Broad Core 1.0: Launched on March 7, 2018.",
                    "url" => ""
                ],
                [
                    "title" => "Broad Core 2.0: Launched on August 1, 2018.",
                    "url" => ""
                ],
                [
                    "title" => "Broad Core 3.0: Launched on March 12, 2019.",
                    "url" => ""
                ],
                [
                    "title" => "Broad Core 4.0: Launched on May 4, 2020.",
                    "url" => ""
                ],
                [
                    "title" => "Broad Core 5.0: Launched on December 3, 2020.",
                    "url" => ""
                ],


            ]

        ],
        [
            "title" => "Core Web Vitals Algorithm 2021",
            "year" => "2021",
            "url" => "",
            "excerpt" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut impedit ea eaque reiciendis veniam dolore officiis quod provident autem. ",
            "updates" => [
                [
                    "title" => "Core Web Vitals 1.0: Launched on May 4, 2020.",
                    "url" => ""
                ],
                [
                    "title" => "Core Web Vitals 2.0: Launched on June 15, 2021.",
                    "url" => ""
                ],
                [
                    "title" => "Core Web Vitals 3.0: Launched on July 1, 2021.",
                    "url" => ""
                ],
                [
                    "title" => "Core Web Vitals 4.0: Launched on September 2, 2021.",
                    "url" => ""
                ],
                [
                    "title" => "Core Web Vitals 5.0: Launched on May 10, 2023.",
                    "url" => ""
                ],


            ]
        ],
    ];


    usort($googleAlgorithumBlogs, function ($a, $b) {
        return $b['year'] <=> $a['year'];
    });


    ?>

    <div class="container strightMapWrapper">

        <h2 class="titleBanner mb-0">
            <?php echo $pageTitle ?>
        </h2>

        <div class=" straightMapContainer ">

            <?php foreach ($googleAlgorithumBlogs as $key => $data): ?>
                <div class="row mapDataContainer">
                    <div class=" col-md-6 mapLeftDataCol">
                        <div class="mapLeftDataContainer m-2">
                            <input class="d-none" type="checkbox" id="mapBox<?php echo $key ?>">
                            <div class="mapLeftDataHead">
                                <label class="w-100 py-2" for="mapBox<?php echo $key ?>"><?php echo $data['title']; ?></label>
                            </div>
                            <div class="mapLeftDataContent p-2 mt-2">
                                <h4 class="text-capitalize brandColor fw-bold mb-0">
                                    <?php echo $data['title']; ?>
                                </h4>
                                <p>
                                    <?php echo $data['excerpt']; ?> ...
                                </p>
                                <a href="<?php echo $data['url']; ?>">Continue Reading</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mapRightDataCol p-0">
                        <div class="mapRightDataContentHolder ">
                            <ul>
                                <?php foreach ($data['updates'] as $updates): ?>
                                    <li>
                                        <a href="<?php echo $updates['url'] ?>">
                                            <?php echo $updates['title'] ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>



        </div>

    </div>







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
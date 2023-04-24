<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seco Service In India</title>

    <!-- cssLinks -->
    <?php 
     $isProductPage=false;
    require "./includes/cssLinks.php"; 
    ?>
</head>

<body>
    <!-- header Section Starteed -->
    <?php require "./includes/header.php"; ?>
    <!-- header Section Ended -->

    <!-- thak you page Content Started -->
    <div class="thankyouContainer">
        <div class="container py-3">
            <div class="thankYourImageBox">
                <img src="./assets/img/thankyou/thankyou.webp" alt="">
            </div>

            <div class="thankYouContentBox text-center d-flex justify-contetn-center align-items-center flex-column gap-2 ">
                <h2>Thank You</h2>
                <span>Your Submission has been Received.</span>
                <span>We will be in touch and contact you within 24 hrs</span>

                <a href="/" class="commonButton">Back To Home</a>
            </div>
        </div>
    </div>
    <!-- thak you page Content Ended -->

    <!-- footer started -->
    <?php require "./includes/footer.php"; ?>
    <!-- footer ended -->
    <!-- jsLinks -->
    <?php require "./includes/jsLinks.php"; ?>
</body>

</html>
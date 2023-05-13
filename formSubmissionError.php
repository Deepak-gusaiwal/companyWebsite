<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form is Not Submitted</title>

    <!-- cssLinks -->
    <?php

     require "./includes/cssLinks.php"; 
     ?>
</head>

<body>
    <!-- header Section Starteed -->
    <?php require "./includes/header.php"; ?>
    <!-- header Section Ended -->

    <!-- thak you page Content Started -->
    <div class="formErroConainer redBg">
        <div class="container py-3">
            <div class="formErrorImageBox">
                <img src="./assets/img/formSubmissionError/formSubmissionError.webp" alt="">
            </div>

            <div class="formErrorContentBox text-center d-flex justify-contetn-center align-items-center flex-column gap-2 ">
                <h2>oops !</h2>
                <span>Your Contact Form is Not Submitted.</span>
                <span>Please Fill the form Again with correct format</span>

                <a href="/contact-us.php" class="commonButton">fill form again</a>
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
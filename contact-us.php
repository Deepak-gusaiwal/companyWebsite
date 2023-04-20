<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>

    <!-- cssLinks -->
    <?php $pageTitle = "contact us";
    require "./includes/cssLinks.php"; ?>
</head>

<body>
    <!-- header Section Starteed -->
    <?php require "./includes/header.php"; ?>
    <!-- header Section Ended -->

    <!-- breadCrumb Section started -->
    <?php require "./includes/breadCrumb.php"; ?>
    <!-- breadCrumb Section ended -->

    <!-- contactSetion started -->
    <?php require "./includes/contactSection.php"; ?>
    <!-- contactSetion ended -->

    <!-- map started  -->
    <div class="containerfluid">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d448161.4984663963!2d76.55309647343748!3d28.651881599999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d030e3fffffff%3A0xc96877f566c8fd0a!2sMysticDigi%20-%20SEO%20Company%2FConsultant%20India%2C%20SEO%20Services%20India%2C%20SEO%20Experts%20India%2C%20SEO%20Specialist%2C%20Agency%2C%20Firm%20New%20Delhi%20NCR%2C%20India!5e0!3m2!1sen!2sus!4v1681899350401!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- map ended -->

      <!-- footer started -->
      <?php require "./includes/footer.php"; ?>
    <!-- footer ended -->
    <!-- jsLinks -->
    <?php require "./includes/jsLinks.php"; ?>

</body>

</html>
<?php
$phoneNumber1 = 9717686168;
$phoneNumber2 = 8802555230;
$email1 = "anubhav@seoserviceinindia.co.in";
$email2 = "chander@mysticdigi.com";
$whatsappLink = "yourWhatsappLink";

// social links
$facebook = "yourfacebookLink";
$twitter = "yourtwiitterLink";
$youtube = "yourYoutubeLink";
$linkedin = "yourLinkedinLink";
$pinterest = "yourPitnrestLink";
$instagram = "yourInstagramLink";
$skype = "yourSkypeLink";

?>








<header class="d-flex flex-column justify-content-between align-items-center p-0">

  <div
    class="topNav d-flex  justify-content-between align-items-center px-md-4 px-2 py-2 gap-md-3 gap-2 flex-md-nowrap flex-wrap">

    <div class="logoBox">
      <img src="./assets/img/logo.webp" alt="logo img" />
    </div>


    <div class="freeSEOToolsContainer d-lg-flex d-none ">
      <span>Our Free SEO Tools</span>
      <a href="#"> Free SEO Tools</a>
    </div>
    <div class="freeSEOToolsContainer d-lg-flex d-none ">
      <span>Join Our Forum</span>
      <a href="#">Use Our Forum</a>
    </div>





    <div class="callBox d-md-flex d-none">
      <a class="" href="tel:+91-<?php echo $phoneNumber1; ?>">
        <div class="callBoxDetail ">
          <i class="fa fa-phone"></i>
          <span>Customer Support</span>
        </div>
        <span class="callBoxPhoneNumber">+91-
          <?php echo $phoneNumber1; ?>
        </span>
      </a>
    </div>
    <a class="d-md-none d-block mobileNoInPhoneView" href="tel:<?php echo $phoneNumber1; ?>">
      <?php echo $phoneNumber1; ?>
    </a>

    <a href="<?php echo $whatsappLink; ?>" class="whatsappButtonRound">
      <i class="fa fa-whatsapp"></i>
    </a>
    <div class="socialLinks headerSocialLinks d-flex mx-md-0 mx-auto gap-2">
      <a href="<?php echo $facebook; ?>"><i class="fa fa-facebook"></i></a>
      <a href="<?php echo $twitter; ?>"><i class="fa fa-twitter"></i></a>
      <a href="<?php echo $youtube; ?>"><i class="fa fa-youtube-play"></i></a>
      <a href="<?php echo $linkedin; ?>"><i class="fa fa-linkedin"></i></a>
      <a href="<?php echo $pinterest; ?>"><i class="fa fa-pinterest-p"></i></a>
      <a href="<?php echo $instagram; ?>"><i class="fa fa-instagram"></i></a>
      <a href="<?php echo $instagram; ?>"><i class="fa fa-instagram"></i></a>
      <a href="<?php echo $instagram; ?>"><i class="fa fa-instagram"></i></a>
    </div>


  </div>

<?php require "./includes/desktopNav.php";?>
<?php require "./includes/mobileNav.php";?>



</header>



<!-- dropDown  -->
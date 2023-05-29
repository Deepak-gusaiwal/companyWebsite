<?php
$phoneNumber1 = "+919717686168";
$phoneNumber2 = "+918802555230";
$email1 = "anubhav@seoserviceinindia.co.in";
$email2 = "chander@mysticdigi.com";
$whatsappLink = "https://bit.ly/3yvu39p";


// social links
$facebook = "https://www.facebook.com/SeoServiceInIndia.Co.In";
$twitter = "https://twitter.com/seoserviceinind";
$youtube = "https://www.youtube.com/channel/UCSR3H_kD5Z4FY77MPO-lqGQ";
$linkedin = "https://in.linkedin.com/company/seo-service-in-india";
$pinterest = "https://in.pinterest.com/seoserviceinind/";
$instagram = "https://www.instagram.com/seoserviceinindia/";
$skype = "skype:anubhav.garg7?chat";



?>

<!-- =================================for email configration started==============================-->

  <!-- normal Contact form -->
  <?php require __DIR__ ."/Helpers/mail.php"; ?>

  <!-- Inquiry form -->
  <?php require __DIR__ ."/Helpers/stickyMail.php"; ?>

<!-- ==========================================for email configration ended ===========================-->




<header class="d-flex flex-column justify-content-between align-items-center p-0">

  <div
    class="topNav d-flex  justify-content-between align-items-center px-md-4 px-2 py-2 gap-md-3 gap-2 flex-md-nowrap flex-wrap">

   
      <a href="/" class="logoBox">
      <?php if ($isProductPage): ?>
        <img src="../assets/img/logo.webp" alt="logo img" />
        <?php else: ?>
        <img src="assets/img/logo.webp" alt="logo img" />
        <?php endif; ?>
      </a>


    <div class="freeSEOToolsContainer d-lg-flex d-none ">
      <span>Our Free SEO Tools</span>
      <a href="#"> Free SEO Tools</a>
    </div>
    <div class="freeSEOToolsContainer d-lg-flex d-none ">
      <span>Join Our Forum</span>
      <a href="#">Join Our Forum</a>
    </div>





    <div class="callBox d-md-flex d-none">
      <a class="" href="tel:<?php echo $phoneNumber1; ?>">
        <div class="callBoxDetail ">
          <i class="fa fa-phone"></i>
          <span>Customer Support</span>
        </div>
        <span class="callBoxPhoneNumber">
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
      <a title="facebook" href="<?php echo $facebook; ?>"><i class="fa fa-facebook"></i></a>
      <a href="<?php echo $twitter; ?>"><i class="fa fa-twitter"></i></a>
      <a href="<?php echo $youtube; ?>"><i class="fa fa-youtube-play"></i></a>
      <a href="<?php echo $linkedin; ?>"><i class="fa fa-linkedin"></i></a>
      <a href="<?php echo $pinterest; ?>"><i class="fa fa-pinterest-p"></i></a>
      <a href="<?php echo $instagram; ?>"><i class="fa fa-instagram"></i></a>

    </div>


  </div>




  <!-- normal Contact form -->
  <?php  require __DIR__ ."/desktopNav.php"; ?>
  <?php  require __DIR__ ."/mobileNav.php"; ?>





 
  





</header>
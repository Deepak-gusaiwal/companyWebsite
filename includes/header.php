<?php
$phoneNumber1 = "+919717686168";
$phoneNumber2 = "+918802555230";
$email1 = "anubhav@mysticdigi.com";
$email2 = "chander@mysticdigi.com";
$contactFormEmail = $email1;
$whatsappLink = "https://bit.ly/3yvu39p";


// social links
$facebook = "https://www.facebook.com/SeoServiceInIndia.Co.In";
$twitter = "https://twitter.com/seoserviceinind";
$youtube = "https://www.youtube.com/channel/UCSR3H_kD5Z4FY77MPO-lqGQ";
$linkedin = "https://in.linkedin.com/company/seo-service-in-india";
$pinterest = "https://in.pinterest.com/seoserviceinindia/";
$instagram = "https://www.instagram.com/seoserviceinindia/";
$skype = "skype:anubhav.garg7?chat";

$seoForumLink = "https://digitalmarketingforum.seoserviceinindia.co.in";
$seoToolsLink = " https://seotools.seoserviceinindia.co.in/";

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
      <a href="<?php echo $seoToolsLink; ?>"> Free SEO Tools</a>
    </div>
    <!-- <div class="freeSEOToolsContainer d-lg-flex d-none ">
      <span>Join Our Forum</span>
      <a href="<?php echo $seoForumLink; ?>">Join Our Forum</a>
    </div> -->





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
      <a rel="nofollow" title="facebook" href="<?php echo $facebook; ?>"><i class="fa fa-facebook"></i></a>
      <a rel="nofollow" href="<?php echo $twitter; ?>"><i class="fa fa-twitter"></i></a>
      <a rel="nofollow" href="<?php echo $youtube; ?>"><i class="fa fa-youtube-play"></i></a>
      <a rel="nofollow" href="<?php echo $linkedin; ?>"><i class="fa fa-linkedin"></i></a>
      <a rel="nofollow" href="<?php echo $pinterest; ?>"><i class="fa fa-pinterest-p"></i></a>
      <a rel="nofollow" href="<?php echo $instagram; ?>"><i class="fa fa-instagram"></i></a>

    </div>


  </div>

<script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "hh2g8vf0ir");
</script>


  <!-- normal Contact form -->
  <?php  require __DIR__ ."/desktopNav.php"; ?>
  <?php  require __DIR__ ."/mobileNav.php"; ?>



<!-- Meta Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '635845548166660');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=635845548166660&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->

 
  <meta name="p:domain_verify" content="fe0b563582648996b6192793abce1369"/>





</header>
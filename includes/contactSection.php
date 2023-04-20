<!-- get form data and get mail it -->
<?php
$name = $email = $phoneNo = $websiteUrl = $requirment = $budget = $message = "";
$nameErr = $emailErr = $phoneNoErr = $websiteUrlErr = $budgetErr = $requirmentErr = $messageErr = false;
$formSubmissionError = false;
$formSubmissionSuccess = false;
if (isset($_POST['submit'])) {

    // validate the name field
    if (empty($_POST['name'])) {
        $nameErr = true;
    } else {
        $nameErr = false;
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    }

    // validate the name email
    if (empty($_POST['email'])) {
        $emailErr = true;
    } else {
        $emailErr = false;
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    // validate the name phoneNo
    if (empty($_POST['phoneNo'])) {
        $phoneNoErr = true;
    } else {
        $phoneNoErr = false;
        $phoneNo = filter_input(INPUT_POST, 'phoneNo', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    // validate the name websiteUrl
    if (empty($_POST['websiteUrl'])) {
        $websiteUrlErr = true;
    } else {
        $websiteUrlErr = false;
        $websiteUrl = filter_input(INPUT_POST, 'websiteUrl', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    // validate the name budget
    if (empty($_POST['budget'])) {
        $budgetErr = true;
    } else {
        $budgetErr = false;
        $budget = filter_input(INPUT_POST, 'budget', FILTER_SANITIZE_SPECIAL_CHARS);
    }

    // validate the name requirment
    if (empty($_POST['requirment'])) {
        $requirmentErr = true;
    } else {
        $requirmentErr = false;
        $requirment = filter_input(INPUT_POST, 'requirment', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    // validate the name message
    if (empty($_POST['message'])) {
        $messageErr = true;
    } else {
        $messageErr = false;
        $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_SPECIAL_CHARS);
    }

    if ($nameErr || $emailErr || $phoneNoErr || $websiteUrlErr || $budgetErr || $requirmentErr || $messageErr) {
        $formSubmissionError = true;
    } else {
        //  get the mail by user

        // Email information
        $to = "dgusaiwal537@gmail.com";
        $subject = "Contact Form Submission By User";
        $headers = "From: " . $email . "\r\n";


        // Compose message
        $email_body = "You have received a new message from your SEO Inda website contact form.\n\n";
        $email_body .= "Name: " . $name . "\n";
        $email_body .= "Email: " . $email . "\n";
        $email_body .= "Phone: " . $phoneNo . "\n";
        $email_body .= "websiteURL: " . $websiteUrl . "\n";
        $email_body .= "budget: " . $budget . "\n";
        $email_body .= "requirment: " . $requirment . "\n";
        $email_body .= "Message:\n" . $message . "\n\n";



        $sucss = mail($to, $subject, $email_body, $headers);
        if ($sucss) {
            $formSubmissionSuccess = true;
            
        }else{
            $formSubmissionError = true;
        }

    }

}
?>



<div class=" contectSection">

    <div class="row p-0 m-0">

        <div class="col-md-6 contactLeft py-4">
            <div class="formBannerSection ">
                <h1>Discover How We Can Help <span>Your Business Grow.</span></h1>
            </div>

            <form class="contactForm" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

                <div class="inputContainer row">
                    <div class="col-md-6">
                        <?php if ($nameErr): ?>
                            <span class="formErrorSpan">Invalid Name</span>
                        <?php endif; ?>
                        <input class="form-control <?php echo $nameErr ? "is-invalid" : ""; ?>" type="text" name="name"
                            id="" placeholder="Full Name">

                    </div>
                    <div class="col-md-6">
                        <?php if ($emailErr): ?>
                            <span class="formErrorSpan">Invalid Email</span>
                        <?php endif; ?>
                        <input class="form-control <?php echo $emailErr ? "is-invalid" : ""; ?>" type="email"
                            name="email" id="" placeholder="Your Email">

                    </div>

                </div>

                <div class="inputContainer row">
                    <div class="col-md-6">
                        <?php if ($phoneNoErr): ?>
                            <span class="formErrorSpan">Invalid Phone Number</span>
                        <?php endif; ?>
                        <input class="form-control <?php echo $phoneNoErr ? "is-invalid" : ""; ?>" type="number"
                            name="phoneNo" id="" placeholder="Phone Number">

                    </div>
                    <div class="col-md-6">
                        <?php if ($websiteUrlErr): ?>
                            <span class="formErrorSpan">Invalid Website URL</span>
                        <?php endif; ?>
                        <input class="form-control <?php echo $websiteUrlErr ? "is-invalid" : ""; ?>" type="text"
                            name="websiteUrl" id="" placeholder="Website URl">

                    </div>
                </div>

                <?php if ($requirmentErr): ?>
                    <span class="formErrorSpan">Please Select Your Requirements</span>
                <?php endif; ?>
                <select class="form-control" name="requirment">
                    <option value="">---Select Your Requirements*----</option>

                    <option value="Search Engine Optimization">Search Engine Optimization</option>
                    <option value="Google Ads or PPC ">Google Ads or PPC </option>
                    <option value="Website Designing">Website Designing</option>
                    <option value="Social Media Marketing">Social Media Marketing</option>
                    <option value="Content Writing">Content Writing</option>
                    <option value="YouTube Monetization">YouTube Monetization</option>
                    <option value="Website Hosting">Website Hosting</option>
                </select>


                <?php if ($budgetErr): ?>
                    <span class="formErrorSpan">Let us know about your budget</span>
                <?php endif; ?>
                <input class="form-control <?php echo $budgetErr ? "is-invalid" : ""; ?>" type="text" name="budget"
                    id="" placeholder="what is your projected monthly budget for this project ?">


                <?php if ($messageErr): ?>
                    <span class="formErrorSpan">Type Your Message</span>
                <?php endif; ?>
                <textarea class="form-control <?php echo $messageErr ? "is-invalid" : ""; ?>" name="message" id=""
                    cols="30" rows="2" placeholder="your ideas (optional)"></textarea>


                <div class="d-flex justify-content-start gap-4 align-items-center flex-wrap">
                    <button name="submit" type="submit">hear from experts</button>
                    <div class="socialLinks d-flex mx-md-0 mx-auto gap-2 flex-wrap">
                        <a href="<?php echo $facebook; ?>"><i class="fa fa-facebook"></i></a>
                        <a href="<?php echo $twitter; ?>"><i class="fa fa-twitter"></i></a>
                        <a href="<?php echo $youtube; ?>"><i class="fa fa-youtube-play"></i></a>
                        <a href="<?php echo $linkedin; ?>"><i class="fa fa-linkedin"></i></a>
                        <a href="<?php echo $pinterest; ?>"><i class="fa fa-pinterest-p"></i></a>
                    </div>
                </div>

                <!-- form submission message -->
                <?php if ($formSubmissionError): ?>
                    <h1 class="redBg p-2 text-center fs-4 fw-bold whiteColor">Your Form does'nt Submitted</h1>
                <?php endif; ?>
                <?php if ($formSubmissionSuccess): ?>
                    <h1 class="greenBg p-2 text-center fs-4 fw-bold whiteColor">Your Form Submitted SuccessFully</h1>
                <?php endif; ?>
            </form>
        </div>

        <div class="col-md-6 contactRight py-3">
            <img src="./assets/img/contact/world.webp" alt="world image" srcset="">
            <h1><a href="tel:+<?php echo $phoneNumber1 ?>">+91 <?php echo $phoneNumber1 ?></a></h1>
            <h3><a href="mailto:<?php echo $email1 ?>"></a>
                <?php echo $email1 ?>
            </h3>
            <div class="contactRightContent">
                <p>Ready to speak with a marketing expert?</p>
                <span>Give us a ring or e-mail.</span>
            </div>

            <div class="AboutInContactSection d-flex flex-column gap-3 ">

                <div class="contactContentBox">
                    <div class="iconBox">
                        <i class="fa fa-briefcase" aria-hidden="true"></i>
                    </div>
                    <div class="contentBox">
                        <span>
                            20000+
                        </span>
                        <span>
                            Acounts Handdled
                        </span>
                    </div>
                </div>

                <div class="contactContentBox">
                    <div class="iconBox">
                        <i class="fa fa-users" aria-hidden="true"></i>
                    </div>
                    <div class="contentBox">
                        <span>
                            50+
                        </span>
                        <span>
                            Team of Professionals
                        </span>
                    </div>
                </div>

                <div class="contactContentBox">
                    <div class="iconBox">
                        <i class="fa fa-globe" aria-hidden="true"></i>
                    </div>
                    <div class="contentBox">
                        <span>
                            30+
                        </span>
                        <span>
                            serving Countries
                        </span>
                    </div>
                </div>

                <div class="contactContentBox">
                    <div class="iconBox">
                        <i class="fa fa-handshake-o" aria-hidden="true"></i>
                    </div>
                    <div class="contentBox">
                        <span>
                            99%
                        </span>
                        <span>
                            Client Retntion
                        </span>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
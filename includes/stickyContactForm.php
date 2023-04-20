<!-- get form data and get mail it -->
<?php
$Sname = $Semail = $SphoneNo = $SwebsiteUrl = $Smessage = "";
$SnameErr = $SemailErr = $SphoneNoErr = $SwebsiteUrlErr = $SmessageErr = false;
$SformSubmissionError = false;
$SformSubmissionSuccess = false;
if (isset($_POST['Ssubmit'])) {

    // validate the name field
    if (empty($_POST['Sname'])) {
        $SnameErr = true;
    } else {
        $SnameErr = false;
        $Sname = filter_input(INPUT_POST, 'Sname', FILTER_SANITIZE_SPECIAL_CHARS);
    }

    // validate the name email
    if (empty($_POST['Semail'])) {
        $SemailErr = true;
    } else {
        $SemailErr = false;
        $Semail = filter_input(INPUT_POST, 'Semail', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    // validate the name phoneNo
    if (empty($_POST['SphoneNo'])) {
        $SphoneNoErr = true;
    } else {
        $SphoneNoErr = false;
        $SphoneNo = filter_input(INPUT_POST, 'SphoneNo', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    // validate the name websiteUrl
    if (empty($_POST['SwebsiteUrl'])) {
        $SwebsiteUrlErr = true;
    } else {
        $SwebsiteUrlErr = false;
        $SwebsiteUrl = filter_input(INPUT_POST, 'SwebsiteUrl', FILTER_SANITIZE_SPECIAL_CHARS);
    }

    // validate the name message
    if (empty($_POST['Smessage'])) {
        $SmessageErr = true;
    } else {
        $SmessageErr = false;
        $Smessage = filter_input(INPUT_POST, 'Smessage', FILTER_SANITIZE_SPECIAL_CHARS);
    }

    if ($SnameErr || $SemailErr || $SphoneNoErr || $SwebsiteUrlErr  || $SmessageErr) {
        $SformSubmissionError = true;
    } else {
        //  get the mail by user
        // echo $Sname ,$Semail,$SphoneNo,$SwebsiteUrl,$Smessage;

        // Email information
        $to = "dgusaiwal537@gmail.com";
        $subject = "Contact Form Submission By User";
        $headers = "From: " . $Semail . "\r\n";


        // Compose message
        $email_body = "You have received a new message from your SEO Inda website contact form.\n\n";
        $email_body .= "Name: " . $Sname . "\n";
        $email_body .= "Email: " . $Semail . "\n";
        $email_body .= "Phone: " . $SphoneNo . "\n";
        $email_body .= "websiteURL: " . $SwebsiteUrl . "\n";
        $email_body .= "Message:\n" . $Smessage . "\n\n";



        $sucss = mail($to, $subject, $email_body, $headers);
        if ($sucss) {
            $SformSubmissionSuccess = true;

        } else {
            $SformSubmissionError = true;
        }

    }

}
?>








<div class="stickyContactFormContainer">
    <span class="formtoggleLable">
        <i class="fa fa-check-square" aria-hidden="true"></i> <span>Lets connect</span>
    </span>

    <div class="form">
        <div class="formHead">
            <h3>Leave a Message</h3>
        </div>
        <form class="stickyContactForm" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">

            <input class="form-control <?php echo $SnameErr ? 'is-invalid' : '' ?>" type="text" name="Sname" id=""
                placeholder="Enter Your Name">

            <input class="form-control <?php echo $SemailErr ? 'is-invalid' : '' ?>" type="email" name="Semail" id=""
                placeholder="Enter Your Email">

            <input class="form-control <?php echo $SphoneNoErr ? 'is-invalid' : '' ?>" type="number" name="SphoneNo" id=""
                placeholder="Phone Number">

            <input class="form-control <?php echo $SwebsiteUrlErr ? 'is-invalid' : '' ?>" type="text" name="SwebsiteUrl"
                id="" placeholder="Website URl">

            <textarea class="form-control <?php echo $SmessageErr ? 'is-invalid' : '' ?>" name="Smessage" id="" cols="30"
                rows="2" placeholder="your ideas (optional)"></textarea>

            <button name="Ssubmit" type="submit">Submit</button>


            <!-- form submission message -->
            <?php if ($SformSubmissionError): ?>
                <h1 class="redBg p-2 text-center fs-4 fw-bold whiteColor">Your Form does'nt Submitted</h1>
            <?php endif; ?>
            <?php if ($SformSubmissionSuccess): ?>
                <h1 class="greenBg p-2 text-center fs-4 fw-bold whiteColor">Your Form Submitted SuccessFully</h1>
            <?php endif; ?>
        </form>
    </div>
</div>
<!-- get form data and get mail it -->
<?php
$Sname = $Semail = $SphoneNo = $SwebsiteUrl = $Smessage = "";
$SnameErr = $SemailErr = $SphoneNoErr = $SwebsiteUrlErr = $SmessageErr = false;
$SformSubmissionError = false;
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

    if ($SnameErr || $SemailErr || $SphoneNoErr || $SwebsiteUrlErr || $SmessageErr) {
        $SformSubmissionError = true;
    } else {
        //  get the mail by user
        // echo $Sname ,$Semail,$SphoneNo,$SwebsiteUrl,$Smessage;

        // Email information
        $to = "dgusaiwal537@gmail.com";
        $subject = "Contact Form Submission By User (Inquiry Form)";
        $headers = "From: " . $Semail . "\r\n";


        // Compose message
        $email_body = "You have received a new message from your SEO Inda website contact form.\n\n";
        $email_body .= "Name: " . $Sname . "\n";
        $email_body .= "Email: " . $Semail . "\n";
        $email_body .= "Phone: " . $SphoneNo . "\n";
        $email_body .= "websiteURL: " . $SwebsiteUrl . "\n";
        $email_body .= "Message:\n" . $Smessage . "\n\n";


        // content to send confimation email to the user
        $SuserEmail = $Semail;
        $SsubjectToUser = "Confirmation Email (Inquiry Form)";
        $SheadersToUser = "From: " . $to . "\r\n";
        // Compose message to the user
        $SmessageToUser = "We have Recieved your Email Successfully We Will Contact You within 24 hours";
        $SuserEmailBody = "We have Recieved your Email Successfully.\n\n";
        $SuserEmailBody .= "Company Name: " . "seo service India" . "\n";
        $SuserEmailBody .= "Message:\n" . $SmessageToUser . "\n\n";


        $sucss = mail($to, $subject, $email_body, $headers);
        $userSucss = mail($SuserEmail, $SsubjectToUser, $SuserEmailBody, $SheadersToUser);

        if ($isProductPage) {
            if ($sucss && $userSucss) {
                header("Location:../thankyou.php");
            } else {
                header("Location:../formSubmissionError.php");
            }
        } else {
            if ($sucss && $userSucss) {
                header("Location:thankyou.php");
            } else {
                header("Location:formSubmissionError.php");
            }
        }


    }

}
?>
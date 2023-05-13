<?php
$name = $email = $phoneNo = $websiteUrl = $requirment = $budget = $message = "";
$nameErr = $emailErr = $phoneNoErr = $websiteUrlErr = $budgetErr = $requirmentErr = $messageErr = false;
$formSubmissionError = false;
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
        //  header("location:javascript://history.go(-1)");
    } else {
        //  get the mail by user
        $nameErr = $emailErr = $phoneNoErr = $websiteUrlErr = $budgetErr = $requirmentErr = $messageErr = false;

        // Email information
        $to = "dgusaiwal537@gmail.com";
        $subject = "Contact Form Submission By $name";
        $headers = "From: " . $email . "\r\n";


        // Compose message
        $email_body = "You have received a new message from your SEO India website contact form.\n\n";
        $email_body .= "Name: " . $name . "\n";
        $email_body .= "Email: " . $email . "\n";
        $email_body .= "Phone: " . $phoneNo . "\n";
        $email_body .= "websiteURL: " . $websiteUrl . "\n";
        $email_body .= "budget: " . $budget . "\n";
        $email_body .= "requirment: " . $requirment . "\n";
        $email_body .= "Message:\n" . $message . "\n\n";

        // content to send confimation email to the user
        $userEmail = $email;
        $subjectToUser = "Confirmation Email";
        $headersToUser = "From: " . $to . "\r\n";
        // Compose message to the user
        $messageToUser = "We have Recieved your Email Successfully We Will Contact You within 24 hours";
        $userEmailBody = "We have Recieved your Email Successfully.\n\n";
        $userEmailBody .= "Company Name: " . "seo service India" . "\n";
        $userEmailBody .= "Message:\n" . $messageToUser . "\n\n";


        $sucss = mail($to, $subject, $email_body, $headers);
        $userSucss = mail($userEmail, $subjectToUser, $userEmailBody, $headersToUser);

   
            if ($sucss && $userSucss) {
                header("Location:/thankyou.php");
            } else {
                header("Location:/formSubmissionError.php");
            }
        


    }

}
?>
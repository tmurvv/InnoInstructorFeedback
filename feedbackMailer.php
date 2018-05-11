<?php

    //Get the form fields, removes html tags and whitespace.
    $instructor1 = strip_tags(trim($_POST["instrutor1"]));
    $instructor1 = str_replace(array("\r","\n"),array(" "," "),$instructor1);
    $instructor2 = strip_tags(trim($_POST["instructor2"]));
    $instructor2 = str_replace(array("\r","\n"),array(" "," "),$instructor2);
    $instructor3 = strip_tags(trim($_POST["instructor3"]));
    $instructor3 = str_replace(array("\r","\n"),array(" "," "),$instructor3);
    
    // Check the data.
    // if (empty($name) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //     header("Location: http://www.take2tech.ca/InnoGradSurvey/index.php?success=-1#surveySubmit");
    //     exit;
    // }

    // Set the recipient email address. Update this to YOUR desired email address.
    $recipient = "tmurv@shaw.ca";

    // Set the email subject.
    $subject = "Final Feedback Form";

    // Build the email content.  
    $email_content = "Instructor LIst:\n\n";
    $email_content .= "Instructor1: $instructor1\n";
    $email_content .= "Instructor2: $instructor2\n";
    $email_content .= "Instructor3: $instructor3\n";

    
    // Build the email headers.
    $email_headers = "From: $instructor1 <$instructor2>";

    // Send the email.
    mail($recipient, $subject, $email_content, $email_headers);
    
    // Redirect to the index.html page with success code
    header("Location: http://www.take2tech.ca/InnoTech/InnoFeedTestArea/index.php?success=1#surveySubmit");

?>
<?php

    //Get the form fields, removes html tags and whitespace.
    $instructor1 = strip_tags(trim($_POST["instructor1"]));
    $instructor1 = str_replace(array("\r","\n"),array(" "," "),$instructor1);
    // $instructor2 = strip_tags(trim($_POST["instructor2"]));
    // $instructor2 = str_replace(array("\r","\n"),array(" "," "),$instructor2);
    // $instructor3 = strip_tags(trim($_POST["instructor3"]));
    // $instructor3 = str_replace(array("\r","\n"),array(" "," "),$instructor3);

    $prepared1 = strip_tags(trim($_POST["prepared1"]));
    $prepared1 = str_replace(array("\r","\n"),array(" "," "),$prepared1);
    $knowledgable1 = strip_tags(trim($_POST["knowledgable1"]));
    $knowledgable1 = str_replace(array("\r","\n"),array(" "," "),$knowledgable1);
    $communicate1 = strip_tags(trim($_POST["communicate1"]));
    $communicate1 = str_replace(array("\r","\n"),array(" "," "),$communicate1);
    // $time1 = strip_tags(trim($_POST["time1"]));
    // $time1 = str_replace(array("\r","\n"),array(" "," "),$time1);
    // $fun1 = strip_tags(trim($_POST["fun1"]));
    // $fun1 = str_replace(array("\r","\n"),array(" "," "),$fun1);
    // $feedback1 = strip_tags(trim($_POST["feedback1"]));
    // $feedback1 = str_replace(array("\r","\n"),array(" "," "),$feedback1);
    // $open1 = strip_tags(trim($_POST["open1"]));
    // $open1 = str_replace(array("\r","\n"),array(" "," "),$open1);
    // $respect1 = strip_tags(trim($_POST["respect1"]));
    // $respect1 = str_replace(array("\r","\n"),array(" "," "),$respect1);
    // $overall1 = strip_tags(trim($_POST["overall1"]));
    // $overall1 = str_replace(array("\r","\n"),array(" "," "),$overall1);
    
    // Check the data.
    if (empty($instructor1)) {
        header("Location: http://www.take2tech.ca/InnoTech/InnoFeedTestArea/index.php?success=-1#surveySubmit");
            exit;
    }

    // // if (empty($name) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // //     header("Location: http://www.take2tech.ca/InnoGradSurvey/index.php?success=-1#surveySubmit");
    // //     exit;
    // // }

    // Set the recipient email address. Update this to YOUR desired email address.
    $recipient = "tmurv@shaw.ca";

    //for Testing
    $name = "Inno Student";
    $email = "tmurv@shaw.ca";

    // Set the email subject.
    $subject = "Final Feedback Form";

    // Build the email content.  
    $email_content = "Feedback for $instructor1\n\n";
    $email_content .= "Was well prepared: $prepared1\n";
    $email_content .= "Was knowledgeable: $knowledgeable1\n";
    $email_content .= "Communicated clearly & effectively: $communicate1\n";

    
    // Build the email headers.
    $email_headers = "From: $name <$email>";

    // Send the email.
    mail($recipient, $subject, $email_content, $email_headers);
    
    // Redirect to the index.html page with success code
    header("Location: http://www.take2tech.ca/InnoTech/InnoFeedTestArea/index.php?success=1#surveySubmit");

?>
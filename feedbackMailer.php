<?php

    //Get the form fields, removes html tags and whitespace.

    //Instructor Section
    $instructor1 = strip_tags(trim($_POST["instructor1"]));
    $instructor1 = str_replace(array("\r","\n"),array(" "," "),$instructor1);
    $instructor2 = strip_tags(trim($_POST["instructor2"]));
    $instructor2 = str_replace(array("\r","\n"),array(" "," "),$instructor2);
    $instructor3 = strip_tags(trim($_POST["instructor3"]));
    $instructor3 = str_replace(array("\r","\n"),array(" "," "),$instructor3);

    $prepared1 = strip_tags(trim($_POST["prepared1"]));
    $prepared1 = str_replace(array("\r","\n"),array(" "," "),$prepared1);
    $knowledgable1 = strip_tags(trim($_POST["knowledgable1"]));
    $knowledgable1 = str_replace(array("\r","\n"),array(" "," "),$knowledgable1);
    $communicated1 = strip_tags(trim($_POST["communicated1"]));
    $communicated1 = str_replace(array("\r","\n"),array(" "," "),$communicated1);
    $time1 = strip_tags(trim($_POST["time1"]));
    $time1 = str_replace(array("\r","\n"),array(" "," "),$time1);
    $fun1 = strip_tags(trim($_POST["fun1"]));
    $fun1 = str_replace(array("\r","\n"),array(" "," "),$fun1);
    $feedback1 = strip_tags(trim($_POST["feedback1"]));
    $feedback1 = str_replace(array("\r","\n"),array(" "," "),$feedback1);
    $open1 = strip_tags(trim($_POST["open1"]));
    $open1 = str_replace(array("\r","\n"),array(" "," "),$open1);
    $respect1 = strip_tags(trim($_POST["respect1"]));
    $respect1 = str_replace(array("\r","\n"),array(" "," "),$respect1);
    $overall1 = strip_tags(trim($_POST["overall1"]));
    $overall1 = str_replace(array("\r","\n"),array(" "," "),$overall1);
    
    $prepared2 = strip_tags(trim($_POST["prepared2"]));
    $prepared2 = str_replace(array("\r","\n"),array(" "," "),$prepared2);
    $knowledgable2 = strip_tags(trim($_POST["knowledgable2"]));
    $knowledgable2 = str_replace(array("\r","\n"),array(" "," "),$knowledgable2);
    $communicated2 = strip_tags(trim($_POST["communicated2"]));
    $communicated2 = str_replace(array("\r","\n"),array(" "," "),$communicated2);
    $time2 = strip_tags(trim($_POST["time2"]));
    $time2 = str_replace(array("\r","\n"),array(" "," "),$time2);
    $fun2 = strip_tags(trim($_POST["fun2"]));
    $fun2 = str_replace(array("\r","\n"),array(" "," "),$fun2);
    $feedback2 = strip_tags(trim($_POST["feedback2"]));
    $feedback2 = str_replace(array("\r","\n"),array(" "," "),$feedback2);
    $open2 = strip_tags(trim($_POST["open2"]));
    $open2 = str_replace(array("\r","\n"),array(" "," "),$open2);
    $respect2 = strip_tags(trim($_POST["respect2"]));
    $respect2 = str_replace(array("\r","\n"),array(" "," "),$respect2);
    $overall2 = strip_tags(trim($_POST["overall2"]));
    $overall2 = str_replace(array("\r","\n"),array(" "," "),$overall2);

    $prepared3 = strip_tags(trim($_POST["prepared3"]));
    $prepared3 = str_replace(array("\r","\n"),array(" "," "),$prepared3);
    $knowledgable3 = strip_tags(trim($_POST["knowledgable3"]));
    $knowledgable3 = str_replace(array("\r","\n"),array(" "," "),$knowledgable3);
    $communicated3 = strip_tags(trim($_POST["communicated3"]));
    $communicated3 = str_replace(array("\r","\n"),array(" "," "),$communicated3);
    $time3 = strip_tags(trim($_POST["time3"]));
    $time3 = str_replace(array("\r","\n"),array(" "," "),$time3);
    $fun3 = strip_tags(trim($_POST["fun3"]));
    $fun3 = str_replace(array("\r","\n"),array(" "," "),$fun3);
    $feedback3 = strip_tags(trim($_POST["feedback3"]));
    $feedback3 = str_replace(array("\r","\n"),array(" "," "),$feedback3);
    $open3 = strip_tags(trim($_POST["open3"]));
    $open3 = str_replace(array("\r","\n"),array(" "," "),$open3);
    $respect3 = strip_tags(trim($_POST["respect3"]));
    $respect3 = str_replace(array("\r","\n"),array(" "," "),$respect3);
    $overall3 = strip_tags(trim($_POST["overall3"]));
    $overall3 = str_replace(array("\r","\n"),array(" "," "),$overall3);

    $additionalInstructorComments = trim($_POST["additionalInstructorComments"]);
    
    //staff

    $staff1 = strip_tags(trim($_POST["staff1"]));
    $staff1 = str_replace(array("\r","\n"),array(" "," "),$staff1);
    $staff2 = strip_tags(trim($_POST["staff2"]));
    $staff2 = str_replace(array("\r","\n"),array(" "," "),$staff2);
    $staff3 = strip_tags(trim($_POST["staff3"]));
    $staff3 = str_replace(array("\r","\n"),array(" "," "),$staff3);

    $knowledgableStaff1 = strip_tags(trim($_POST["knowledgableStaff1"]));
    $knowledgableStaff1 = str_replace(array("\r","\n"),array(" "," "),$knowledgableStaff1);
    $availableStaff1 = strip_tags(trim($_POST["availableStaff1"]));
    $availableStaff1 = str_replace(array("\r","\n"),array(" "," "),$availableStaff1);
    $timelyStaff1 = strip_tags(trim($_POST["timelyStaff1"]));
    $timelyStaff1 = str_replace(array("\r","\n"),array(" "," "),$timelyStaff1);
    $usefulStaff1 = strip_tags(trim($_POST["usefulStaff1"]));
    $usefulStaff1 = str_replace(array("\r","\n"),array(" "," "),$usefulStaff1);
    $respectfulStaff1 = strip_tags(trim($_POST["respectfulStaff1"]));
    $respectfulStaff1 = str_replace(array("\r","\n"),array(" "," "),$respectfulStaff1);
    
    $knowledgableStaff2 = strip_tags(trim($_POST["knowledgableStaff2"]));
    $knowledgableStaff2 = str_replace(array("\r","\n"),array(" "," "),$knowledgableStaff2);
    $availableStaff2 = strip_tags(trim($_POST["availableStaff2"]));
    $availableStaff2 = str_replace(array("\r","\n"),array(" "," "),$availableStaff2);
    $timelyStaff2 = strip_tags(trim($_POST["timelyStaff2"]));
    $timelyStaff2 = str_replace(array("\r","\n"),array(" "," "),$timelyStaff2);
    $usefulStaff2 = strip_tags(trim($_POST["usefulStaff2"]));
    $usefulStaff2 = str_replace(array("\r","\n"),array(" "," "),$usefulStaff2);
    $respectfulStaff2 = strip_tags(trim($_POST["respectfulStaff2"]));
    $respectfulStaff2 = str_replace(array("\r","\n"),array(" "," "),$respectfulStaff2);

    $knowledgableStaff3 = strip_tags(trim($_POST["knowledgableStaff3"]));
    $knowledgableStaff3 = str_replace(array("\r","\n"),array(" "," "),$knowledgableStaff3);
    $availableStaff3 = strip_tags(trim($_POST["availableStaff3"]));
    $availableStaff3 = str_replace(array("\r","\n"),array(" "," "),$availableStaff3);
    $timelyStaff3 = strip_tags(trim($_POST["timelyStaff3"]));
    $timelyStaff3 = str_replace(array("\r","\n"),array(" "," "),$timelyStaff3);
    $usefulStaff3 = strip_tags(trim($_POST["usefulStaff3"]));
    $usefulStaff3 = str_replace(array("\r","\n"),array(" "," "),$usefulStaff3);
    $respectfulStaff3 = strip_tags(trim($_POST["respectfulStaff3"]));
    $respectfulStaff3 = str_replace(array("\r","\n"),array(" "," "),$respectfulStaff3);

    $additionalStaffComments = trim($_POST["additionalStaffComments"]);

    //Final comments section

    $speakPosOthers = strip_tags(trim($_POST["speakPosOthers"]));
    $speakPosOthers = str_replace(array("\r","\n"),array(" "," "),$speakPosOthers);
    $nameOptional = strip_tags(trim($_POST["nameOptional"]));
    $nameOptional = str_replace(array("\r","\n"),array(" "," "),$nameOptional);
    $finalComments = trim($_POST["finalComments"]);

    // Check the data.
    // if (empty($instructor1)) {
    //     header("Location: http://www.take2tech.ca/InnoTech/InnoFeedTestArea/index.php?success=-1#surveySubmit");
    //         exit;
    // }

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
    $email_content .= "Was knowledgeable: $knowledgable1\n";
    $email_content .= "Communicated clearly & effectively: $communicated1\n";
    $email_content .= "Used time effectively: $time1\n";
    $email_content .= "Created a fun learning environment: $fun1\n";
    $email_content .= "Provided positive and constructive feedback to students: $feedback1\n";
    $email_content .= "Was open to student feedback & suggestions: $open1\n";
    $email_content .= "Treated students with respect: $respect1\n";
    $email_content .= "Overall Instructor’s Performance (out of 10): $overall1\n";
    
    $email_content .= "\n--------\n\nFeedback for $instructor2\n\n";
    $email_content .= "Was well prepared: $prepared2\n";
    $email_content .= "Was knowledgeable: $knowledgable2\n";
    $email_content .= "Communicated clearly & effectively: $communicated2\n";
    $email_content .= "Used time effectively: $time2\n";
    $email_content .= "Created a fun learning environment: $fun2\n";
    $email_content .= "Provided positive and constructive feedback to students: $feedback2\n";
    $email_content .= "Was open to student feedback & suggestions: $open2\n";
    $email_content .= "Treated students with respect: $respect2\n";
    $email_content .= "Overall Instructor’s Performance (out of 10): $overall2\n";
    
    $email_content .= "\n--------\n\nFeedback for $instructor3\n\n";
    $email_content .= "Was well prepared: $prepared3\n";
    $email_content .= "Was knowledgeable: $knowledgable3\n";
    $email_content .= "Communicated clearly & effectively: $communicated3\n";
    $email_content .= "Used time effectively: $time3\n";
    $email_content .= "Created a fun learning environment: $fun3\n";
    $email_content .= "Provided positive and constructive feedback to students: $feedback3\n";
    $email_content .= "Was open to student feedback & suggestions: $open3\n";
    $email_content .= "Treated students with respect: $respect3\n";
    $email_content .= "Overall Instructor’s Performance (out of 10): $overall3\n";
    
    $email_content .= "\nAdditional Instructor Comments: \n\n$additionalInstructorComments\n";

    //build email content staff

    $email_content .= "\n--------\n\nFeedback for $staff1\n\n";
    $email_content .= "Was knowledgeable & helpful: $knowledgableStaff1\n";
    $email_content .= "Was available & approachable: $availableStaff1\n";
    $email_content .= "Communicated promptly, clearly & effectively: $timelyStaff1\n";
    $email_content .= "Shared useful solutions & resources for any inquiries: $usefulStaff1\n";  
    $email_content .= "Treated students with respect: $respectfulStaff1\n";

    $email_content .= "\n--------\n\nFeedback for $staff2\n\n";
    $email_content .= "Was knowledgeable & helpful: $knowledgableStaff2\n";
    $email_content .= "Was available & approachable: $availableStaff2\n";
    $email_content .= "Communicated promptly, clearly & effectively: $timelyStaff2\n";
    $email_content .= "Shared useful solutions & resources for any inquiries: $usefulStaff2\n";  
    $email_content .= "Treated students with respect: $respectfulStaff2\n";

    $email_content .= "\n--------\n\nFeedback for $staff3\n\n";
    $email_content .= "Was knowledgeable & helpful: $knowledgableStaff3\n";
    $email_content .= "Was available & approachable: $availableStaff3\n";
    $email_content .= "Communicated promptly, clearly & effectively: $timelyStaff3\n";
    $email_content .= "Shared useful solutions & resources for any inquiries: $usefulStaff3\n";  
    $email_content .= "Treated students with respect: $respectfulStaff3\n";

    $email_content .= "\nAdditional Staff Comments: \n\n$additionalStaffComments\n";

    //build email content final section
    $email_content .= "\n\n--------\n\nClosing Section\n\n";   
    $email_content .= "Would you speak positively about this program to others (1 to 10): $speakPosOthers\n";
    $email_content .= "Student Name (Optional): $nameOptional\n";   
    $email_content .= "\nAny Other Addtional Comments About the Program:\n\n$finalComments";

    // Build the email headers.
    $email_headers = "From: $name <$email>";

    // Send the email.
    mail($recipient, $subject, $email_content, $email_headers);
    
    // Redirect to the index.html page with success code
    header("Location: http://www.take2tech.ca/InnoTech/InnoFeedTestArea/index.php?success=1#surveySubmit");

?>
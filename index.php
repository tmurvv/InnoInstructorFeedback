
<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <script type="text/javascript" src="js\script.js"></script>

    <title>InnoTech Feedback Survey</title>

</head>

<body>

    <section class="header">
        <div class="header__topline">
            <img src="img/logo.gif" alt="tech logo image" class="header__topline--logo">
            <ul class="header__topline--mainNav">
                <li class="header__topline--mainNav-item">Go to Survey</li>
                <li class="header__topline--mainNav-item">About</li>
                <li class="header__topline--mainNav-item">Contact</li>
            </ul>
        </div>
        <div class="header__hero">
            <h1 class="header__hero--mainText">
                <span>InnoTech College</span>
            </h1>
            <h2 class="header__hero--subText">
                Final Feedback Survey
            </h2>

        </div>

    </section>
    <section class="survey" id="survey">
        <div class="survey__headingContainer">
            <h2 class="survey__headingContainer--heading">Final Feedback Survey</h2>
            <h4 class="survey__headingContainer--subHeading">Please give each instructor a rating from 1 to 10, with 1 being poor and 10 being excellent:</h4>
        </div>

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

            // Set the recipient email address. Update this to YOUR desired email address.
            $recipient = "tmurv@shaw.ca";

            //for Testing
            $name = "Inno Student";
            $email = "tmurv@shaw.ca";
            $notifytake2tech = "tmurv@shaw.ca";

            // Set the email subject.
            $subject = "Final Feedback Form";

            // Build the email content.  
            $email_content = "Instructor Feedback:\n";
            $email_content .= "\n--------------------\n\nFeedback for $instructor1\n\n";
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
            $email_content .= "\n--------------------\n\nStaff Feedback:\n";
            $email_content .= "\n--------------------\n\nFeedback for $staff1\n\n";
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
            $email_content .= "\n--------------------\n\nClosing Section\n";   
            $email_content .= "\n--------------------\n\nWould you speak positively about this program to others (1 to 10): $speakPosOthers\n";
            $email_content .= "\nStudent Name (Optional): $nameOptional\n";   
            $email_content .= "\nAny Other Addtional Comments About the Program:\n\n$finalComments";

            $notify_content = "This is a notification to take2tech.ca. A Final Feedback survey has been sent to InnoTech College.";

            // Build the email headers.
            $email_headers = "From: 'InnoTech Student' <'tech@take2tech.ca'>";

            // Send the email.
            if (isset($_POST["instructor1"])) {
                if ($instructor1 === "") {
                    echo "<div class=\"survey__submitContainer--response survey__submitContainer--response-fail\">Please fill in the first instructor name box. If not evaluating an instructor, enter n/a.</div>";                    
                }
                if (mail($recipient, $subject, $email_content, $email_headers) && $instructor1 !== "") {
                    //Display success message
                    echo "<div class=\"survey__submitContainer--response survey__submitContainer--response-success\">Success! Your form has been submitted.</div>";

                    //Notify webmaster
                    mail($notifytake2tech, $subject, $notify_content, $email_headers);

                    //Reset input variables to ""
                    $instructor1 = $prepared1 = $knowledgable1 = $communicated1 = $time1 = $fun1 = $feedback1 = $open1 = $respect1 = $overall1 = "";
                    $instructor2 = $prepared2 = $knowledgable2 = $communicated2 = $time2 = $fun2 = $feedback2 = $open2 = $respect2 = $overall2 = "";
                    $instructor3 = $prepared3 = $knowledgable3 = $communicated3 = $time3 = $fun3 = $feedback3 = $open3 = $respect3 = $overall3 = "";
                    $additionalInstructorComments = "";
                
                    $staff1 = $knowledgableStaff1 = $availableStaff1 = $timelyStaff1 = $usefulStaff1 = $respectfulStaff1 = "";
                    $staff2 = $knowledgableStaff2 = $availableStaff2 = $timelyStaff2 = $usefulStaff2 = $respectfulStaff2 = "";
                    $staff3 = $knowledgableStaff3 = $availableStaff3 = $timelyStaff3 = $usefulStaff3 = $respectfulStaff3 = "";
                    $additionalStaffComments = "";

                    $speakPosOthers = $nameOptional = $finalComments = "";
                
                } else {
                    if ($instructor1 !== "") {
                        //Display fail message
                        echo '<div class="survey__submitContainer--response survey__submitContainer--response-fail">Oops... something went wrong.</div>';
                    }
                }            
            }
        ?>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>#survey">

                <!-- <div class="survey__submitContainer--response survey__submitContainer--response-fail"><img class="alert-image" src="../img/alert.jpg">Please fill in the first instructor name box. If not evaluating an instructor, enter 'n/a'.</div>                    -->

            <div class="survey__table">
                <div class="survey__table--row">
                    <div class="survey__table--rowHeading survey__table--rowHeading-row1">
                        <p class="survey__table--rowHeading survey__table--rowHeading-row1Ins">Instructors<p><p>1=poor, 10=excellent</p>
                    </div>
                    <div class="survey__table--colHeading"><input type="text" name="instructor1" value="<?php echo $instructor1;?>" placeholder="Instructor Name"></div>
                    <div class="survey__table--colHeading"><input type="text" name="instructor2" value="<?php echo $instructor2;?>" placeholder="Instructor Name"></div>
                    <div class="survey__table--colHeading"><input type="text" name="instructor3" value="<?php echo $instructor3;?>" placeholder="Instructor Name"></div>
                </div>
                <div class="survey__table--row">
                    <div class="survey__table--rowHeading"> Was well prepared</div>
                    <div class="survey__table--col"><input type="text" name="prepared1" value="<?php echo $prepared1;?>"></div>
                    <div class="survey__table--col"><input type="text" name="prepared2" value="<?php echo $prepared2;?>"></div>
                    <div class="survey__table--col"><input type="text" name="prepared3" value="<?php echo $prepared3;?>"></div>
                </div>
                <div class="survey__table--row">
                    <div class="survey__table--rowHeading">Was knowledgable</div>
                    <div class="survey__table--col"><input type="text" name="knowledgable1" value="<?php echo $knowledgable1;?>"></div>
                    <div class="survey__table--col"><input type="text" name="knowledgable2" value="<?php echo $knowledgable2;?>"></div>
                    <div class="survey__table--col"><input type="text" name="knowledgable3" value="<?php echo $knowledgable3;?>"></div>
                </div>
                <div class="survey__table--row">
                    <div class="survey__table--rowHeading">Communicated clearly & effectively</div>
                    <div class="survey__table--col"><input type="text" name="communicated1" value="<?php echo $communicated1;?>"></div>
                    <div class="survey__table--col"><input type="text" name="communicated2" value="<?php echo $communicated2;?>"></div>
                    <div class="survey__table--col"><input type="text" name="communicated3" value="<?php echo $communicated3;?>"></div>
                </div>
                <div class="survey__table--row">
                    <div class="survey__table--rowHeading">Used time efficiently</div>
                    <div class="survey__table--col"><input type="text" name="time1" value="<?php echo $time1;?>"></div>
                    <div class="survey__table--col"><input type="text" name="time2" value="<?php echo $time2;?>"></div>
                    <div class="survey__table--col"><input type="text" name="time3" value="<?php echo $time3;?>"></div>
                </div>
                <div class="survey__table--row">
                    <div class="survey__table--rowHeading">Created a fun learning environment</div>
                    <div class="survey__table--col"><input type="text" name="fun1" value="<?php echo $fun1;?>"></div>
                    <div class="survey__table--col"><input type="text" name="fun2" value="<?php echo $fun2;?>"></div>
                    <div class="survey__table--col"><input type="text" name="fun3" value="<?php echo $fun3;?>"></div>
                </div>
                <div class="survey__table--row">
                    <div class="survey__table--rowHeading">Provided positive and constructive feedback to students</div>
                    <div class="survey__table--col"><input type="text" name="feedback1" value="<?php echo $feedback1;?>"></div>
                    <div class="survey__table--col"><input type="text" name="feedback2" value="<?php echo $feedback2;?>"></div>
                    <div class="survey__table--col"><input type="text" name="feedback3" value="<?php echo $feedback3;?>"></div>
                </div>
                <div class="survey__table--row">
                    <div class="survey__table--rowHeading">Was open to student feedback & suggestions	</div>
                    <div class="survey__table--col"><input type="text" name="open1" value="<?php echo $open1;?>"></div>
                    <div class="survey__table--col"><input type="text" name="open2" value="<?php echo $open2;?>"></div>
                    <div class="survey__table--col"><input type="text" name="open3" value="<?php echo $open3;?>"></div>
                </div>
                <div class="survey__table--row">
                    <div class="survey__table--rowHeading">Treated students with respect</div>
                    <div class="survey__table--col"><input type="text" name="respect1" value="<?php echo $respect1;?>"></div>
                    <div class="survey__table--col"><input type="text" name="respect2" value="<?php echo $respect2;?>"></div>
                    <div class="survey__table--col"><input type="text" name="respect3" value="<?php echo $respect3;?>"></div>
                </div>
                <div class="survey__table--row">
                    <div class="survey__table--rowHeading">Overall Instructor’s Performance (out of 10)</div>
                    <div class="survey__table--col"><input type="text" name="overall1" value="<?php echo $overall1;?>"></div>
                    <div class="survey__table--col"><input type="text" name="overall2" value="<?php echo $overall2;?>"></div>
                    <div class="survey__table--col"><input type="text" name="overall3" value="<?php echo $overall3;?>"></div>
                </div>
                <div class="survey__table--comments">
                    <label for="instructorComments">Additional Instructor Comments:</label>
                    <textarea name="additionalInstructorComments" placeholder="Please specify instructor name if necessary"><?php echo $additionalInstructorComments;?></textarea>
                </div>
            </div>

            <div class="survey__table">
                <div class="survey__table--row">
                    <div class="survey__table--rowHeading survey__table--rowHeading-row1">
                        <p class="survey__table--rowHeading survey__table--rowHeading-row1Ins">Staff<p><p>1=poor, 10=excellent</p>
                    </div>
                    <div class="survey__table--colHeading"><input type="text" name="staff1" placeholder="Staff Name" value="<?php echo $staff1;?>"></div>
                    <div class="survey__table--colHeading"><input type="text" name="staff2" placeholder="Staff Name" value="<?php echo $staff2;?>"></div>
                    <div class="survey__table--colHeading"><input type="text" name="staff3" placeholder="Staff Name" value="<?php echo $staff3;?>"></div>
                </div>
                <div class="survey__table--row">
                    <div class="survey__table--rowHeading">Was knowledgeable & helpful</div>
                    <div class="survey__table--col"><input type="text" name="knowledgableStaff1" value="<?php echo $knowledgableStaff1;?>"></div>
                    <div class="survey__table--col"><input type="text" name="knowledgableStaff2" value="<?php echo $knowledgableStaff2;?>"></div>
                    <div class="survey__table--col"><input type="text" name="knowledgableStaff3" value="<?php echo $knowledgableStaff3;?>"></div>
                </div>
                <div class="survey__table--row">
                    <div class="survey__table--rowHeading">Was available & approachable</div>
                    <div class="survey__table--col"><input type="text" name="availableStaff1" value="<?php echo $availableStaff1;?>"></div>
                    <div class="survey__table--col"><input type="text" name="availableStaff2" value="<?php echo $availableStaff2;?>"></div>
                    <div class="survey__table--col"><input type="text" name="availableStaff3" value="<?php echo $availableStaff3;?>"></div>
                </div>
                <div class="survey__table--row">
                    <div class="survey__table--rowHeading">Communicated promptly, clearly & effectively</div>
                    <div class="survey__table--col"><input type="text" name="timelyStaff1" value="<?php echo $timelyStaff1;?>"></div>
                    <div class="survey__table--col"><input type="text" name="timelyStaff2" value="<?php echo $timelyStaff2;?>"></div>
                    <div class="survey__table--col"><input type="text" name="timelyStaff3" value="<?php echo $timelyStaff3;?>"></div>
                </div>
                <div class="survey__table--row">
                    <div class="survey__table--rowHeading">Shared useful solutions & resources for any inquiries</div>
                    <div class="survey__table--col"><input type="text" name="usefulStaff1" value="<?php echo $usefulStaff1;?>"></div>
                    <div class="survey__table--col"><input type="text" name="usefulStaff2" value="<?php echo $usefulStaff2;?>"></div>
                    <div class="survey__table--col"><input type="text" name="usefulStaff3" value="<?php echo $usefulStaff3;?>"></div>
                </div>
                <div class="survey__table--row">
                    <div class="survey__table--rowHeading">Treated students with respect</div>
                    <div class="survey__table--col"><input type="text" name="respectfulStaff1" value="<?php echo $respectfulStaff1;?>"></div>
                    <div class="survey__table--col"><input type="text" name="respectfulStaff2" value="<?php echo $respectfulStaff2;?>"></div>
                    <div class="survey__table--col"><input type="text" name="respectfulStaff3" value="<?php echo $respectfulStaff3;?>"></div>
                </div>
                <div class="survey__table--comments">
                    <label for="additionalStaffComments">Additional Staff Comments:</label>
                    <textarea name="additionalStaffComments" placeholder="Please specify staff name if necessary"><?php echo $additionalStaffComments;?></textarea>
                </div>
            </div>
            <div class="survey__table">
                
                <div class="survey__table--speakPositively">
                    <p>Would you speak positively about this program to others <strong>(select)</strong>?</p>
                    <input type="text" style="width:40px;" name="speakPosOthers" value="<?php echo $speakPosOthers?>">
                    <div class="container">                     
                        <p>Buttons not yet implemented</p>
                        <button type="button" class="box" name="overallRating1"><p class="num">10</p></button>
                        <button type="button" class="box" name="overallRating2"><p class="num">9</p></button>
                        <button type="button" class="box" name="overallRating3"><p class="num">8</p></button>
                        <button type="button" class="box" name="overallRating4"><p class="num">7</p></button>
                        <button type="button" class="box" name="overallRating5"><p class="num">6</p></button>
                        <button type="button" class="box" name="overallRating6"><p class="num">5</p></button>
                        <button type="button" class="box" name="overallRating7"><p class="num">4</p></button>
                        <button type="button" class="box" name="overallRating8"><p class="num">3</p></button>
                        <button type="button" class="box" name="overallRating9"><p class="num">2</p></button>
                        <button type="button" class="box" name="overallRating10"><p class="num">1</p></button>
                    </div>
                    <div class="survey__table--speakPositively-label">
                        <div>Yes, most definitely!</div>
                        <div>No, not at all.</div>
                    </div> 

                </div>
            </div>

            <div class="survey__table">               
                <div class="survey__table--nameOptional">
                    <p>Student Name <strong>(Optional):</strong><input type:"text" name="nameOptional" placeholder="student name (optional)" value="<?php echo $nameOptional?>"></p>                    
                    <div>Any other additional comments about the Program?</div>
                    <textarea placeholder="additional comments" name="finalComments"><?php echo $finalComments;?></textarea>
                </div>
            </div>

            <div class="survey__submitContainer" id="surveySubmit">
                <input type= "submit" class="survey__submitContainer--btn"></input>               
            </div>
        </form>
    </section>

    <section class="about" id="about">
        <div class="about__container">
            <h2>About this form</h2>
            <p>This form was created by
                <a href="https://www.linkedin.com/in/tisha-murvihill-tech" target="_blank">Tisha Murvihill</a>, a graduate of
                <a href="https://www.innotechcollege.com" target="_blank">InnoTech College</a> in Calgary, Alberta, Canada. It is written in HTML5, CSS, JavaScript, and PHP. The submit
                button sends an e-mail to the client with the details of each survey submission. Tisha can be reached at
                <a href="http://www.take2tech.ca" target="_blank">tech@take2tech.ca</a>.</p>
            <br>
        </div>
    </section>

    <footer class="footer">
        <div class="footer__topRow">
            <ul class="footer__topRow--menu">
                <li>
                    <a href="#top">Home</a>
                </li>
                <li>
                    <a href="#survey">Grad Survey</a>
                </li>
                <li>
                    <a href="#about">About</a>
                </li>
            </ul>


            <ul class="footer__topRow--contact">
                <li>
                    <a href="http://www.linkedin.com/in/tisha-murvihill-tech" target="_blank">
                        <img src="img/linkedIn.jpg" alt="linkedIn icon" class="footer__contact--linkedImage">
                    </a>
                </li>
                <li>
                    <a href="http://www.take2tech.ca" target="_blank">www.take2tech.ca</a>
                </li>
            </ul>
        </div>

        <p class="footer__copy">&copy; 2018 by take2tech.ca. All rights reserved.</p>



    </footer>
</body>

</html>
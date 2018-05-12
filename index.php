
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
    <section class="survey">
        <div class="survey__headingContainer">
            <h2 class="survey__headingContainer--heading">Final Feedback Survey</h2>
            <h4 class="survey__headingContainer--subHeading">Please give each instructor a rating from 1 to 10, with 1 being poor and 10 being excellent:</h4>
        </div>
        <form method="post" action="feedbackMailer.php">

            <div class="survey__table">
                <div class="survey__table--row">
                    <div class="survey__table--rowHeading survey__table--rowHeading-row1">
                        <p class="survey__table--rowHeading survey__table--rowHeading-row1Ins">Instructors<p><p>1=poor, 10=excellent</p>
                    </div>
                    <div class="survey__table--colHeading"><input type="text" name="instructor1" placeholder="Instructor Name"></div>
                    <div class="survey__table--colHeading"><input type="text" name="instructor2" placeholder="Instructor Name"></div>
                    <div class="survey__table--colHeading"><input type="text" name="instructor3" placeholder="Instructor Name"></div>
                </div>
                <div class="survey__table--row">
                    <div class="survey__table--rowHeading"> Was well prepared</div>
                    <div class="survey__table--col"><input type="text" name="prepared1"></div>
                    <div class="survey__table--col"><input type="text" name="prepared2"></div>
                    <div class="survey__table--col"><input type="text" name="prepared3"></div>
                </div>
                <div class="survey__table--row">
                    <div class="survey__table--rowHeading">Was knowledgable</div>
                    <div class="survey__table--col"><input type="text" name="knowledgable1"></div>
                    <div class="survey__table--col"><input type="text" name="knowledgable2"></div>
                    <div class="survey__table--col"><input type="text" name="knowledgable3"></div>
                </div>
                <div class="survey__table--row">
                    <div class="survey__table--rowHeading">Communicated clearly & effectively</div>
                    <div class="survey__table--col"><input type="text" name="communicated1"></div>
                    <div class="survey__table--col"><input type="text" name="communicated2"></div>
                    <div class="survey__table--col"><input type="text" name="communicated3"></div>
                </div>
                <div class="survey__table--row">
                    <div class="survey__table--rowHeading">Used time efficiently</div>
                    <div class="survey__table--col"><input type="text" name="time1"></div>
                    <div class="survey__table--col"><input type="text" name="time2"></div>
                    <div class="survey__table--col"><input type="text" name="time3"></div>
                </div>
                <div class="survey__table--row">
                    <div class="survey__table--rowHeading">Created a fun learning environment</div>
                    <div class="survey__table--col"><input type="text" name="fun1"></div>
                    <div class="survey__table--col"><input type="text" name="fun2"></div>
                    <div class="survey__table--col"><input type="text" name="fun3"></div>
                </div>
                <div class="survey__table--row">
                    <div class="survey__table--rowHeading">Provided positive and constructive feedback to students</div>
                    <div class="survey__table--col"><input type="text" name="feedback1"></div>
                    <div class="survey__table--col"><input type="text" name="feedback2"></div>
                    <div class="survey__table--col"><input type="text" name="feedback3"></div>
                </div>
                <div class="survey__table--row">
                    <div class="survey__table--rowHeading">Was open to student feedback & suggestions	</div>
                    <div class="survey__table--col"><input type="text" name="open1"></div>
                    <div class="survey__table--col"><input type="text" name="open2"></div>
                    <div class="survey__table--col"><input type="text" name="open3"></div>
                </div>
                <div class="survey__table--row">
                    <div class="survey__table--rowHeading">Treated students with respect</div>
                    <div class="survey__table--col"><input type="text" name="respect1"></div>
                    <div class="survey__table--col"><input type="text" name="respect2"></div>
                    <div class="survey__table--col"><input type="text" name="respect3"></div>
                </div>
                <div class="survey__table--row">
                    <div class="survey__table--rowHeading">Overall Instructor’s Performance (out of 10)</div>
                    <div class="survey__table--col"><input type="text" name="overall1"></div>
                    <div class="survey__table--col"><input type="text" name="overall2"></div>
                    <div class="survey__table--col"><input type="text" name="overall3"></div>
                </div>
                <div class="survey__table--comments">
                    <label for="instructorComments">Additional Instructor Comments:</label>
                    <textarea name="additionalInstructorComments" placeholder="Please specify instructor if necessary"></textarea>
                </div>


            </div>

            <div class="survey__table">
                <div class="survey__table--row">
                    <div class="survey__table--rowHeading survey__table--rowHeading-row1">
                        <p class="survey__table--rowHeading survey__table--rowHeading-row1Ins">Staff<p><p>1=poor, 10=excellent</p>
                    </div>
                    <div class="survey__table--colHeading"><input type="text" name="staff1" placeholder="Staff Name"></div>
                    <div class="survey__table--colHeading"><input type="text" name="staff2" placeholder="Staff Name"></div>
                    <div class="survey__table--colHeading"><input type="text" name="staff3" placeholder="Staff Name"></div>
                </div>
                <div class="survey__table--row">
                    <div class="survey__table--rowHeading">Was knowledgeable & helpful</div>
                    <div class="survey__table--col"><input type="text" name="knowledgableStaff1"></div>
                    <div class="survey__table--col"><input type="text" name="knowledgableStaff2"></div>
                    <div class="survey__table--col"><input type="text" name="knowledgableStaff3"></div>
                </div>
                <div class="survey__table--row">
                    <div class="survey__table--rowHeading">Was available & approachable</div>
                    <div class="survey__table--col"><input type="text" name="availableStaff1"></div>
                    <div class="survey__table--col"><input type="text" name="availableStaff2"></div>
                    <div class="survey__table--col"><input type="text" name="availableStaff3"></div>
                </div>
                <div class="survey__table--row">
                    <div class="survey__table--rowHeading">Communicated promptly, clearly & effectively</div>
                    <div class="survey__table--col"><input type="text" name="timelyStaff1"></div>
                    <div class="survey__table--col"><input type="text" name="timelyStaff2"></div>
                    <div class="survey__table--col"><input type="text" name="timelyStaff3"></div>
                </div>
                <div class="survey__table--row">
                    <div class="survey__table--rowHeading">Shared useful solutions & resources for any inquiries</div>
                    <div class="survey__table--col"><input type="text" name="usefulStaff1"></div>
                    <div class="survey__table--col"><input type="text" name="usefulStaff2"></div>
                    <div class="survey__table--col"><input type="text" name="usefulStaff3"></div>
                </div>
                <div class="survey__table--row">
                    <div class="survey__table--rowHeading">Treated students with respect</div>
                    <div class="survey__table--col"><input type="text" name="respectfulStaff1"></div>
                    <div class="survey__table--col"><input type="text" name="respectfulStaff2"></div>
                    <div class="survey__table--col"><input type="text" name="respectfulStaff3"></div>
                </div>
                <div class="survey__table--comments">
                    <label for="additionalStaffComments">Additional Staff Comments:</label>
                    <textarea name="additionStaffComments" placeholder="Please specify staff if necessary"></textarea>
                </div>
            </div>
            <div class="survey__table">
                
                <div class="survey__table--speakPositively">
                    <p>Would you speak positively about this program to others <strong>(select)</strong>?</p>
                    <div class="container">

                        <input type="text" style="width:40px;" name="speakPosOthers">
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
                    <p>Student Name <strong>(Optional):</strong><input type:"text" name="nameOptional" placeholder="name"></p>                    
                    <div>Any other additional comments about the Program?</div>
                    <textarea placeholder="additional comments" name="finalComments"></textarea>
                </div>
            </div>

            <div class="survey__submitContainer" id="surveySubmit">
                <input type= "submit" class="survey__submitContainer--btn"></input>
                
                <?php
                    if($_GET["success"] == 1) {
                        echo "<div class=\"survey__submitContainer--response survey__submitContainer--response-success\">Success! Your form has been submitted.</div>";
                    }

                    if($_GET["success"] == -1) {
                        echo "<div class=\"survey__submitContainer--response survey__submitContainer--response-fail\">Oops... something went wrong.</div>";
                    }                               
                ?>
                
            </div>
        </form>
    </section>

    <section class="section-about" id="about">
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
<!-- Final Feedback Survey
Please give each instructor a rating from 1 to 10, with 1 being poor and 10 being excellent:
	NAME	NAME	NAME
Was well prepared			
Was knowledgeable			
Communicated clearly & effectively			
Used time efficiently			
Created a fun learning environment			
Provided positive and constructive feedback to students			
Was open to student feedback & suggestions			
Treated students with respect			
Overall Instructor’s Performance (out of 10)			

Additional comments:


Please give each staff a rating from 1 to 10, with 1 being poor and 10 being excellent:
	NAME	NAME	NAME
Was knowledgeable & helpful			
Was available & approachable			
Communicated promptly, clearly & effectively			
Shared useful solutions & resources for any inquiries			
Treated students with respect			

Additional comments:


Would you speak positively about this program to others (circle one)?
10 --- 9 --- 8 --- 7 --- 6 --- 5 --- 4 --- 3 --- 2 --- 1
Yes, most definitely!						       No, not at all.

Student Name (Optional): ________________________
We may reach out to you for further comments or a testimonial for the program
Any Other Additional Comments About the Program?

Thank you, we greatly appreciate your feedback!   -->
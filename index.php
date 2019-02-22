<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Untitled Document</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <style>
        .messerr{
            color:red;
            margin: 0;
            padding: 0;
            font-size: 13px;
            display: block;
            text-align: center;
            font-family: "Ink Free";
            font-weight: bolder;
        }
    </style>
</head>
<!--$firstnameerr=$lastnameerr=$phoneerr=$departerr=$emailerr=$querr=$univererr="";-->
<body>

    <div class="container">
        <div class="logo">
            <img src="images/logo-white.png">
        </div>
        <p class="welcome">Welcome to our Recruitment Form</p>
        <div class="recbox">
            <h2>General Questions</h2>
            <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" name="info" id="info">
                <div class="inputBox">
                    <label>First Name</label>
                    <input type="text" name="fname" value="" required>
                    <span class="messerr"><?php echo $firstnameerr ;?></span>
                </div>
                <div class="inputBox">
                    <label>Last Name</label>
                    <input type="text" name="lname" value="" required>
                    <span class="messerr"><?php echo $lastnameerr;?></span>
                </div>
                <div class="inputBox">
                    <label>Email</label>
                    <input type="text" name="email" value="" required>
                    <span class="messerr"><?php echo $emailerr ;?></span>
                </div>
                <div class="inputBox">
                    <label>Phone</label>
                    <input type="text" name="phone" required>
                    <span class="messerr"><?php echo $phoneerr ;?></span>
                </div>
                <div class="inputBox">
                    <label>University</label>
                    <input type="text" name="university" required>
                    <span class="messerr"><?php echo $univererr ;?></span>
                </div>
                <div class="inputBox">
                    <label>Department</label>
                    <input type="text" name="department" required>
                    <span class="messerr"><?php echo $departerr ;?></span>
                </div>
                <div class="inputBox">
                    <label>Academic year</label>
                    <div class="select">
                        <select name="years" required>
                           <option>-------</option>
                            <option>1st year</option>
                            <option>2nd year</option>
                            <option>3rd year</option>
                            <option>4th year</option>
                        </select>
                    </div>
                </div>
                <div class="inputBox">
                    <label>How did you know about us</label>
                    <div class="select">
                        <select name="relation" required>
                            <option>-------</option>
                            <option>Friends</option>
                            <option>Facebook</option>
                            <option>University</option>
                            <option>Others</option>
                        </select>
                    </div>
                </div>
            </form>
        </div>
        <div class="comBox">

            <p>Select Your<br>Committee</p>

            <label>
                <input type="radio" name="committee" form="info" value="pr" onclick="showCommitteeQuestions('pr')">
                <span>PR</span>
            </label>
            <div class="comQuestions" id="pr">
                <h2>Committee Questions</h2>
                <div class="textBox">
                    <label>Why do you choose to join (PR &amp; Logistics) committee specifically?</label>
                    <textarea name="que1" form="info"></textarea>

                </div>
                <div class="textBox">
                    <label>In your opinion, what’re the Qualifications that must the PR member have?</label>
                    <textarea name="que2" form="info"></textarea>

                </div>
                <div class="textBox">
                    <label>What do you expect to add to (PR &amp; Logistics) committee?</label>
                    <textarea name="que3" form="info"></textarea>

                </div>
                <div class="textBox">
                    <label>What do you Know about FR ?</label>
                    <textarea name="que4" form="info"></textarea>
    `
                </div>
            </div>
            <!----------------------------------------->
            <label>
                <input type="radio" name="committee" form="info" value="hr" onclick="showCommitteeQuestions('hr')">
                <span>HR</span>
            </label>
            <div class="comQuestions" id="hr">
                <h2>Committee Questions</h2>
                <div class="textBox">
                    <label>Why do you choose to join (HR) committee specifically?</label>
                    <textarea name="que1" form="info"></textarea>
                </div>
                <div class="textBox">
                    <label>What do know about the importance of (HR department) at any organization?</label>
                    <textarea name="que2" form="info"></textarea>
                </div>
                <div class="textBox">
                    <label>What is the HR’s cycle?</label>
                    <textarea name="que3" form="info"></textarea>
                </div>
                <div class="textBox">
                    <label>What are the different types of interviews?</label>
                    <textarea name="que4" form="info"></textarea>
                </div>
            </div>
            <!----------------------------------------->
            <label>
                <input type="radio" name="committee" form="info" value="social" onclick="showCommitteeQuestions('social')">
                <span>Social Media</span>
            </label>
            <div class="comQuestions" id="social">
                <h2>Committee Questions</h2>
                <div class="textBox">
                    <label>Why do you choose to join (Social Media Marketing) committee specifically?</label>
                    <textarea name="que1" form="info"></textarea>
                </div>
                <div class="textBox">
                    <label>What do know about Online Marketing and its weapons?</label>
                    <textarea name="que2" form="info"></textarea>
                </div>
                <div class="textBox">
                    <label>What’s your English level?</label>
                    <textarea name="que3" form="info"></textarea>
                </div>
            </div>
            <!----------------------------------------->
            <label>
                <input type="radio" name="committee" form="info" value="media" onclick="showCommitteeQuestions('media')">
                <span>Media</span>
            </label>
            <div class="comQuestions" id="media">
                <h2>Committee Questions</h2>
                <div class="textBox">
                    <label>Why do you choose to join (Media) committee specifically?</label>
                    <textarea name="que1" form="info"></textarea>
                </div>
                <div class="textBox">
                    <label>Which designing programs can you use?</label>
                    <textarea name="que2" form="info"></textarea>
                </div>
                <div class="textBox">
                    <label>What is the difference between pixel and vector?</label>
                    <textarea name="que3" form="info"></textarea>
                </div>
                <div class="textBox">
                    <label>What do you expect to add to Media committee?</label>
                    <textarea name="que4" form="info"></textarea>
                </div>
            </div>
            <!----------------------------------------->
            <label>
                <input type="radio" name="committee" form="info" value="java" onclick="showCommitteeQuestions('java')">
                <span>Java</span>
            </label>
            <div class="comQuestions" id="java">
                <h2>Committee Questions</h2>
                <div class="textBox">
                    <label>Why do you choose to join (JAVA) committee specifically?</label>
                    <textarea name="que1" form="info"></textarea>
                </div>
                <div class="textBox">
                    <label>What is your experience in JAVA or any other programming language?</label>
                    <textarea name="que2" form="info"></textarea>
                </div>
                <div class="textBox">
                    <label>What do you know about uses or applications of JAVA programming?</label>
                    <textarea name="que3" form="info"></textarea>
                </div>
                <div class="textBox">
                    <label>What do know about Desktop Applications? Give examples</label>
                    <textarea name="que4" form="info"></textarea>
                </div>
            </div>
            <!----------------------------------------->
            <label>
                <input type="radio" name="committee" form="info" value="android" onclick="showCommitteeQuestions('android')">
                <span>Android</span>
            </label>
            <div class="comQuestions" id="android">
                <h2>Committee Questions</h2>
                <div class="textBox">
                    <label>Why do you choose to join (Android) committee specifically?</label>
                    <textarea name="que1" form="info"></textarea>
                </div>
                <div class="textBox">
                    <label>What’re the constructors in JAVA?</label>
                    <textarea name="que2" form="info"></textarea>
                </div>
                <div class="textBox">
                    <label>What’s Polymorphism?</label>
                    <textarea name="que3" form="info"></textarea>
                </div>
                <div class="textBox">
                    <label>What do know about Overloading and Overriding methods?</label>
                    <textarea name="que4" form="info"></textarea>
                </div>
            </div>
            <!----------------------------------------->
            <label>
                <input type="radio" name="committee" form="info" value="python" onclick="showCommitteeQuestions('python')">
                <span>Python</span>
            </label>
            <div class="comQuestions" id="python">
                <h2>Committee Questions</h2>
                <div class="textBox">
                    <label>What do you expect to add to Python committee?</label>
                    <textarea name="que1" form="info"></textarea>
                </div>
                <div class="textBox">
                    <label>Do you have any Experience in programming? If yes, Mention them</label>
                    <textarea name="que2" form="info"></textarea>
                </div>
                <div class="textBox">
                    <label>Have you taken any online courses before? If yes, Mention them</label>
                    <textarea name="que3" form="info"></textarea>
                </div>
                <div class="textBox">
                    <label>Which Python libraries do you know?</label>
                    <textarea name="que4" form="info"></textarea>
                </div>
            </div>
            <!----------------------------------------->
            <label>
                <input type="radio" name="committee" form="info" value="web" onclick="showCommitteeQuestions('web')">
                <span>Web</span>
            </label>
            <div class="comQuestions" id="web">
                <h2>Committee Questions</h2>
                <div class="textBox">
                    <label>Why do you choose to join (Web) committee specifically?</label>
                    <textarea name="que1" form="info"></textarea>
                </div>
                <div class="textBox">
                    <label>HTML is brief to ..?</label>
                    <textarea name="que2" form="info"></textarea>
                </div>
                <div class="textBox">
                    <label>What do you know about Grid System ?</label>
                    <textarea name="que3" form="info"></textarea>
                </div>
                <div class="textBox">
                    <label>What is the difference between class and id ?</label>
                    <textarea name="que4" form="info"></textarea>
                </div>
            </div>
            <!----------------------------------------->
            <input type="submit" name="submit" form="info" value="Submit" id="submit">
            <span class="messerr"><?php echo $querr ;?></span>
        </div>
    </div>
    <!------------------------------------------------->
    <div id="particles-js"></div>
    <script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous">
    </script>
    <script src="js/particles.js"></script>
    <script src="js/app.js"></script>
    <script src="js/main.js"></script>
</body>

</html>

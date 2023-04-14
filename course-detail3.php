<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile App Development | Excellent Digital Express Limited</title>
    <link href="images/favicon.png" rel="icon">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/mobile-styles.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

    

    <!--Navigation-->
    <nav class="hide">
    <div onclick="window.location.href='index.php'">
            <img src="images/favicon.png" alt="">
            <label><h4>Excellent Digital Express Limited</h4></label>
        </div>

        <div class="navigation">
            <ul>
                <img src="icons/close.svg" id="menu-close" alt="">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a class="active" href="courses.php">Courses</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
            <img src="images/menu.png" id="menu-btn" alt="">
        </div>
    </nav>

    <section id="course-inner" class="hide">
        <div class="overview">
            <h2>Enroll For Our Popular Courses and Skill Up</h2>
            <img class="course-img" src="images/mobiledev.jpg" alt="">
        
        <div class="course-head hide">
            <div class="c-name">
                <h2>Mobile App Development</h2>
                <div class="star">
                    <img src="icons/star.svg" class="icons" alt="">
                    <img src="icons/star.svg" class="icons" alt="">
                    <img src="icons/star.svg" class="icons" alt="">
                    <img src="icons/star.svg" class="icons" alt="">
                    <img src="icons/star.svg" class="icons" alt="">
                </div>
            </div>
            <span>N200,000</span>
        </div>
        <h3>3 Month(s)</h3>
        <p>Build a career in mobile application development. 
            Learn how to build a mobile app that works across platforms such as Android and iOS.
        </p>
        <h3 class="hide">Course Overview</h3>
        <p class="hide">
        React Native is among the most popular frameworks for building native mobile 
        applications. It combines React and JavaScript technologies and allows developers 
        to build applications across platforms paving the way for more seamless 
        interaction between teams.
        <br><br>
        Our comprehensive React Native classes have been designed to give you the maximum 
        learning benefit. The React Native course is conducted by trainers who have years 
        of industry experience.
        </p>
        <hr>
        <div class="course-flex">
            <div>
                <h3 class="hide">Objectives</h3>
                <p class="hide">
                    <p><img src="icons/circle-check.svg" class="icons" alt=""> How to build Mobile Apps with React Native</p>
                    <p><img src="icons/circle-check.svg" class="icons" alt=""> Master the React Native environment</p>
                    <p><img src="icons/circle-check.svg" class="icons" alt=""> Learn to make reusable components</p>
                    <p><img src="icons/circle-check.svg" class="icons" alt=""> Build attractive mobile apps</p>
                    <p><img src="icons/circle-check.svg" class="icons" alt=""> Publish your apps on Apple and Google Play Store</p>

                </p>
            </div>
            <div>
                <h3 class="hide">Benefits</h3>
                <p class="hide">
                    <p><img src="icons/circle-check.svg" class="icons" alt=""> Opportunity to get hired by multinational companies</p>
                    <p><img src="icons/circle-check.svg" class="icons" alt=""> Opportunity to increase your earning after the training</p>
                    <p><img src="icons/circle-check.svg" class="icons" alt=""> Certificate for every participant</p>
                    <p><img src="icons/circle-check.svg" class="icons" alt=""> 100% practical class</p>
                    <p><img src="icons/circle-check.svg" class="icons" alt=""> Experienced and competent facilitators</p>

                </p>
            </div>
        </div>
    </div>
    <form action="admin/requestscript.php" method="post">
        <div class="form hide">
        <h3>Send Us a Message NOW!</h3>
        <input type="text" placeholder="Name" name="name">
        <input type="text" placeholder="Email" name="email">
        <input type="text" placeholder="Phone no." name="phone">
        <textarea name="message" cols="27" rows="6" placeholder="Write short message..."></textarea>
        <div class="btn">
            <input class="brown" type="submit" name="submit"><br>
            <b>
                    <span>Excellent Digital Express Limited</span><br>
                        <img src="icons/location.svg" width="14px" height="14px" alt="">
                        <span>Head Office: Peace Plaza 155 NTA Road, Mgbuoba, Port Harcourt</span><br>
                        <img src="icons/location.svg" width="14px" height="14px" alt="">
                        <span>Branch Office: 59 Asiri Plaza, Ozuoba, By Ozuoba Market, Port Harcourt</span><br>
                    </b>
        </div>
    </div>
    </form>
    <hr>
    
    </section>

    <!--Footer-->
    <?php
    include 'footer.php';
    ?>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script src="js/main.js"></script>

</body>
</html>
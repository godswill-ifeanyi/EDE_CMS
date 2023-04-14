<?php

require_once 'database.php';

$id = $_GET['blog_id'];

$sql = "SELECT * FROM blogs WHERE id = '$id' ";

$result = mysqli_query($conn, $sql);

$info =$result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full Stack Web Development | Excellent Digital Express Limited</title>
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
            <img class="course-img" src="images/webdev.jpg" alt="">
        
        <div class="course-head hide">
            <div class="c-name">
                <h2>Full Stack Web Development</h2>
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
        <h3>6 Month(s)</h3>
        <p>With the technology boom, companies are looking for developers that can fulfil more than
        one role, instead of having to hire multiple developers and increase their costs. 
        So here’s a seat for you.
        </p>
        <h3 class="hide">Course Overview</h3>
        <p class="hide">
        This Full-Stack web development training course covers the latest Web programming 
        and Scripting languages. The course is designed to equip individuals with the 
        knowledge and skills to develop rich Internet applications, portals, and any web 
        application that requires database and programming.
        <br><br>
        Our Full-Stack web development training enables participants to learn web programming (coding) from scratch (beginner to advanced) and build a portfolio of websites and web application using both frontend and backend web technologies. Training is delivered by highly experienced
        instructors and industrial experts at a very conducive learning environment.
        </p>
        <hr>
        <div class="course-flex">
            <div>
                <h3 class="hide">Objectives</h3>
                <p class="hide">
                    <p><img src="icons/circle-check.svg" class="icons" alt=""> Frontend and Backend Web Technologies</p>
                    <p><img src="icons/circle-check.svg" class="icons" alt=""> Master popular Web Application Frameworks</p>
                    <p><img src="icons/circle-check.svg" class="icons" alt=""> How to write reuseable and smart Codes.</p>
                    <p><img src="icons/circle-check.svg" class="icons" alt=""> Build fast and secured Web Applications</p>
                    <p><img src="icons/circle-check.svg" class="icons" alt=""> Deploy your Web Applications</p>

                </p>
            </div>
            <div>
                <h3 class="hide">Benefits</h3>
                <p class="hide">
                    <p><img src="icons/circle-check.svg" class="icons" alt=""> Complete web application development projects</p>
                    <p><img src="icons/circle-check.svg" class="icons" alt=""> FREE PDF study manual with all the code samples written throughout the course</p>
                    <p><img src="icons/circle-check.svg" class="icons" alt=""> Certificate for every participant</p>
                    <p><img src="icons/circle-check.svg" class="icons" alt=""> Free Software Setup</p>
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
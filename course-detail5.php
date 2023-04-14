<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Computer Operation | Excellent Digital Express Limited</title>
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
            <img class="course-img" src="images/basic.png" alt="">
        
        <div class="course-head hide">
            <div class="c-name">
                <h2>Basic to Advanced Level Computer Operation</h2>
                <div class="star">
                    <img src="icons/star.svg" class="icons" alt="">
                    <img src="icons/star.svg" class="icons" alt="">
                    <img src="icons/star.svg" class="icons" alt="">
                    <img src="icons/star.svg" class="icons" alt="">
                    <img src="icons/star.svg" class="icons" alt="">
                </div>
            </div>
            <span>N50,000</span>
        </div>
        <h3>3 Month(s)</h3>
        <p>In today’s world it has become absolutely paramount for individuals 
            of this day and age to acquire the basic IT skills to proficiently use a computer.
        </p>
        <h3 class="hide">Course Overview</h3>
        <p class="hide">
        This certificate course is designed to identify, develop and certify individuals with 
        requisite skills and knowledge to utilize a computer in the office, home and 
        school environments. It provides people of all ages with the means to increase 
        their IT skills, prove their expertise, 
        improve their academic performance and advance their professional careers.
        <br><br>
        No knowledge of computer and/or IT is required to attend this program.
        </p>
        <hr>
        <div class="course-flex">
            <div>
                <h3 class="hide">Objectives</h3>
                <p class="hide">
                    <p><img src="icons/circle-check.svg" class="icons" alt=""> IT Basics & Keyboard Basics</p>
                    <p><img src="icons/circle-check.svg" class="icons" alt=""> Master Microsoft Windows</p>
                    <p><img src="icons/circle-check.svg" class="icons" alt=""> Microsoft Word, Microsoft Excel & Microsoft PowerPoint,</p>
                    <p><img src="icons/circle-check.svg" class="icons" alt=""> ICT Fundamentals</p>
                    <p><img src="icons/circle-check.svg" class="icons" alt=""> Internet,Social Medi & lots more...</p>

                </p>
            </div>
            <div>
                <h3 class="hide">Benefits</h3>
                <p class="hide">
                    <p><img src="icons/circle-check.svg" class="icons" alt=""> The participant will be ready to handle and easily learn any other advance Computer Package</p>
                    <p><img src="icons/circle-check.svg" class="icons" alt=""> Opportunity to get hired as a Computer Operator</p>
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
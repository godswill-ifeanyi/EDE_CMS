<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Marketing Course | Excellent Digital Express Limited</title>
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
            <img class="course-img" src="images/digital-marketing.png" alt="">
        
        <div class="course-head hide">
            <div class="c-name">
                <h2>The Digital Marketing Expert Course</h2>
                <div class="star">
                    <img src="icons/star.svg" class="icons" alt="">
                    <img src="icons/star.svg" class="icons" alt="">
                    <img src="icons/star.svg" class="icons" alt="">
                    <img src="icons/star.svg" class="icons" alt="">
                    <img src="icons/star.svg" class="icons" alt="">
                </div>
            </div>
            <span>N70,000</span>
        </div>
        <h3>3 Month(s)</h3>
        <p>This course is designed to provide a one stop solution for anyone looking to learn 
            all the important concepts and techniques for digital marketing. You will learn the importance of SEO and will learn about the major techniques for selling on the internet. Master the social media and learn all about optimizing your online ads. You will learn to create website that are built to enable usability
            & sales, email marketing, analytics and social media marketing.
        </p>
        <h3 class="hide">Course Overview</h3>
        <p class="hide">
        Introduction to Digital Marketing, Digital Marketing Planning and Strategy, 
        Content Marketing, Social Media Marketing, Pay Per Click (PPC) Management & Optimization, 
        Google Ads – (Search Advertising & Display Advertising), Google Analytics, Search Engine 
        Optimization (SEO), Email Marketing, Sales Funnel, Copy 
        Writing, Video Marketing, Introduction To Affiliate Marketing and Specialization/Niches.
        <br><br>
        <b>This course is for:</b> Web Designers, Fresh graduates, Business Owners (Entrepreneurs), 
        Web Developers, Online Marketers, Bloggers, Markers who are interested in Online
        Marketing, Working 
        Professionals, Job Seekers, Students and anyone who wants to become a Digital Marketer.
        </p>
        <hr>
        <div class="course-flex">
            <div>
                <h3 class="hide">Objectives</h3>
                <p class="hide">
                    <p><img src="icons/circle-check.svg" class="icons" alt=""> Learn Social Media Marketing</p>
                    <p><img src="icons/circle-check.svg" class="icons" alt=""> Master Pay Per Click (PPC) Management & Optimization</p>
                    <p><img src="icons/circle-check.svg" class="icons" alt=""> Introduction To Affiliate Marketing and Specialization/Niches</p>
                    <p><img src="icons/circle-check.svg" class="icons" alt=""> Search Engine Optimization (SEO)</p>
                    <p><img src="icons/circle-check.svg" class="icons" alt=""> Copy Writing, Video Marketing $ lots more...</p>

                </p>
            </div>
            <div>
                <h3 class="hide">Benefits</h3>
                <p class="hide">
                    <p><img src="icons/circle-check.svg" class="icons" alt=""> Free Mentorship on Digital Marketing.</p>
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
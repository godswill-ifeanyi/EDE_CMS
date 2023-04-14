<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services | Excellent Digital Express Limited</title>
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
                <li><a href="services.php" class="active">Services</a></li>
                <li><a href="courses.php">Courses</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
            <img src="images/menu.png" id="menu-btn" alt="">
        </div>
    </nav>

    <section id="blog-container" class="hide">
        <div class="blogs">
            <h2>Online Web Services</h2>
            <p>Request for any of our Online Registration Services</p>
            <div class="post hide">
                <img src="images/3.jpg" class="small-banner" alt="">
                <h3>Exam Registration</h3>
                <p><b>It just takes one click!</b></p>
                    <a href="contact.php">Request Now</a>
            </div>
            <div class="post hide">
                <img src="images/12.jpg" class="small-banner" alt="">
                <h3>JAMB CBT Practice Centre</h3>
                <p><b>It just takes one click!</b></p>
                    <a href="contact.php">Request Now</a>
            </div>
            <div class="post hide">
                <img src="images/4.jpg" class="small-banner" alt="">
                <h3>Online Job Recruitment</h3>
                    <a href="contact.php">Request Now</a>
            </div>
            <div class="post hide">
                <img src="images/10.jpg" class="small-banner" alt="">
                <h3>NIN Registration</h3>
                <p><b>It just takes one click!</b></p>
                    <a href="contact.php">Request Now</a>
            </div>
            <div class="post hide">
                <img src="images/5.jpg" class="small-banner" alt="">
                <h3>CAC Registration</h3>
                <p><b>It just takes one click!</b></p>
                    <a href="contact.php">Request Now</a>
            </div>
            <div class="post hide">
                <img src="images/6.jpg" class="small-banner" alt="">
                <h3>Vendor Registration</h3>
                <p><b>It just takes one click!</b></p>
                    <a href="contact.php">Request Now</a>
            </div>
            <div class="post hide">
                <img src="images/7.jpg" class="small-banner" alt="">
                <h3>NYSC Registration</h3>
                <p><b>It just takes one click!</b></p>
                    <a href="contact.php">Request Now</a>
            </div>
            <div class="post hide">
                <img src="images/8.jpg" class="small-banner" alt="">
                <h3>VISA Application</h3>
                <p><b>It just takes one click!</b></p>
                    <a href="contact.php">Request Now</a>
            </div>
            <div class="post hide">
                <img src="images/9.jpg" class="small-banner" alt="">
                <h3>Flight Booking</h3>
                <p><b>It just takes one click!</b></p>
                    <a href="contact.php">Request Now</a>
            </div>
        </div>

        <div class="cate hide">
            <h2>Categories</h2>
            <hr>
            <a href="#">Exam Registration (WAEC&NECO, JAMB, POST UTME, GCE, etc)</a>
            <hr>
            <a href="#">JAMB CBT Practice Centre</a>
            <hr>
            <a href="#">Online Job Recruitment</a>
            <hr>
            <a href="#">NIN Registration Centre (Govt. Approved)</a>
            <hr>
            <a href="#">Vendor Registration</a>
            <hr>
            <a href="#">CAC Registration (Business Name, Church, Company, NGO, etc)</a>
            <hr>
            <a href="#">NYSC Accredited Centre </a>
            <hr>
            <a href="#">VISA Application</a>
            <hr>
            <a href="#">Flight Booking (Int'l & Local)</a>
            <hr>

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
        </div>
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
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
            <h2>ICT Services</h2>
            <p>Request for any of our ICT Services</p>
            <div class="post hide">
                <img src="images/webdev.jpg" alt="">
                <h3>Web Development/Design</h3>
                <p>We specialize in developing and maintaning web applications with outstanding quality. 
                   We'll build any kind of website and integrate payment gateway 
                    to enable your customers/clients pay online for products and services rendered.</p>
                    <p><b>Need a professional website? We’ve got you covered. </b></p>
                    <a href="contact.php">Request Now</a>
            </div>
            <div class="post hide">
                <img src="images/1.jpg" class="small-banner" alt="">
                <h3>Computer Repairs</h3>
                <p>Our technicians are ready for all your hardware related issue.</p>
                <p><b>Contact us now to get a technician that's actually good at what he does.</b> </p>
                    <a href="contact.php">Request Now</a>
            </div>
            <div class="post hide">
                <img src="images/mobiledev.jpg" alt="">
                <h3>Mobile App Development</h3>
                <p>Lauching your dream app is so much easier than you think.
                    You can finally get that app that meets business requirements,
                    efficient and creatively built.
                </p>
                <p><b>It just takes one click!</b></p>
                    <a href="contact.php">Request Now</a>
            </div>
            <div class="post hide">
                <img src="images/networking.jpeg" alt="">
                <h3>Networking Services</h3>
                <p>Lauching your dream app is so much easier than you think.
                    You can finally get that app that meets business requirements,
                    efficient and creatively built.
                </p>
                <p><b>It just takes one click!</b></p>
                    <a href="contact.php">Request Now</a>
            </div>
        </div>

        <div class="cate hide">
            <h2>Categories</h2>
            <hr>
            <a href="#">Web Development/Design</a>
            <hr>
            <a href="#">Computer Repairs</a>
            <hr>
            <a href="#">App Development</a>
            <hr>
            <a href="#">Graphic Design</a>
            <hr>
            <a href="#">Digital Marketing</a>
            <hr>
            <a href="#">Networking Services</a>
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
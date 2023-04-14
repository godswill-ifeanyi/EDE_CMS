<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Excellent Digital Express Limited</title>
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
                <li><a href="index.php"  class="active">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="courses.php">Courses</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
            <img src="images/menu.png" id="menu-btn" alt="">
        </div>
    </nav>

    <section id="course-inner" class="hide">
        <div class="overview">
                <button onclick="history.go(-1)" class="brown">Go back</button>
            <h2>Message Received</h2>

            <p>
        Your message was receievd successfully, an admin will contact you ASAP. We're always 
        here to help, If you have any more questions, comments, or concerns, 
        please don't hesitate to get in touch with us.<br> You can reach us by phone or
        email. We look forward to hearing 
        from you and will do our best to assist you in any way we can.
      </p>
            <img class="course-img" src="images/bg4.jpg" alt="">
        
        <div class="course-head hide">
            <div class="c-name">
            </div>
        </div>
        
        <hr>
        <h2>Get In Touch</h2>
        <div class="course-flex">
            <div>
                <p class="hide">
                    <p><img src="icons/location.svg" class="icons" alt=""><span style="font-size: 20px; font-weight: 500;">    Location</span>: <span>Excellent Digital Express Limited</span><br>
                        <img src="icons/location.svg" width="14px" height="14px" alt="">
                        <span><b>Head Office</b>: Peace Plaza 155 NTA Road, Mgbuoba, Port Harcourt</span><br>
                        <img src="icons/location.svg" width="14px" height="14px" alt="">
                        <span><b>Branch Office</b>: 59 Asiri Plaza, Ozuoba, By Ozuoba Market, Port Harcourt</span><br>
                    </b></p>
                    <p><img src="icons/email.svg" class="icons" alt=""><span style="font-size: 20px; font-weight: 500;">    Email</span>: Send mails to the following emails:<br> <b>Head of Operation's Mail:</b>  hassan_centrilift@yahoo.com<br>
                    <b>Company's Mail:</b>  excellentdigitalexpress@gmail.com</p>
                    <p><img src="icons/clock.svg" class="icons" alt=""><span style="font-size: 20px; font-weight: 500;">    Business Hours</span>: Open Mon - Sat 08:00am - 06:00pm</p>
                    <p><img src="icons/phone.svg" class="icons" alt=""><span style="font-size: 20px; font-weight: 500;">    Call</span>: Call the following numbers:<br> <b>Head Office:</b>  081 815 95329<br>
                    <b>Ozuoba Branch:</b>  0813 194 7056<br>
                    <b>Head of Operation:</b>  0803 382 6713</p>
                </p>
            </div>
            <div>
                <p class="hide">
                    <p><img src="icons/f-icon.svg" class="icons" alt=""><span style="font-size: 20px; font-weight: 500;">    Facebook</span>: <a href="https://web.facebook.com/ExcellentDigitalExpress/">Here</a></p>
                    <p><img src="icons/what-icon.svg" class="icons" alt=""><span style="font-size: 20px; font-weight: 500;">    WhatsApp</span>: <a href="https://wa.me/+2348033826713">Here</a></p>
                    <p><img src="icons/lin-icon.svg" class="icons" alt=""><span style="font-size: 20px; font-weight: 500;">    LinkedIn</span>: <a href="https://www.linkedin.com/">Here</a></p>
                    <p><img src="icons/insta-icon.svg" class="icons" alt=""><span style="font-size: 20px; font-weight: 500;">    Instagram</span>: <a href="https://www.instagram.com/">Here</a></p>
                </p>
            </div>
        </div>
    </div>
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
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

    <section id="course" class="hide">
        <h1>Our Services</h1>
        <p>This section features the services we offer</p>
        <div class="course-box">
            <div class="box-border">
            <div class="courses" onclick="window.location.href='courses.php'">
                <img src="images/training.jpg" class="course-img" alt="">
                <div class="details">
                    <span>Updated 15/03/2023</span>
                    <h6>ICT Training</h6>
                    <div class="star">
                        <p>This section includes the list of all the ICT Training Programmes we offer.
                        </p>
                    </div>
                </div>
                <div class="cost">
                    Click
                </div>
            </div>
            </div>
            <div class="box-border hide">
                <div class="courses" onclick="window.location.href='service-detail2.php'">
                    <img src="images/services.jpg" class="course-img" alt="">
                    <div class="details">
                        <span>Updated 15/03/2023</span>
                        <h6>ICT Services</h6>
                        <div class="star">
                            <p>This section includes the list of all the ICT services we offer.
                            </p>
                        </div>
                    </div>
                    <div class="cost">
                        Click
                    </div>
                </div>
                </div>
                <div class="box-border hide">
                    <div class="courses" onclick="window.location.href='service-detail3.php'">
                        <img src="images/2.jpg" class="course-img" alt="">
                        <div class="details">
                            <span>Updated 15/03/2023</span>
                            <h6>Online Web Services</h6>
                            <div class="star">
                                <p>This section includes all of the Online Web Services we offer.
                                </p>
                            </div>
                        </div>
                        <div class="cost">
                            Click
                        </div>
                    </div>
                    </div>
                    <div class="box-border hide">
                        <div class="courses" onclick="window.location.href='service-detail4.php'">
                            <img src="images/11.jpg" class="course-img" alt="">
                            <div class="details">
                                <span>Updated 15/03/2023</span>
                                <h6>Design/Printing Services</h6>
                                <div class="star">
                                    <p>This section includes the Design and Printing Services we offer. 
                                    </p>
                                </div>
                            </div>
                            <div class="cost">
                                Click
                            </div>
                        </div>
                        </div>
            <div class="box-border hide">
            <div class="courses" onclick="window.location.href='service-detail5.php'">
                <img src="images/14.jpg" class="course-img" alt="">
                <div class="details">
                    <span>Updated 15/03/2023</span>
                    <h6>Photography/Photo Studio</h6>
                    <div class="star">
                        <p>This section includes the Photography and Photo Studio Services we offer.
                        </p>
                    </div>
                </div>
                <div class="cost">
                    Click
                </div>
            </div>
            </div>
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
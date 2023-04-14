<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About | Excellent Digital Express Limited</title>
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
                <li><a href="about.php" class="active">About</a></li>
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
            <h2>About Us</h2>
            <img class="course-img" src="images/bg3.jpg" alt="">
        
        <div class="course-head hide">
            <div class="c-name">
                <h2>Who Are We?</h2>
            </div>
        </div>
        <p class="hide" style="text-align: justify;">
              Excellent Digital Express Ltd, is wholly an indigenous company established 
              12-03-2013, with RC 1101510, but officially started operations in 08-07-2007. 
              We have been committed to Digital services in ICT Training and Services, 
              Online Web Services, Printing Technology and Photography.
            </p>
        <h3 class="hide">Our Vision</h3>
        <p style="text-align: justify;">
             Our vision is to be one of the <em>"Best Digital Technical institute in 
                Africa”</em> Training Students and provide ICT Services with high level cutting edge technology 
                to empower youth and the society at large.
            </p>
        <hr>
        <div class="course-flex">
            <div>
                <h3 class="hide">Our Mission</h3>
                <p class="hide" style="text-align: justify;">
              Excellent Digital Express Ltd is a company of core values in quality control 
              and quality assurance, Training our team to always produce an Excellent 
              Result in our Services and Training Programs, because 
              <em>“what is not Excellent can never be Excellent”</em>, 
              therefore we must uphold our core value of Excellent services.
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


    
    <!--Reviews-->
    <section class="section-4 hide" style="margin-top: 0px;">
        <div class="container text-center">
            <h1 class="text-dark">
                Public Reviews
            </h1>
            <p>What our Students and Clients say about us...</p>
        </div>
        <div class="team row">
            <div class="col-md-4 col-12 text-center">
                <div class="card mr-2 d-inline-block shadow-lg">
                    <div class="card-img-top">
                        <img src="images/male-avater.png" alt="" class="img-fluid rounded-circle w-50 border-radius  py-1">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Shola</h3>
                        <p class="card-text">
                            A good networking centre and place for all your IT Jobs and other printing works.
                            They register NIN and also have a photo studio in this place. The owner of the place
                            is very agile and multi-tasks to get the job done. It's a busy place and I had good experience
                            patronising them. Good customer service and friendly interactions. The payment system was a good workng POS. 
                        </p>
                        <a href="#" class="text-second text-decoration-none">
                            <span>Review</span></a><br>
                        <img src="icons/star.svg" class="icons" alt="">
                        <img src="icons/star.svg" class="icons" alt="">
                        <img src="icons/star.svg" class="icons" alt="">
                        <img src="icons/star.svg" class="icons" alt="">
                        <img src="icons/star.svg" class="icons" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-4 hide">
                <!--Carousel Started-->
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <!--Card Two-->
                      <div class="carousel-item active text-center">
                        <div class="card mr-2 d-inline-block shadow-lg">
                            <div class="card-img-top">
                                <img src="images/female-avatar.jpg" alt="" class="img-fluid rounded-circle w-50 border-radius py-1">
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">Ebiye Pat Edua</h3>
                                <p class="card-text">
                                    Excellent Digital Express LTD is a well established centre that provides
                                    quality IT Training and Certification Programs to help students. The teachers
                                    here are good and the facilities are great. Overall, I enjoyed all the classes
                                    I have taken so far.
                                </p>
                                <a href="#" class="text-second text-decoration-none">
                                    <span>Review</span></a><br>
                        <img src="icons/star.svg" class="icons" alt="">
                        <img src="icons/star.svg" class="icons" alt="">
                        <img src="icons/star.svg" class="icons" alt="">
                        <img src="icons/star.svg" class="icons" alt="">
                        <img src="icons/star.svg" class="icons" alt="">
                            </div>
                        </div>
                      </div>
                      <div class="carousel-item text-center hide">
                        <!--Card Three-->
                        <div class="card mr-2 d-inline-block shadow-lg">
                            <div class="card-img-top">
                                <img src="images/male-avater.png" alt="" class="img-fluid border-radius rounded-circle w-50  py-1">
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">Oghenetega Patrick</h3>
                                <p class="card-text">
                                    I'd highly recommend them. What really stood out to me was the company's
                                    commitment to innovation and technology. They were constantly updating their software
                                    with new features and improvements, which made my user experience even better.
                                </p>
                                <a href="#" class="text-second text-decoration-none">
                                    <span>Review</span></a><br>
                                    <img src="icons/star.svg" class="icons" alt="">
                                    <img src="icons/star.svg" class="icons" alt="">
                                    <img src="icons/star.svg" class="icons" alt="">
                                    <img src="icons/star.svg" class="icons" alt="">
                                    <img src="icons/star.svg" class="icons" alt="">
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="col-md-4 text-center hide">
                <!--Card Three-->
                <div class="card mr-2 d-inline-block shadow-lg">
                    <div class="card-img-top">
                        <img src="images/male-avater.png" alt="" class="img-fluid border-radius rounded-circle w-50  py-1">
                    </div>
                    <div class="card-body">
                    <h3 class="card-title">Oghenetega Ubogu</h3>
                                <p class="card-text">
                                    The organization offers a quality service in their enterprises.
                                    I like the Computer Training Institute, it's superb and sets a standard on learning.
                                    The facility is neat and tidy. There's discipline in the institute and they are organized.
                                </p>
                        <a href="#" class="text-second text-decoration-none">
                            <span>Review</span></a><br>
                            <img src="icons/star.svg" class="icons" alt="">
                            <img src="icons/star.svg" class="icons" alt="">
                            <img src="icons/star.svg" class="icons" alt="">
                            <img src="icons/star.svg" class="icons" alt="">
                            <img src="icons/star.svg" class="icons" alt="">
                    </div>
                </div>
            </div>
        </div>
        
    </section>
    
    <!--Trusted Clients-->
    <section id="client">
        <h1>Trusted Clients</h1>
        <p>We are trusted by</p>
      
        <marquee>
            <img src="images/client1.jpg" class="client-img" alt="">
                <img src="images/client2.png" class="client-img" alt="">
                <img src="images/client3.jpg" class="client-img" alt="">
                <img src="images/client4.jpg" class="client-img" alt="">
        </marquee>
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
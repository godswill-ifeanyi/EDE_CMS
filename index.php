<?php


require_once './admin/database.php';

$sql = "SELECT * FROM blogs ORDER BY id DESC";

$result = mysqli_query($conn,$sql);

$sql1 = "SELECT * FROM courses ORDER BY id DESC";

$result1 = mysqli_query($conn,$sql1);

$sql2 = "SELECT * FROM services ORDER BY id DESC";

$result2 = mysqli_query($conn,$sql2);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Excellent Digital Express Limited</title>
    <meta name="title" content="Computer Services, Computer Training, Design and Print,
    Photography and Photo Studio, Online Internet Services,">
    <meta name="description" content="Excellent Digital Express Ltd ICT Services">
    <meta name="keywords" content="Excellent Digital Express Ltd ICT Services, Mgbuogba, Ozuoba, 
    Website Design, Mobile App Development, Best Computer Training Centre in Port Harcourt,
    Best ICT Training Centre in Port Harcourt, Computer Training Centre Near Me, Website Design and Development in Port Harcourt, 
    ICT Centre in Port Harcourt, ICT Centre Near Me">

    <link href="images/favicon.png" rel="icon">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/mobile-styles.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

<?php
    include 'fabutton1.php';
    ?>
    

    <!--Navigation-->
    <nav class="hide">
        <div onclick="window.location.href='index.php'">
            <img src="images/favicon.png" alt="">
            <label><h4>Excellent Digital Express Limited</h4></label>
        </div>

        <div class="navigation">
            <ul>
                <img src="icons/close.svg" id="menu-close" alt="">
                <li><a href="index.php" class="active">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="courses.php">Courses</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
            <img src="images/menu.png" id="menu-btn" alt="">
        </div>
    </nav>

    <!--Home-->
    <section id="home" class="hide">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/web-banner.png" class="d-block w-100" alt="">

                <span class="span">
                    <h2>Enchance Your Future With Us</h2>
                    <p>@Excellent Digital Express Limited, we deliver nothing but the best.</p>
                    <div class="btn">
                        <a href="#" class="blue">Learn More</a>
                        <a href="#" class="brown">Visit Courses</a>
                    </div>
                </span>
              </div>
              <div class="carousel-item">
                <img src="images/mobileapp-banner.png" class="d-block w-100" alt="">

                <span class="span">
                    <h2>Enchance Your Future With Us</h2>
                    <p>@Excellent Digital Express Limited, we deliver nothing but the best.</p>
                    <div class="btn">
                        <a href="#" class="blue">Learn More</a>
                        <a href="#" class="brown">Visit Courses</a>
                    </div>
                </span>              
            </div>
            <div class="carousel-item">
                <img src="images/graphics-banner.png" class="d-block w-100" alt="">

                <span class="span">
                    <h2>Enchance Your Future With Us</h2>
                    <p>@Excellent Digital Express Limited, we deliver nothing but the best.</p>
                    <div class="btn">
                        <a href="#" class="blue">Learn More</a>
                        <a href="#" class="brown">Visit Courses</a>
                    </div>
                </span>              
            </div>
            <div class="carousel-item">
                <img src="images/repair-banner.jpg" class="d-block w-100" alt="">

                <span class="span">
                    <h2>Enchance Your Future With Us</h2>
                    <p>@Excellent Digital Express Limited, we deliver nothing but the best.</p>
                    <div class="btn">
                        <a href="#" class="blue">Learn More</a>
                        <a href="#" class="brown">Visit Courses</a>
                    </div>
                </span>              
            </div>
              <div class="carousel-item">
                <img src="images/digitalmart-banner.jpg" class="d-block w-100" alt="">

                <span class="span">
                    <h2>Enchance Your Future With Us</h2>
                    <p>@Excellent Digital Express Limited, we deliver nothing but the best.</p>
                    <div class="btn">
                        <a href="services.php" class="blue">Learn More</a>
                        <a href="courses.php" class="brown">Visit Courses</a>
                    </div>
                </span>
              </div>
              <div class="carousel-item">
                <img src="images/networking-banner.jpg" class="d-block w-100" alt="">

                <span class="span">
                    <h2>Enchance Your Future With Us</h2>
                    <p>@Excellent Digital Express Limited, we deliver nothing but the best.</p>
                    <div class="btn">
                        <a href="#" class="blue">Learn More</a>
                        <a href="#" class="brown">Visit Courses</a>
                    </div>
                </span>              
            </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </section>

    <!--Services-->
    <section id="course" class="hide">
        <h1>Our Services</h1>
        <p>This section features the services we offer</p>
        <div class="course-box">
        <?php
            while ($info2 = $result2->fetch_assoc())
            {
        ?>
            <div class="box-border">
            <div class="courses">
            <img src="<?php echo "./admin/uploaded_img/{$info2['picture']}" ?>" alt="" class="course-img" >
                <div class="details">
                    <span>Updated <?php echo "{$info2['date']}" ?></span>
                    <h6><?php echo "{$info2['title']}" ?></h6>
                    <div class="star">
                        <p><?php echo "{$info2['intro']}" ?></p>
                    </div>
                </div>
                <?php echo "<a class='cost' style='text-decoration: none;' 
                href='redirect.php?service_category={$info2['category']}'>Click</a>";  ?>
            </div>
            </div>
            <?php
            }
        ?>
            
    </div>
        
    </section>

    <!--Courses-->
    <section id="course" class="hide">
        <h1>Our Popular Courses</h1>
        <p>This section features our most popular courses.</p>
        <div class="course-box">

        <?php
            while ($info1 = $result1->fetch_assoc())
            {
        ?>

            <div class="courses">
            <img src="<?php echo "./admin/uploaded_img/{$info1['picture']}" ?>" alt="" class="course-img" >
                <div class="details">
                    <span>Updated <?php echo "{$info1['date']}" ?></span>
                    <h6><?php echo "{$info1['title']}" ?></h6>
                    <div class="star">
                        <img src="icons/star.svg" class="icons" alt="">
                        <img src="icons/star.svg" class="icons" alt="">
                        <img src="icons/star.svg" class="icons" alt="">
                        <img src="icons/star.svg" class="icons" alt="">
                        <img src="icons/star.svg" class="icons" alt="">
                        <span>(<?php echo "{$info1['registered_students']}" ?>)</span>
                    </div>
                </div>
                <?php echo "<a class='cost' style='text-decoration: none;' 
                href='course-detail.php?course_id={$info1['id']}'>Click</a>";  ?>
            </div>

            <?php
            }
        ?>
            
        </div>
        
    </section>

    <section class="section-2 container-fluid p-0 hide">
        <div class="cover">
            <div class="content text-center hide">
                <h1>Some Features That Makes Us Unique</h1>
            </div>
        </div>
        <div class="container-fluid text-center reply">
            <div class="numbers d-flex flex-md-row flex-wrap justify-content-center">
                <div class="rect hide">
                    <h1>256</h1>
                    <p>Happy Students</p>
                </div>
                <div class="rect hide">
                    <h1>34</h1>
                    <p>Certified Tutors</p>
                </div>
                <div class="rect hide">
                    <h1>23</h1>
                    <p>Updated Courses</p>
                </div>
                <div class="rect hide">
                    <h1>19</h1>
                    <p>Trusted Clients</p>
                </div>
            </div>
        </div>

    <!--Registration-->
    <section id="registration" class="hide">
        <div class="reminder">
            <p>Get In Touch</p>
            <h1>For Training or Our Services</h1>
            <div class="time">
                <div class="date">
                    <p class="p">18</p>
                    <p>Days</p>
                </div>
                <div class="date">
                    <p class="p">23</p>
                    <p>Hours</p>
                </div>
                <div class="date">
                    <p class="p">36</p>
                    <p>Minutes</p>
                </div>
                <div class="date">
                    <p class="p">58</p>
                    <p>Seconds</p>
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
    </section> 
    
    <!--Blog-->
    <section id="blog" class="hide">
        <h1>Blog Post</h1>
        <p>This section provides blogs, posted by an admin</p>
        <div class="blog-base">
        <?php
            $counter = 0;
            while ($info = $result->fetch_assoc())
            { if ($counter < 3) {
        ?>
        <div class="blog-base">
            <div class="box-border">
            <img src="<?php echo "./admin/uploaded_img/{$info['picture']}" ?>" alt="" class="blog-img" >
                <div class="blog-box">
                    <img src="icons/admin.svg" class="icons" alt="">
                    <span>Posted by an admin</span>
                    <img src="icons/date.svg" class="icons" alt="">
                    <span><?php echo "{$info['date']}" ?></span>
                    <h3><?php echo "{$info['title']}" ?></h3>
                    <p><?php echo "{$info['intro']}" ?>
                        <a href="blog.php">read more</a>
                    </p>
                </div>
            </div>
        </div>
        <?php
       $counter++;} else {
        break;
       }
        }
        ?>
        </div>
    </section>

    <!--Reviews-->
    <section class="section-4 hide">
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
                        <h3 class="card-title">Shola E.</h3>
                        <p class="card-text" style="text-align: justify;">
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
                                <p class="card-text" style="text-align: justify;">
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
                                <p class="card-text" style="text-align: justify;">
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
                    <h3 class="card-title">O. Ubogu</h3>
                                <p class="card-text" style="text-align: justify;">
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
    include 'i-footer.php';
    ?>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script src="js/main.js"></script>
</body>
</html>
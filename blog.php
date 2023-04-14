<?php

error_reporting(0);
session_start();

require_once './admin/database.php';

$sql = "SELECT * FROM blogs ORDER BY id DESC";

$result = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog | Excellent Digital Express Limited</title>
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
                <li><a class="active" href="blog.php">Blog</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="courses.php">Courses</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
            <img src="images/menu.png" id="menu-btn" alt=""> 
        </div>
    </nav>

    <section id="blog-container" class="hide">
        <div class="blogs">
            <h2>Latest Blog</h2>
            <?php
            
            while ($info = $result->fetch_assoc())
            { 
        ?>
            <div class="post hide">
                <img src="<?php echo "./admin/uploaded_img/{$info['picture']}" ?>"  alt="">
                <h3><?php echo "{$info['title']}" ?></h3>
                <p><?php echo "{$info['writeup']}" ?></p>
                    <a href="index.php">Go Back</a>
            </div>
            <?php
       
        }
        ?>
        </div>

        <div class="cate hide">
            <h2>Categories</h2>
            <hr>
            <a href="#">Web Development</a>
            <hr>
            <a href="#">Web Design</a>
            <hr>
            <a href="#">App Development</a>
            <hr>
            <a href="#">Django Web Framework</a>
            <hr>
            <a href="#">Python Programming</a>
            <hr>
            <a href="#">PHP Hacks </a>
            <hr>
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
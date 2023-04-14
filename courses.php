<?php

require_once './admin/database.php';

$sql = "SELECT * FROM courses ORDER BY id DESC";

$result = mysqli_query($conn,$sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses | Excellent Digital Express Limited</title>
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

    <section id="course" class="hide">
        <h1>Our Popular Courses</h1>
        <p>This section features our most popular courses.</p>
        <div class="course-box">

        <?php
        
            while ($info = $result->fetch_assoc())
            { 
        ?>

            <div class="courses">
            <img src="<?php echo "./admin/uploaded_img/{$info['picture']}" ?>" alt="" class="course-img" >
                <div class="details">
                    <span>Updated <?php echo "{$info['date']}" ?></span>
                    <h6><?php echo "{$info['title']}" ?></h6>
                    <div class="star">
                        <img src="icons/star.svg" class="icons" alt="">
                        <img src="icons/star.svg" class="icons" alt="">
                        <img src="icons/star.svg" class="icons" alt="">
                        <img src="icons/star.svg" class="icons" alt="">
                        <img src="icons/star.svg" class="icons" alt="">
                        <span>(<?php echo "{$info['registered_students']}" ?>)</span>
                    </div>
                </div>
                <?php echo "<a class='cost' style='text-decoration: none;' 
                href='course-detail.php?course_id={$info['id']}'>Click</a>";  ?>
            </div>

            <?php
       
       }
        
        ?>
            
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
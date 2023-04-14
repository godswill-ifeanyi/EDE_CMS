<?php

error_reporting(0);
session_start();

if (!isset($_SESSION['sessionuser'])) {
    header("location:index.php");
}
require_once 'database.php';

if (isset($_POST['submit'])) {

$photo = $_FILES['photo']['name'];
$dst = "./uploaded_img/".$photo;

move_uploaded_file($_FILES['photo']['tmp_name'], $dst);

$title = $_POST['title'];
$intro = $_POST['intro'];
$writeup = $_POST['writeup'];
$date = $_POST['date'];

if (empty($photo) || empty($title) || empty($intro) || empty($writeup) || empty($date) ) {
    echo '<script>
            alert("Empty fields");
            window.location="./add-blog.php";
            </script>';
} else {
    $sql = "INSERT INTO blogs (picture, title, intro, writeup, date) VALUES ('$photo','$title',
     '$intro', '$writeup', '$date')";

    $result = mysqli_query($conn,$sql);

    if ($result) {
        echo '<script>
                alert("Added Successfully");
                window.location="./add-blog.php";
                </script>';
        }
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Excellent Digital Express Limited</title>
    <link href="img/favicon.png" rel="icon">
    <link rel="stylesheet" href="css/adstyles.css">
    <style>

    </style>
    
</head>
<body>
    <section id="menu">
        <div class="logo">
            <img src="img/favicon.png" alt="">
            <h2>Admin</h2>
        </div>
        <nav class="items">
            <li onclick="window.location.href='dashboard.php'"><a href="dashboard.php"><img src="icons/chart.svg" alt="" class="icons">Dashboard</a></li>
            <li onclick="window.location.href='services.php'"><a href="services.php"><img src="icons/table.svg" alt="" class="icons">Services</a></li>
            <li onclick="window.location.href='courses.php'"><a href="courses.php"><img src="icons/form.svg" alt="" class="icons">Courses</a></li>
            <li class="active" onclick="window.location.href='blogs.php'"><a href="blogs.php"><img src="icons/blog.svg" alt="" class="icons">Blogs</a></li>
            <li onclick="window.location.href='settings.php'"><a href="settings.php"><img src="icons/settings.svg" alt="" class="icons">Settings</a></li>
            <li onclick="window.location.href='logout.php'"><a href="logout.php"><img src="icons/logout.svg" alt="" class="icons">Logout</a></li>
        </nav>
    </section>

    <section id="interface">
        <div class="navigation">
            <div class="n1">
                <div>
                    <img src="icons/bars.svg" id="menu-btn" alt="" class="icons">
                </div>
                <div class="search">
                    <img src="icons/search.svg" alt="" class="icons">
                    <input type="text" placeholder="Search">
                </div>
            </div>
            <div class="profile">
                <img src="icons/bell.svg" alt="" class="icons">
                <img src="img/person-1.jpg" alt="" class="profile-pic">
            </div>
        </div>

        <h3 class="i-name">Blogs</h3>
        
        <div class="board">
        <p class="edit" style="text-align: right; color: blue; margin-right: 2vmin; cursor: pointer;"
        onclick="window.location.href='blogs.php'">
            View Blog
        </p>
        <div class="form">
            <form action="#" method="post" enctype="multipart/form-data">
                <input type="file" name="photo"><br><br>
                <input type="text" placeholder="Enter title" name="title"><br><br>
                <textarea name="intro" cols="25" rows="7" placeholder="Enter Blog Intro"></textarea><br><br>
                <textarea cols="30" rows="10" placeholder="Enter Blog Writeup" name="writeup"></textarea><br><br>
                <input type="text" placeholder="Enter date" name="date"><br><br>
                <input type="submit" name="submit" class="brown"><br><br>
            </form>
            </div>
        </div>
    </section>

    <script src="js/jquery.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
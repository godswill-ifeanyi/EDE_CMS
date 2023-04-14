<?php

error_reporting(0);
session_start();

if (!isset($_SESSION['sessionuser'])) {
    header("location:../login.php");
}
require_once 'database.php';

$id = $_GET['course_id'];

$sql = "SELECT * FROM courses WHERE id = '$id' ";

$result = mysqli_query($conn, $sql);

$info =$result->fetch_assoc();

if (isset($_POST['submit'])) {

$photo = $_FILES['photo']['name'];
$dst = "./uploaded_img/".$photo;

move_uploaded_file($_FILES['photo']['tmp_name'], $dst);

$title = $_POST['title'];
$registered_students = $_POST['registered_students'];
$date = $_POST['date'];

$query = "UPDATE courses SET registered_students = '$registered_students',
date = '$date', picture = '$photo', title = '$title'
WHERE id = '$id' ";

if (empty($photo) || empty($title) || empty($registered_students) || empty($date) ) {
    echo '<script>
            alert("Empty fields");
            window.location="./edit-course.php";
            </script>';
} else {
    $result2 = mysqli_query($conn, $query);
    
    if ($result2) {
    header("location:courses.php");
    }
}

}

if (isset($_POST['submit1'])) { 
    
    $intro = $_POST['intro'];
    $overview = $_POST['overview'];
    $price = $_POST['price'];
    $duration = $_POST['duration'];
    $objective5 = $_POST['objective5'];
    $objective4 = $_POST['objective4'];
    $objective3 = $_POST['objective3'];
    $objective2 = $_POST['objective2'];
    $objective1 = $_POST['objective1'];
    $benefit1 = $_POST['benefit1'];
    $benefit2 = $_POST['benefit2'];
    $benefit3 = $_POST['benefit3'];
    $benefit4 = $_POST['benefit4'];
    $benefit5 = $_POST['benefit5'];
    

    $query = "UPDATE courses SET price = '$price', benefit1 = '$benefit1', benefit2 = '$benefit2', benefit3 = '$benefit3', benefit4 = '$benefit4', benefit5 = '$benefit5',
    objective1 = '$objective1', objective2 = '$objective2', objective3 = '$objective3', objective4 = '$objective4', objective5 = '$objective5',
    intro = '$intro', duration = '$duration', course_overview = '$overview'
    WHERE id = '$id' ";
    
    if (empty($price) || empty($duration) || empty($overview) || empty($intro) ) {
        echo '<script>
                alert("Empty fields");
                window.location="./edit-course.php";
                </script>';
    } else {
        $result2 = mysqli_query($conn, $query);
        
        if ($result2) {
        header("location:courses.php");
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
                <img src="img/male-avater.png" alt="" class="profile-pic">
            </div>
        </div>

        <h3 class="i-name">Courses</h3>
        
        <div class="board">
        <p class="edit" style="text-align: right; color: blue; margin-right: 2vmin; cursor: pointer;"
        onclick="window.location.href='courses.php'">
            View Course
        </p>
        <div class="form">
            <form action="#" method="post" enctype="multipart/form-data" >
                <div>
                <label>Old Picture:</label><img src="<?php echo "./uploaded_img/{$info['picture']}";  ?>" alt=""   >
                </div><br><br>
                <label> New Picture
                <input type="file" name="photo"><br><br>
                <input type="text" name="title" value="<?php echo "{$info['title']}"; ?>"><br><br>
                <input type="text"name="registered_students" value="<?php echo "{$info['registered_students']}"; ?>"><br><br>
                <input type="text" name="date" value="<?php echo "{$info['date']}"; ?>"><br><br>
                <input type="submit" name="submit" class="brown"><br><br>
            </form>
            </div>
            <div class="form">
                <h3>Course Details</h3>
            <form action="#" method="post" enctype="multipart/form-data">
            <textarea cols="25" rows="7" name="intro" placeholder="Enter Course Intro"><?php echo "{$info['intro']}"; ?></textarea><br><br>
                <input type="text" name="duration" placeholder="Duration" value="<?php echo "{$info['duration']}"; ?>"><br><br>
                <input type="text" name="price" placeholder="Price" value="<?php echo "{$info['price']}"; ?>"><br><br>
                <textarea cols="30" rows="10" name="overview" placeholder="Enter Course Overview"><?php echo "{$info['course_overview']}"; ?></textarea><br><br>
                <p>List a minimum of three(3) Course Objectives</p>
                <ol>
                    <li><input type="text" name="objective1" placeholder="Objective1" value="<?php echo "{$info['objective1']}"; ?>"><br><br></li>
                    <li><input type="text" name="objective2" placeholder="Objective2" value="<?php echo "{$info['objective2']}"; ?>"><br><br></li>
                    <li><input type="text" name="objective3" placeholder="Objective3" value="<?php echo "{$info['objective3']}"; ?>"><br><br></li>
                    <li><input type="text" name="objective4" placeholder="Objective4" value="<?php echo "{$info['objective4']}"; ?>"><br><br></li>
                    <li><input type="text" name="objective5" placeholder="Objective5" value="<?php echo "{$info['objective5']}"; ?>"><br><br></li>
                </ol>
                <p>List a minimum of three(3) Course Benefits</p>
                <ol>
                    <li><input type="text" name="benefit1" placeholder="benefit1" value="<?php echo "{$info['benefit1']}"; ?>"><br><br></li>
                    <li><input type="text" name="benefit2" placeholder="benefit2" value="<?php echo "{$info['benefit2']}"; ?>"><br><br></li>
                    <li><input type="text" name="benefit3" placeholder="benefit3" value="<?php echo "{$info['benefit3']}"; ?>"><br><br></li>
                    <li><input type="text" name="benefit4" placeholder="benefit4" value="<?php echo "{$info['benefit4']}"; ?>"><br><br></li>
                    <li><input type="text" name="benefit5" placeholder="benefit5" value="<?php echo "{$info['benefit5']}"; ?>"><br><br></li>
                </ol>
                <input type="submit" name="submit1" class="brown"><br><br>
            </form>
            </div>
        </div>
    </section>

    <script src="js/jquery.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
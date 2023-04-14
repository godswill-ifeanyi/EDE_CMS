<?php

error_reporting(0);
session_start();

if (!isset($_SESSION['sessionuser'])) {
    header("location:../login.php");
} 

require_once 'database.php';

$id = $_GET['blog_id'];

$sql = "SELECT * FROM blogs WHERE id = '$id' ";

$result = mysqli_query($conn, $sql);

$info =$result->fetch_assoc();

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

        <h3 class="i-name">Blogs</h3>
        
        <div class="board">
        <p class="edit" style="text-align: right; color: blue; margin-right: 2vmin; cursor: pointer;"
        onclick="window.location.href='blogs.php'">
            View Blog
        </p>
            <table width="100%">
                <thead>
                        <td>Article</td>
                </thead>
                <tbody>
                    <tr>
                        <td class="active">
                        <?php echo "{$info['writeup']}";  ?>
                        </td>

                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <script src="js/jquery.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
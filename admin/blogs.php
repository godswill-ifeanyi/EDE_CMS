<?php

error_reporting(0);
session_start();

if (!isset($_SESSION['sessionuser'])) {
    header("location:index.php");
}

require_once 'database.php';

$sql = "SELECT * FROM blogs ORDER BY id DESC";

$result = mysqli_query($conn, $sql);


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
        onclick="window.location.href='add-blog.php'">
            Create Blog
        </p>
            <table width="100%">
                <thead>
                        <td>Picture</td>
                        <td>Title</td>
                        <td>Intro</td>
                        <td>Date</td>
                        <td></td>
                        <td></td>
                        <td></td>   
                </thead>
                <tbody>
                <?php
            while($info=$result->fetch_assoc()) {

            
            ?>
                    <tr>
                        <td class="people">
                            <div class="people-de">
                            <img src="<?php echo "./uploaded_img/{$info['picture']}";  ?>" alt=""   >            
                         </td>
                        <td class="people-des">
                        <?php echo "{$info['title']}";  ?>
                        </td>
                        <td class="active">
                        <?php echo "{$info['intro']}";  ?>
                        </td>
                        <td class="role">
                        <?php echo "{$info['date']}";  ?>
                        </td>
                        <td class="edit">
                        <?php echo "<a class='btn button' href='article.php?
                        blog_id={$info['id']}'>Article</a>";  ?>
                        </td>
                        <td class="edit">
                        <?php echo "<a class='btn button' href='edit-blog.php?
                        blog_id={$info['id']}'>Edit</a>";  ?>
                        </td>
                        <td class="edit">
                        <?php echo "<a class='btn button' onClick=\"javascript:return confirm('Are you sure to delete this data?')\"
                        href='./delete-blog.php?
                        blog_id={$info['id']}'>Delete</a>";  ?>
                        </td>
                    </tr>
                    <?php

                    }

                ?>
                </tbody>
            </table>
        </div>
    </section>

    <script src="js/jquery.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
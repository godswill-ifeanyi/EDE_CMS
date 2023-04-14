<?php

error_reporting(0);
session_start();

if (!isset($_SESSION['sessionuser'])) {
    header("location:index.php");
} 

require_once './database.php';

$id = $_SESSION['sessionid'];

$sql = "SELECT * FROM users WHERE id = '$id' ";

$result = mysqli_query($conn,$sql);

$info = mysqli_fetch_assoc($result);

if (isset($_POST['update_info'])) {
    $username = $_POST['username'];
}

$query = "UPDATE users SET username = '$username' WHERE id = '$id' ";

if (empty($username)) {
    echo '<script>
    alert(Field empty);
    window.location="settings.php";
    </script>';
} else {
    $result2 = mysqli_query($conn, $query);
    
    if ($result2) {
        echo '<script>
        alert("Username update successful");
        window.location="settings.php";
        </script>';
    }
}

if (isset($_POST['change_pass'])) {
    $oldPassword = $_POST['oldpassword'];
    $newPassword = $_POST['newpassword'];
    $confirmPassword = $_POST['confirmpassword'];

}

$passCheck = password_verify($oldPassword, $info['password']);

if ($passCheck) {

    if (empty($oldPassword) || empty($newPassword) || empty($confirmPassword)) {
        echo '<script>
        alert(Do not keep any field empty);
        window.location="settings.php";
        </script>';
    } elseif ($newPassword != $confirmPassword) {
        echo '<script>
        alert(New password do not match);
        window.location="settings.php";
        </script>';
    }else {
        $hashPassword = password_hash($newPassword, PASSWORD_DEFAULT);
        $query2 = "UPDATE users SET password = '$hashPassword' WHERE id = '$id' ";
        $result3 = mysqli_query($conn, $query2);
    
        if ($result3) {
            echo '<script>
            alert("Password update successful");
            window.location="settings.php";
            </script>';
        }
    }
} else {
    echo '<script>
        alert(Old password incorrect);
        window.location="settings.php";
        </script>';
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
            <li onclick="window.location.href='blogs.php'"><a href="blogs.php"><img src="icons/blog.svg" alt="" class="icons">Blogs</a></li>
            <li class="active" onclick="window.location.href='settings.php'"><a href="settings.php"><img src="icons/settings.svg" alt="" class="icons">Settings</a></li>
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

        <h3 class="i-name">Settings</h3>


        <div class="board">
        <h4>Change Username</h4>

        <div class="form">
            <form action="#" method="post">
                    <label>Username: </label><input type="text" name="username" 
                    value="<?php echo "{$info['username']}"; ?>">

                    <input type="submit" name="update_info" value="Update" class="brown">
            </form>
        </div>

    
        <div class="form">
            <h4>Change Password</h4>
            <form action="#" method="post">
            <input type="password" placeholder="Enter old password" name="oldpassword" ><br><br>
            <input type="password" placeholder="Enter new password" name="newpassword" ><br><br>
            <input type="password" placeholder="Confirm new password" name="confirmpassword" ><br><br>
            <input type="submit" name="change_pass" value="Update" class="brown">

            </form>
        </div>
                
        </div>

    </section>

    <script src="js/jquery.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
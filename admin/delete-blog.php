<?php

require_once 'database.php';

if ($_GET['blog_id']) {
    $blog_id = $_GET['blog_id'];

    $sql = "DELETE FROM blogs WHERE id = '$blog_id' ";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo '<script>
        alert("Data delete is successful");
        window.location="./blogs.php";
        </script>';
    }
}

?>
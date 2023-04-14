<?php

require_once 'database.php';

if ($_GET['course_id']) {
    $course_id = $_GET['course_id'];

    $sql = "DELETE FROM courses WHERE id = '$course_id' ";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo '<script>
        alert("Data delete is successful");
        window.location="./courses.php";
        </script>';
    }
}

?>
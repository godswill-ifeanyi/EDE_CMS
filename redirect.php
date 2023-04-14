<?php


require_once './admin/database.php';

$category = $_GET['service_category'];

$sql = "SELECT * FROM services WHERE category = '$category' ";

if ($category == "ict-training") {
    echo '<script>
            window.location="courses.php"; 
            </script>';
} elseif ($category == "ict-services") {
    echo '<script>
            window.location="service-detail2.php"; 
            </script>';
} elseif ($category == "online-web-services") {
    echo '<script>
            window.location="service-detail3.php"; 
            </script>';
} elseif ($category == "design-print") {
    echo '<script>
            window.location="service-detail4.php"; 
            </script>';
} elseif ($category == "photography") {
    echo '<script>
            window.location="service-detail5.php"; 
            </script>';
} else {
    echo '<script>
            window.location="index.php"; 
            </script>';
}

?>
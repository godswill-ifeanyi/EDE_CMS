<?php

require_once 'database.php';

if ($_GET['service_id']) {
    $service_id = $_GET['service_id'];

    $sql = "DELETE FROM services WHERE id = '$service_id' ";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo '<script>
        alert("Data delete is successful");
        window.location="./services.php";
        </script>';
    }
}

?>
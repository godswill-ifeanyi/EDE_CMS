<?php

if (isset($_POST['submit'])) {
    require_once 'database.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    if (empty($email) || empty($phone) || empty($name) || empty($message)) {
        echo '<script>
        alert("Empty Fields");
        window.location.href="../contact.php";
        </script>';
        exist();
    } else {
                $sql = "INSERT INTO requests (name, email, phone, message) VALUES (?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    echo '<script>
                alert("SQL Error");
                window.location.reload();
                </script>';
                    exist();
                } else {

                    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $phone, $message);
                    mysqli_stmt_execute($stmt);
                    echo '<script>
                alert("Sent Successfully");
                </script>';

                }
            }
        
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else {
    echo '<script>
                alert("Forbidden access");
                window.location="../index.php";
                </script>';
    exist();
}
?>
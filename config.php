<?php
    $conn = mysqli_connect("localhost", "root", "", "coffee-shop");

    if (!$conn) {
        echo "<script>alert('Connection failed.');</script>";
    }
?>
<?php
    session_start();//pour créer une session 
    if (isset($_SESSION["SESSION_EMAIL"])) {
        header("Location: index.php#menu");
    }

    if (isset($_POST["submit"])) {
        include 'config.php';

        $username = mysqli_real_escape_string($conn, $_POST["username"]);
        $family_name = mysqli_real_escape_string($conn, $_POST["family_name"]);
        $email = mysqli_real_escape_string($conn, $_POST["email"]);
        $password = mysqli_real_escape_string($conn, md5($_POST["password"]));
        $cpassword = mysqli_real_escape_string($conn, md5($_POST["cpassword"]));
        $phone_number= mysqli_real_escape_string($conn, $_POST["phone_number"]);
        $adresse = mysqli_real_escape_string($conn, md5($_POST["adresse"]));

        if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM coffee_shop WHERE email='{$email}'")) > 0) {
            echo "<script>alert('{$email} - This email has already taken.');</script>";
        }else {
            if ($password === $cpassword) {
                $sql = "INSERT INTO coffee_shop ( username, family_name, email, password, phone_number , adresse) VALUES ('{$username}', '{$family_name}', '{$email}', '{$password}', '{$phone_number}', '{$adresse}')";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    header("Location: index.php");
                }else {
                    echo "<script>Error: ".$sql.mysqli_error($conn)."</script>";
                }
            }else {
                echo "<script>alert('Password and confirm password do not match.');</script>";
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
    <link rel="stylesheet" href="style.css">
    <title>Create Login Limits PHP Script</title>
</head>
<body>
    <div class="wrapper">
        <h2 class="title">Register</h2>
        <form action="" method="post" class="form">
        <div class="input-field">
                <label for="username" class="input-label">Name</label>
                <input type="usrername" name="username" id="username" class="input" placeholder="Enter your name" required>
            </div>            
            <div class="input-field">
                <label for="family_name" class="input-label">Family Name</label>
                <input type="name" name="family_name" id="family_name" class="input" placeholder="Enter your family name" required>
            </div>
            <div class="input-field">
                <label for="email" class="input-label">Email</label>
                <input type="email" name="email" id="email" class="input" placeholder="Enter your email" required>
            </div>
            <div class="input-field">
                <label for="password" class="input-label">Password</label>
                <input type="password" name="password" id="password" class="input" placeholder="Enter your password" required>
            </div>
            <div class="input-field">
                <label for="cpassword" class="input-label">Confirm Password</label>
                <input type="password" name="cpassword" id="cpassword" class="input" placeholder="Enter your confirm password" required>
            </div>
            <div class="input-field">
                <label for="phone_number" class="input-label">phone number</label>
                <input type="text" name="phone_number" id="phone_number" class="input" placeholder="Enter your phone number" required>
            </div>
            <div class="input-field">
                <label for="adresse" class="input-label">adress</label>
                <input type="text" name="adresse" id="adresse" class="input" placeholder="Enter your adress" required>
            </div>
            <button class="btn" name="submit">Register</button>
            <p>You have already an account! <a href="index.php">Login</a>.</p>
        </form>
    </div>
</body>
</html>
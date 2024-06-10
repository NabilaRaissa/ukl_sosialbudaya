<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" contect="with=device-width, initial-scale=1.0">
        <title>Register</title>
        <link rel="stylesheet" href="style3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap">

</head>
<body>
    <div class="container">
        <h1 class="title">Register</h1><br>
        <form class="form" action="register.php" method="post">
            <input type="text" name="Username" placeholder="Username">
            <input type="password" name="Password" placeholder="password">
            <input type="text" name="email" placeholder="email">
            <a>
                <button class="button">Register</button>
            </a>
        </from>
</body>
<?php
// Check if from submitted, insert form data into users table.
    if(isset($_POST ['Submit'])) {
        $Username = $_POST ['Username'];
        $password = $_POST ['Password'];
        $email = $_POST ['email'];

        include_once("koneksi.php");

        $result = mysqli_query($mysqli, "INSERT INTO user(name, username, passoword, email, level) 
        VALUES ('$nama', '$username', '$passoword', '$level')");
        header("location:index.php");
    }
?>
</html>
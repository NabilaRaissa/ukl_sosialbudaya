<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" contect="with=device-width, initial-scale=1.0">
        <title>TiketBudaya</title>
        <link rel="stylesheet" href="add.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap">

</head>
<body>
    <div class="container">
        <h1 class="title">Tambah User</h1><br>
        <form class="form" action="add_user.php" method="post">
            <input type="text" name="username" placeholder="username">
            <input type="password" name="password" placeholder="password">
            <input type="text" name="email" placeholder="email">
            <a>
                <button name="submit" class="button">Tambah</button>
            </a>
        </from>
</body>
<?php
    if(isset($_POST ['submit'])) {
        $username = $_POST ['username'];
        $password = $_POST ['password'];
        $email = $_POST ['email'];
        $level = 'user';

        include_once("../koneksi.php");

        $result = mysqli_query($mysqli, "INSERT INTO user(username, password, email, level) 
        VALUES ('$username', '$password', '$email', '$level')");
        header("location:tabel_user.php");
    }
?>
</html>
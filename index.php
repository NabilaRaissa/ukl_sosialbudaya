<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TiketBudaya</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap">

</head>
<body>
    <div class="container">
        <h1 class="title">Login</h1><br>
        <form class="form" action="login.php" method="post">
            <input type="text" name="username" placeholder="username">
            <input type="password" name="password" placeholder="password">
            <a href="login.php">
                <button class="button">Login</button>
            </a>
        </form>
        <div class="forgot">
            <a href="register.php">Register</a> <a href="#">Forgot Password</a>
        </div>
        <br>
    </div>
</body>
</html>

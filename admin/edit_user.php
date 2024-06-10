<?php
include("../koneksi.php");

if( !isset($_GET['id']) ){
    header('Location: index.php');
}
$id = $_GET['id'];

$result =  mysqli_query($mysqli, "SELECT * FROM user WHERE Id_user=$id");

while($user_data = mysqli_fetch_array($result))
{
    $username = $user_data['username'];
    $password = $user_data['password'];
    $level=$user_data['level'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <form method="POST" action="update_user.php">
    <link rel="stylesheet" href="edit.css">
    <title>Admin - TiketBudaya</title>
</head>
<body>
    <header>
        <h3>Formulir Edit User</h3>
    </header>
        <table>
            <tr>
                <td>username</td>
                <td><input type="text" name="username" value="<?php echo $username; ?>"></td>
            </tr>
            <tr>
                <td>password</td>
                <td><input type="text" name="password" value="<?php echo $password; ?>"></td>
            </tr>
            <tr>
                <td>level</td>
                <td>
                <select name="level" id="level" required>
                <option disabled selected> <?php echo $level; ?></option>
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select>
                </td>
            </tr>
        <tr>
            <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
            <td><input type="submit" name="simpan" value="Simpan"></td>
        </tr>
        </table>
    </form>
</body>
<footer>
        <p>&copy; 2024 TiketBudaya. All rights reserved.</p>
    </footer>
</html>
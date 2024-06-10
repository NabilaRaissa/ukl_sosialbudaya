<!DOCTYPE html>
<html lang="en">
<head>
    <table border="1" class="table">
    <link rel="stylesheet" href="style_tabel.css">
    <title>Admin - TiketBudaya</title>
</head>
<body>
<header>
        <ul class="navlist">
            <li><a href="tabel_user.php" class="active">User</a></li>
            <li><a href="tabel_event.php">Event</a></li>
            <li><a href="tabel_transaksi.php">Transaksi</a></li>
            <li><a href="../beranda.php">Log Out</a></li>
        </ul>
        <div class="bx bx-menu" id="menu-icon"></div>
    </header>
    <center><h1>Tabel User</h1></center>
    <a href="add_user.php">Tambah User</a>
    <tr>
        <th>No</th>
        <th>Username</th>
        <th>Password</th>
        <th>Level</th>
        <th>Aksi</th>
    </tr>
    <?php
    //select tabel user dari$database
    $nomor = 1;
    echo $nomor;
    include '../koneksi.php';
    $query_mysqli = mysqli_query($mysqli, "SELECT * FROM user ") or die(mysqli_error());

    while($data = mysqli_fetch_array($query_mysqli)){
        ?>
    <tr>
        <td><?php echo $nomor++; ?></td>
        <td><?php echo $data ['username']; ?></td>
        <td><?php echo $data ['password']; ?></td>
        <td><?php echo $data ['level']; ?></td>
        <td><a href='edit_user.php?id=<?php echo $data['Id_user'];?>'>Edit</a>
            <a href='delete_user.php?id=<?php echo $data['Id_user'];?>'>Delete</a>
        </td>
        <?php } ?>
    </tr>
    </table>
</body>
</html>

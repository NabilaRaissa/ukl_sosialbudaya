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
            <li><a href="tabel_user.php">User</a></li>
            <li><a href="tabel_event.php">Event</a></li>
            <li><a href="tabel_transaksi.php" class="active">Transaksi</a></li>
            <li><a href="../beranda.php">Log Out</a></li>
        </ul>
        <div class="bx bx-menu" id="menu-icon"></div>
    </header>
    <center><h1>Tabel Transaksi</h1></center>
    <tr>
        <th>Nomor</th>
        <th>Username</th>
        <th>Nama Event</th>
        <th>Tanggal order</th>
        <th>Jumlah tiket</th>
        <th>Harga tiket</th>
        <th>Total Harga Tiket</th>
        <th>Aksi</th>
    </tr>


<?php

    $nomor = 1;
    echo $nomor;
    include '../koneksi.php';
    $query_mysqli = mysqli_query($mysqli, "SELECT *, harga * jumlah_tiket AS total_harga FROM transaksi JOIN user ON transaksi.Id_user = user.Id_user JOIN event ON event.Id_event = transaksi.Id_event; ") 
    or die(mysqli_error());

    while($data = mysqli_fetch_array($query_mysqli)){
    ?>
    <tr>
        <td><?php echo $nomor++; ?></td>
        <td><?php echo $data ['username']; ?></td>
        <td><?php echo $data ['nama_event']; ?></td>
        <td><?php echo $data ['tanggal_order']; ?></td>
        <td><?php echo $data ['jumlah_tiket']; ?></td>
        <td><?php echo $data ['harga']; ?></td>
        <td><?php echo $data ['total_harga']; ?></td>
        <td><a href='edit_transaksi.php?id=<?php echo $data ['Id_transaksi'];?>'>Edit</a>
            <a href='delete_transaksi.php?id=<?php echo $data ['Id_transaksi'];?>'>Delete</a>
        </td>
        <?php } ?>
    </tr>
    </table>
</body>
</html>
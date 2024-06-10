<!DOCTYPE html>
<html lang="en">
<head>
    <table border="1" class="table">
    <link rel="stylesheet" href="style_tabel.css">
    <title>Admin - TiketBudayaa</title>
</head>
<body>
    <header>
        <ul class="navlist">
            <li><a href="tabel_user.php">User</a></li>
            <li><a href="tabel_event.php" class="active">Event</a></li>
            <li><a href="tabel_transaksi.php">Transaksi</a></li>
            <li><a href="../beranda.php">Log Out</a></li>
        </ul>
        <div class="bx bx-menu" id="menu-icon"></div>
    </header>
    <center><h1>Tabel Event</h1></center>
    <a href="add_event.php">Tambah Event</a>
    <tr>
        <th>Nomor</th>
        <th>Nama Event</th>
        <th>Tanggal Event</th>
        <th>Lokasi Event</th>
        <th>Deskripsi</th>
        <th>Harga Tiket</th>
        <th>Stok tiket</th>
        <th>Foto</th>
        <th>Aksi</th>
    </tr>

<?php
    //select tabel event dari$database
    $nomor = 1;
    echo $nomor;
    include '../koneksi.php';
    $query_mysqli = mysqli_query($mysqli, "SELECT * FROM event ") or die(mysqli_error());

    while($data = mysqli_fetch_array($query_mysqli)){
        ?>
    <tr>
        <td><?php echo $nomor++; ?></td>
        <td><?php echo $data ['nama_event']; ?></td>
        <td><?php echo $data ['tanggal_event']; ?></td>
        <td><?php echo $data ['lokasi_event']; ?></td>
        <td><?php echo $data ['deskripsi']; ?></td>
        <td><?php echo $data ['harga']; ?></td>
        <td><?php echo $data ['stok_tiket']; ?></td>
        <td><img src="../<?php echo $data['foto'] ?>"></td>
        <td><a href='edit_event.php?id=<?php echo $data ['Id_event'];?>'>Edit</a>
            <a href='delete_event.php?id=<?php echo $data ['Id_event'];?>'>Delete</a>

        </td>
        <?php } ?>
    </tr>
    </table>

</body>
</html>

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
        <h1 class="title">Tambah Event</h1><br>
        <form class="form" action="add_event.php" method="post">
            <input type="text" name="nama_event" placeholder="nama_event">
            <input type="datetime" name="tanggal_event" placeholder="tanggal_event">
            <input type="text" name="lokasi_event" placeholder="lokasi_event">
            <input type="text" name="deskripsi" placeholder="deskripsi">
            <input type="text" name="harga_tiket" placeholder="harga_tiket">
            <input type="text" name="stok_tiket" placeholder="stok_tiket">
            <input type="img" name="foto" placeholder="foto">
            <a>
                <button name="submit" class="button">Tambah</button>
            </a>
        </from>
</body>
<?php
    if(isset($_POST ['submit'])) {
        $nama_event = $_POST ['nama_event'];
        $tanggal_event = $_POST ['tanggal_event'];
        $lokasi_event = $_POST ['lokasi_event'];
        $deskripsi = $_POST ['deskripsi'];
        $harga_tiket = $_POST ['harga_tiket'];
        $stok_tiket = $_POST ['stok_tiket'];
        $foto = $_POST ['foto'];

        include_once("../koneksi.php");

        $result = mysqli_query($mysqli, "INSERT INTO event(nama_event, tanggal_event, lokasi_event, deskripsi, harga, stok_tiket, foto) 
        VALUES ('$nama_event', '$tanggal_event', '$lokasi_event', '$deskripsi', '$harga', '$stok_tiket', '$foto')");
        header("location:tabel_event.php");
    }
?>
</html>
<?php
session_start();
$id_user = $_SESSION['id_user'];
$nama_user = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TiketBudaya</title>
        <link rel="stylesheet" href="riwayat.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css"> 
    </head>
    <body>

        <header>
            <ul class="navlist">
                <li><a href="index.php">Beranda</a></li>
                <li><a href="event.php">Event</a></li>
                <li><a href="tiket.php">TiketBudaya</a></li>
                <li><a href="riwayat.php" class="active">Riwayat Pemesanan</a></li>
                <li><a href="../beranda.php">Logout</a></li>
            </ul>

            <div class="bx bx-menu" id="menu-icon"></div>
        </header>
        <div class="container">
            <center><h1>Riwayat Pemesanan</h1></center>
            <table class="table">
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>Username</th>
                        <th>Nama Event</th>
                        <th>Tanggal order</th>
                        <th>Jumlah tiket</th>
                        <th>Harga tiket</th>
                        <th>Total Harga Tiket</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $nomor = 1;
                        include '../koneksi.php';
                        $query_mysqli = mysqli_query($mysqli, "SELECT *, harga * jumlah_tiket AS total_harga FROM transaksi JOIN user ON transaksi.Id_user = user.Id_user JOIN event ON event.Id_event = transaksi.Id_event WHERE transaksi.Id_user = $id_user;") 
                        or die(mysqli_error($mysqli));

                        while($data = mysqli_fetch_array($query_mysqli)){
                    ?>
                    <tr>
                        <td><?php echo $nomor++; ?></td>
                        <td><?php echo $data['username']; ?></td>
                        <td><?php echo $data['nama_event']; ?></td>
                        <td><?php echo $data['tanggal_order']; ?></td>
                        <td><?php echo $data['jumlah_tiket']; ?></td>
                        <td><?php echo $data['harga']; ?></td>
                        <td><?php echo $data['total_harga']; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        
        <footer>
            <p>&copy; 2024 TiketBudaya. Nabila Raissa X SIJA 2</p>
        </footer>
    </body>
</html>

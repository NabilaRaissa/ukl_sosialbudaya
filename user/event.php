<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TiketBudaya</title>
        <link rel="stylesheet" href="budaya.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    </head>
    <body>

    <header>
        <ul class="navlist">
            <li><a href="index.php">Beranda</a></li>
            <li><a href="event.php" class="active">Event</a></li>
            <li><a href="tiket.php">TiketBudaya</a></li>
            <li><a href="riwayat.php">Riwayat Pemesanan</a></li>
            <li><a href="../beranda.php">Logout</a></li>
        </ul>
        <div class="bx bx-menu" id="menu-icon"></div>
    </header>

    <div class="grid-container">
        <?php
        include ('../koneksi.php');
        $result = mysqli_query($mysqli, "SELECT * FROM event") or die (mysqli_error($mysqli));

        while($data = mysqli_fetch_array($result)){
            ?>
            <div class="grid-item">
                <img src="<?php echo $data['foto'] ?>">
                <strong><h3><?php echo $data['nama_event']; ?></h3></strong>
                <p><?php echo $data['deskripsi']; ?></p>
                <p><?php echo $data['tanggal_event']; ?></p>
                <p><?php echo $data['lokasi_event']; ?></p>
                <a href="tiket.php?Id_event=<?php echo $data['Id_event'];?>" class="btn">Beli Sekarang</a>
            </div>
        <?php } ?>
    </div>

    <footer>
        <p>&copy; 2024 TiketBudaya. Nabila Raissa X SIJA 2</p>
    </footer>

    </body>
</html>

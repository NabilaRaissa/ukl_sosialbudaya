<?php
session_start();
$id_user = $_SESSION['id_user'];
$nama_user = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <title>TiketBudaya</title>
        <link rel="stylesheet" href="pemesanan.css">

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
                <li><a href="tiket.php" class="active">TiketBudaya</a></li>
                <li><a href="riwayat.php">Riwayat Pemesanan</a></li>
                <li><a href="../beranda.php">Logout</a></li>
            </ul>

            <div class="bx bx-menu" id="menu-icon"></div>
        </header>

        <div class="container">
            <h1>Pemesanan TiketBudaya</h1>
            <form id="bookingForm" method="POST">
                <div class="form-group">
                    <label for="name">Nama:</label>
                    <input type="text" id="name" name="name" value="<?php echo $nama_user; ?>" required>
                </div>
                <div class="form-group">
                    <label for="event">Event:</label>
                    <select id="event" name="event" required>
                        <option value="">Pilih Event</option>
                        <?php
                        include ('../koneksi.php');
                        $result = mysqli_query($mysqli, "SELECT * FROM event;") or die(mysqli_error($mysqli));
                        while($data = mysqli_fetch_array($result)){
                            echo "<option value='" . $data['Id_event'] . "'>" . $data['nama_event'] . "</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="quantity">Jumlah Tiket:</label>
                    <input type="number" id="quantity" name="quantity" min="1" max="10" required>
                </div>
                <div class="form-group">
                    <button type="submit" name="submit">Pesan Tiket</button>
                </div>
            </form>
        </div>

        <footer>
            <p>&copy; 2024 TiketBudaya. Nabila Raissa X SIJA 2</p>
        </footer>
        
        <?php
        if(isset($_POST ['submit'])) {
            $username = $_POST['name'];
            $Id_event= $_POST['event'];
            $jumlah_tiket = $_POST['quantity'];

            include_once("../koneksi.php");
            $result = mysqli_query($mysqli, "INSERT INTO `transaksi`(`Id_event`, `tanggal_order`, `jumlah_tiket`, `id_user`) VALUES ('$Id_event',now(),'$jumlah_tiket','$id_user')");
            header("location:riwayat.php");
        }
        ?>
    </body>
</html>

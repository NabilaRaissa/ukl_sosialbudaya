<?php
include("../koneksi.php");

//kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: index.php');
}
$id = $_GET['id'];

// Fetech event data based on id
$result = mysqli_query($mysqli, "SELECT * FROM event WHERE id_event=$id");

while($event_data = mysqli_fetch_array($result))
{
    $nama_event = $event_data['nama_event'];
    $tanggal_event = $event_data['tanggal_event'];
    $lokasi_event = $event_data['lokasi_event'];
    $deskripsi = $event_data['deskripsi'];
    $harga = $event_data['harga'];
    $stok_tiket= $event_data['stok_tiket'];
    $foto = $event_data['foto'];
}

?>
<tittle>Admin - TiketBudaya</tittle>
<body>
    <header>
        <h3>Formulir Edit Event</h3>
    </header>
    <form method="POST" action="update_event.php">
    <link rel="stylesheet" href="edit.css">
        <table>
            <tr>
                <td>Nama Event</td>
                <td><input type="text" name="nama_event" value="<?php echo $nama_event ?>"></td>
            </tr>
            <tr>
                <td>Tanggal Event</td>
                <td><input type="date" name="tanggal_event" value="<?php echo $tanggal_event ?>"></td>
            </tr>
            <tr>
                <td>Lokasi Event</td>
                <td><input type="text" name="lokasi_event" value="<?php echo $lokasi_event ?>"></td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td><input type="text" name="deskripsi" value="<?php echo $deskripsi ?>"></td>
            </tr>
            <tr>
                <td>Harga Tiket</td>
                <td><input type="text" name="harga" value="<?php echo $harga ?>"></td>
            </tr>
            <tr>
                <td>Stok Tiket</td>
                <td><input type="text" name="stok_tiket" value="<?php echo $stok_tiket ?>"></td>
            </tr>
            <tr>
                <td>Foto</td>
                <td><input type="text" name="foto" value="<?php echo $foto ?>"></td>
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
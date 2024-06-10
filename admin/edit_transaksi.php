<?php
include("../koneksi.php");

//kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: index.php');
}
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM transaksi WHERE Id_transaksi=$id");

while($transaksi_data = mysqli_fetch_array($result))
{
    $Id_transaksi = $transaksi_data['Id_transaksi'];
    $Id_event = $transaksi_data['Id_event'];
    $Id_user = $transaksi_data['Id_user'];
    $tanggal_order = $transaksi_data['tanggal_order'];
    $jumlah_tiket = $transaksi_data['jumlah_tiket'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="edit.css">
    <form method="POST" action="update_transaksi.php">
    <tittle>Admin - TiketBudaya</tittle>
</head>
    <body>
    <header>
        <h3>Formulir Edit Transaksi</h3>
    </header>
    
    
        <table>
            <tr>
                <td>Nama Event</td>
                <td><input type="text" name="Id_tiket_event" value="<?php echo $Id_tiket_event ?>"></td>
            </tr>
            <tr>
                <td>Tanggal order</td>
                <td><input type="text" name="tanggal_order" value="<?php echo $tanggal_order ?>"></td>
            </tr>
            <tr>
                <td>Jumlah tiket</td>
                <td><input type="text" name="jumlah_tiket" value="<?php echo $jumlah_tiket ?>"></td>
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

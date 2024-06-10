<?php
include_once '../koneksi.php';

$id = $_GET['id']; // Ambil id transaksi dari parameter URL

// Hapus data transaksi dari database
$delete = mysqli_query($mysqli, "DELETE FROM transaksi WHERE id_transaksi = $id") or die(mysqli_error($mysqli));

if($delete) {
    // Redirect kembali ke halaman transaksi.php setelah berhasil menghapus
    header("Location: tabel_transaksi.php");
    exit();
} else {
    echo "Gagal menghapus transaksi.";
}
?>
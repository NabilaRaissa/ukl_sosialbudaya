<?php
include_once '../koneksi.php';

$id = $_GET['id']; // Ambil id event dari parameter URL

// Hapus data event dari database
$delete = mysqli_query($mysqli, "DELETE FROM event WHERE id_event = $id") or die(mysqli_error($mysqli));

if($delete) {
    // Redirect kembali ke halaman event.php setelah berhasil menghapus
    header("Location: tabel_event.php");
    exit();
} else {
    echo "Gagal menghapus event.";
}
?>
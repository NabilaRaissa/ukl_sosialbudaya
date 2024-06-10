<?php
include_once '../koneksi.php';

$id = $_GET['id']; // Ambil id user dari parameter URL

// Hapus data user dari database
$delete = mysqli_query($mysqli, "DELETE FROM user WHERE id_user = $id") or die(mysqli_error($mysqli));

if($delete) {
    // Redirect kembali ke halaman user.php setelah berhasil menghapus
    header("Location: tabel_user.php");
    exit();
} else {
    echo "Gagal menghapus user.";
}
?>
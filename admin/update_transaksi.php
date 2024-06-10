<?php

include("../koneksi.php");

//cek apakah tombol simpan sudah di klik atau belum
if(isset($_POST['simpan'])){

  $id = $_POST['id'];
  $tanggal_order = $_POST['tanggal_order'];
  $jumlah_tiket = $_POST['jumlah_tiket'];

  //buat query update
  $result = mysqli_query($mysqli, 
  "UPDATE transaksi 
  SET tanggal_order='$tanggal_order', jumlah_tiket='$jumlah_tiket'
  WHERE id_transaksi=$id");
  header('Location: tabel_transaksi.php');
} else {
  die("Akses dilarang...");
}
?>
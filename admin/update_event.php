<?php

include("../koneksi.php");

//cek apakah tombol simpan sudah di klik atau belum
if(isset($_POST['simpan'])){

  $id = $_POST['id'];
  $nama_event = $_POST['nama_event'];
  $tanggal_event = $_POST['tanggal_event'];
  $lokasi_event = $_POST['lokasi_event'];
  $harga = $_POST['harga'];
  $stok_tiket = $_POST['stok_tiket'];

  //buat query update
  $result = mysqli_query($mysqli, "UPDATE event 
  SET nama_event= '$nama_event', tanggal_event='$tanggal_event', lokasi_event='$lokasi_event', harga='$harga', stok_tiket='$stok_tiket'
  WHERE id_event=$id");
  header('Location: tabel_event.php');
} else {
  die("Akses dilarang...");
}
?>
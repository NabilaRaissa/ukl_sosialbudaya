<?php

include("../koneksi.php");

//cek apakah tombol simpan sudah di klik atau belum
if(isset($_POST['simpan'])){

  $id = $_POST['id'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $level = $_POST['level'];

  //buat query update
  $result = mysqli_query($mysqli, 
  "UPDATE user 
  SET username= '$username', password='$password', level='$level'
  WHERE id_user=$id");
  header('Location: tabel_user.php');
} else {
  die("Akses dilarang...");
}
?>
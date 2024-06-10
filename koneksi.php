<?php
$databaseHost = "localhost";
$databaseName = "web_sosialbudaya_ukl";
$databaseUsername = "root";
$databasePassword = "";

$mysqli = mysqli_connect ($databaseHost, $databaseUsername, $databasePassword, $databaseName);

if ($mysqli){
    //echo "koneksi db berhasil.<br/>";
}else{
    echo "koneksi gagal.<br/>";
}
?>
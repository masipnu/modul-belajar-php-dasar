<?php
// Membuat konfigurasi database
$host = "localhost";
$user = "root";
$pass = "";
$db = "sekolah";

// Membuat handle
$koneksi = mysqli_connect($host, $user, $pass, $db);

// Melakukan pengecekan koneksi
if(!$koneksi){
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
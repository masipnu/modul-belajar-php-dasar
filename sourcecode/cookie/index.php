<?php
// Mengatur timezone Indonesia
date_default_timezone_set("Asia/Jakarta");

// Membuat batas cookie
$batas = time()+30;

// Membuat cookie
setcookie("KunjunganTerakhir", date('H:i:s'), $batas);

// Menampilkan pesan
echo "Cookie telah dibuat..!";
echo "<br>";
echo "Cek cookie sebelum dan setelah 30 detik dari sekarang..!";
echo "<br>";
echo "<a href='cookie_cek.php'>Cek Cookie</a>";
?>
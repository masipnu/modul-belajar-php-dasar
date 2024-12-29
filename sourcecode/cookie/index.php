<?php
date_default_timezone_set("Asia/Jakarta");

$batas = time()+30;
setcookie("KunjunganTerakhir", date('H:i:s'), $batas);

echo "Cookie telah dibuat..!";
echo "<br>";
echo "Cek cookie sebelum dan setelah 30 detik dari sekarang..!";
echo "<br>";
echo "<a href='cookie_cek.php'>Cek Cookie</a>";
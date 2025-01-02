<?php
// Membuka/ membuat file
$file = fopen("halo.txt","w");

// Menyiapkan teks
$teks = "Halo, \n";

// Mengisi file
fwrite($file, $teks);

// Menyiapkan teks
$teks = "Saya sedang belajar PHP\n";

// Mengisi file
fwrite($file, $teks);

// Menutup file
fclose($file);

?>
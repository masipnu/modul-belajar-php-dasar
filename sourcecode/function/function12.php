<?php
// Akses variable di luar closure
$namaDepan = "Aulia";
$namaBelakang = "Fatmawati";

$hai = function() use($namaDepan,$namaBelakang){
    echo "Hai $namaDepan $namaBelakang".PHP_EOL;
};

$hai();
?>
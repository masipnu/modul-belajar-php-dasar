<?php
// Menggunakan keyword global
$nama = "Jung Kook";

function halo(){
    global $nama;
    echo "Halo $nama\n";
}

halo();
?>
<?php
$nama = "Kim Jong Unch";
$umur = 56;

function tambah_umur(){
    $GLOBALS['umur']++;
}

echo "Nama : " . $GLOBALS['nama'].PHP_EOL;
tambah_umur();
echo "Umur : " . $GLOBALS['umur'];
?>
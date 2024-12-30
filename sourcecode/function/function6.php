<?php
// Membuat fungsi perkalian
function perkalian($angka){
    for($i=1; $i<=10; $i++){
        echo "$i x $angka = " . $i*$angka . "\n";
    }
}
// memanggil fungsi perkalian
perkalian(2)
?>
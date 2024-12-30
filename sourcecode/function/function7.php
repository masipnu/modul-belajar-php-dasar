<?php
function luas_persegi($panjang, $lebar){
    $luas = $panjang * $lebar;
    return $luas;
}

echo "Luas ruang kelas adalah " . luas_persegi(3,4) . " m";
?>
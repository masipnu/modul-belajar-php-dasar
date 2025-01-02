<?php
// Anonymous Functtion 2
function siyu(string $nama, $format){
    $namaAkhir = $format($nama);
    echo "See you $namaAkhir".PHP_EOL;
}

// Memanggil function
siyu("Dita Leni Ravia", function(string $n){
    return strtoupper($n);
})
?>
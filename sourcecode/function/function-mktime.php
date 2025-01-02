<?php
// Function mktime()
$sekarang = mktime(12, 13, 40, date('m'), date('d'), date('Y'));
echo "Sekarang tanggal " . date('d F Y', $sekarang);
echo "\n";

$bulanlalu = mktime(0, 0, 0, date('m')-1, date('d'), date('Y'));
echo "Satu bulan yang lalu adalah tanggal " . date('d F Y', $bulanlalu);
echo "\n";

$lusa = mktime(0, 0, 0, date('m'), date('d')+2, date('Y'));
echo "Lusa adalah tanggal " . date('d F Y', $lusa);
echo "\n";

$tahun = mktime(0, 0, 0, date('m'), date('d'), date('Y')-2);
echo "Dua tahun yang lalu adalah tanggal " . date('d F Y', $tahun);

?>
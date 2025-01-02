<?php
$teks = "Saya senang belajar PHP";
echo "Teks asli '$teks'".PHP_EOL;

echo "substr() : " . substr($teks,0,11) . PHP_EOL;
echo "susbtr() : " . substr($teks,12) . PHP_EOL;
echo "strtoupper() : " . strtoupper($teks) . PHP_EOL;
echo "ucwords() : " . ucwords($teks) . PHP_EOL;
echo "str_replace() : " . str_replace("senang","suka",$teks) . PHP_EOL;
echo "strops() : " . strpos($teks,"P") . PHP_EOL;

$kata = explode(' ',$teks);
echo "explode() : " . $kata[1];

?>
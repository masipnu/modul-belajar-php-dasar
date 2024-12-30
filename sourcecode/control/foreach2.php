<?php
// Foreach dengan array asosiatif
$siswa=[
    "nama" => "Dita Leni Ravia",
    "kelas" => 11,
    "jurusan" => "PPLG"
];

foreach($siswa as $key => $value){
    echo "$key : $value \n";
}
?>
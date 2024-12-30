<?php
// Foreach dengan array 2 dimensi
$siswa=[
    [
        "nis" => 881,
        "nama" => "Roro Jonggrang",
        "nilai" => 95
    ],
    [
        "nis" => 882,
        "nama" => "Roro Kidul",
        "nilai" => 100
    ],
    [
        "nis" => 883,
        "nama" => "Joko Tingkir",
        "nilai" => 90
    ]
    ];

foreach($siswa as $tokoh){
    foreach($tokoh as $data => $nilai){
        echo "$data : $nilai\n";
    }
}
?>
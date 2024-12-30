<?php
function nama_panggilan($nama){
    return substr($nama,0,5);
}

$namanya = nama_panggilan("joko santoso");
echo ucfirst($namanya);
?>
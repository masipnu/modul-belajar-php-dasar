<?php

if(isset($_COOKIE['KunjunganTerakhir'])){
    echo "Anda terakhir membuat <b>cookie</b> ";
    echo "pada jam {$_COOKIE['KunjunganTerakhir']}";
}else{
    echo "Anda terakhir membuat cookie ";
    echo "lewat dari 30 detik yang lalu.";
}
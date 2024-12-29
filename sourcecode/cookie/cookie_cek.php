<?php

if(isset($_COOKIE['KunjunganTerakhir'])){
    echo "Anda terakhir membuat <b>cookie</b> pada jam {$_COOKIE['KunjunganTerakhir']}";
}else{
    echo "Anda terakhir membuat kuki lewat dari 30 detik yang lalu.";
}
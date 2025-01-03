<?php
session_start();

if(!empty($_SESSION['username']) && !empty($_SESSION['password'])){
    echo "Username : " . $_SESSION['username'] . "<br>";
    echo "Password : " . $_SESSION['password'] . "<br>";
    echo "<a href='session_hapus.php'>Hapus Session</a>";
}else{
    echo "Sesi telah dihapus <br>";
    echo "<a href='session.php'>Buat Session</a>";
}
?>
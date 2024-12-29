<?php
session_start();

if(!empty($_SESSION['username']) && empty(!$_SESSION['password'])){
    echo "Username : ". $_SESSION['username'];
    echo "<br>";
    echo "Password : ". $_SESSION['password'];
    echo "<br>";
    echo "<a href='session_hapus.php'>Hapus Session</a>";
}else{
    echo "Sesssion telah dihapus..!";
    echo "<br>";
    echo "<a href='session_form.php'>Buat Sesi</a>";
}
?>
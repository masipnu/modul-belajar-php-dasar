<?php
session_start();
$_SESSION['username'] = "Administrator";
$_SESSION['password'] = "rahasia";

echo "Session telah dibuat..!";
echo "<br>";
echo "<a href='session_cek.php'>Cek Session</a>";
?>
<?php
session_start();
$_SESSION['username'] = $_POST['username'];
$_SESSION['password'] = $_POST['password'];

echo "Session telah dibuat..!";
echo "<br>";
echo "<a href='session_cek.php'>Cek Session</a>";
?>
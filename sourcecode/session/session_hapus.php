<?php
session_start();
session_destroy();

echo "Session telah dihapus..!";
echo "<br>";
echo "<a href='session_cek.php'>Cek Session</a>";
?>
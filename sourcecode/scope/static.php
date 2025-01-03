<?php
// Static scope
function antrian(){
    static $a = 1;
    echo "Antrian ke $a\n";
    $a++;
}

antrian();
antrian();
antrian();
?>
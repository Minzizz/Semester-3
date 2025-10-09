<?php
$x = 75;
$y = 25;

function tambah() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

tambah();
echo $z;
?>
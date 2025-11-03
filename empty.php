<?php
$mArray = array();
if (empty($mArray)) {
    echo "Array tidak terdefinisikan atau kosong.";
} else {
    echo "Array tidak kosong.";
}
echo "<br>";
if (empty($nonExsistentVar)) {
    echo "Variabel tidak terdefinisikan atau kosong.";
} else {
    echo "Variabel terdefinisikan dan tidak kosong.";
}
<?php
$umur;
if (isset($umur) && $umur >= 18) {
    echo "Anda sudah dewasa.";
} else {
    echo "Anda belum dewasa atau variabel 'umur' belum diatur.";
}

echo "<br>";

$data = array("nama" => "Andi", "usia" => 20);
if (isset($data["nama"])) {
    echo "Nama : " . $data["nama"];
} else {
    echo "Nama tidak ditemukan dalam array.";
}
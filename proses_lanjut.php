<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedBuah = $_POST['buah'];

    if (isset($_POST['warna'])) {
        $selectedWarna = $_POST['warna'];
    } else {
        $selectedWarna = [];
    }

    $selectedJenisKelamin = $_POST['gender'];

    echo "Buahnya adalah: ". $selectedBuah . "<br>";

    if (!empty($selectedWarna)) {
        echo "Warna favoritnya adalah: " . implode(", ", $selectedWarna) . "<br>";
    } else {
        echo "Tidak ada warna favorit yang dipilih.<br>";
    }

    echo "Jenis kelaminnya adalah: " . $selectedJenisKelamin;
}
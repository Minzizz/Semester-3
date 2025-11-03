<?php
$pattern = '/[a-z]/';
$text = 'This is a Sample Text';
if (preg_match($pattern, $text)) {
    echo "Teks mengandung huruf kecil.";
} else {
    echo "Teks tidak mengandung huruf kecil.";
}

echo "<br>";

$pattern = '/[0-9]+/';
$text = 'There are 123 apples.';
if (preg_match($pattern, $text, $matches)) {
    echo "Ditemukan angka: " . $matches[0];
} else {
    echo "Tidak ditemukan angka.";
}

echo "<br>";

$pattern = '/apple/';
$replacement = 'banana';
$text = 'I like to eat apple.';
$newText = preg_replace($pattern, $replacement, $text);
echo $newText;

echo "<br>";

$pattern = '/go{0,2}d/';
$text = 'god is good';
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: ". $matches[0];
} else {
    echo "Tidak cocok dengan pola 'go?d'!";
}
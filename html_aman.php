<?php
$input = $_POST['input'] ?? '';
$input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
echo "Input yang aman: " . $input;

$email= $_POST['email'];
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<br>Email valid: " . htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
} else {
    echo "<br>Email tidak valid.";
}
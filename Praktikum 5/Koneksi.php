<?php
function getConnection() {
    $host = 'localhost';
    $db   = 'perpustakaan';
    $user = 'root';
    $pass = '';
    return new PDO("mysql:host=$host;dbname=$db", $user, $pass);
}
?>

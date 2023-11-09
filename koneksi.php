<?php // memulai sebuah pemrograman
//file : koneksi.php

// Menghubungkan ke database MySQL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "formparts_db";


//mengkoneksikan ke database
$conn = new mysqli($servername, $username, $password, $dbname);


//cek koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

?>


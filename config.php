<?php
$host = "localhost"; // Ganti dengan nama host Anda
$username = "username"; // Ganti dengan nama pengguna database Anda
$password = "password"; // Ganti dengan kata sandi database Anda
$database = "probation_db'"; // Ganti dengan nama database Anda

// Membuat koneksi
$koneksi = new mysqli($host, $username, $password, $database);

// Periksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
?>
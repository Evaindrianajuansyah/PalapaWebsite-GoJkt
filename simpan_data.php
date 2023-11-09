<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $nama_parts = $_POST['nama_parts'];
    $tipe_parts = $_POST['tipe_parts'];
    $package_parts = $_POST['package_parts'];
    $id_list_merek_parts = $_POST['id_list_merek_parts'];
    $id_list_jenis_parts = $_POST['id_list_jenis_parts'];

    // Your SQL query for inserting data into the 'parts' table
    $sql = "INSERT INTO parts (
        nama_parts,
        package_parts, 
        tipe_parts,
        id_list_merek_parts,
        id_list_jenis_parts
    ) VALUES (
        '$nama_parts',
        '$package_parts', 
        '$tipe_parts',
        '$id_list_merek_parts', 
        '$id_list_jenis_parts'
    )";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        header("Location: viewparts.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();

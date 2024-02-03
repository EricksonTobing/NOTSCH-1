<?php
$servername = "localhost"; 
$username = "notsch55"; 
$password = "notsch5"; 
$database = "notsch"; 

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $database);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
}
?>

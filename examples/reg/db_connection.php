<?php
$servername = "localhost";
$username = "notsch55";
$password = ""; // Gantilah dengan kata sandi yang benar
$database = "notsch";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

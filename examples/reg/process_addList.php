<?php
// Pastikan koneksi ke database sudah dibuat
$servername = "localhost";
$username = "notsch55";
$password = "notsch5";
$database = "notsch";

$conn = new mysqli($localhost, $notsch55, $notsch5, $notsch);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari formulir
$taskName = $_POST['task_name'];
$taskDescription = $_POST['task_description'];

// Insert data ke dalam tabel
$sql = "INSERT INTO tasks (task_name, task_description) VALUES ('$taskName', '$taskDescription')";

if ($conn->query($sql) === TRUE) {
    echo "Tugas berhasil ditambahkan.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

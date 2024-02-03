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

// Ambil data file
$file = $_FILES['file'];
$fileName = $file['name'];
$fileTmpName = $file['tmp_name'];

// Tentukan folder penyimpanan di server
$uploadFolder = 'uploads/';
$uploadPath = $uploadFolder . $fileName;

// Pindahkan file ke folder penyimpanan di server
move_uploaded_file($fileTmpName, $uploadPath);

// Simpan path file ke dalam database
$sql = "INSERT INTO user (file_path) VALUES ('$uploadPath')";

if ($conn->query($sql) === TRUE) {
    echo "File berhasil diunggah dan path disimpan di database.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

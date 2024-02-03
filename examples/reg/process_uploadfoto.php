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

// Ambil data gambar
$image = $_FILES['image'];
$imageName = $image['name'];
$imageTmpName = $image['tmp_name'];

// Tentukan folder penyimpanan di server
$uploadFolder = 'uploads/';
$uploadPath = $uploadFolder . $imageName;

// Pindahkan gambar ke folder penyimpanan di server
move_uploaded_file($imageTmpName, $uploadPath);

// Simpan path gambar ke dalam database
$sql = "INSERT INTO user (image_path) VALUES ('$uploadPath')";

if ($conn->query($sql) === TRUE) {
    echo "Gambar berhasil diunggah dan path disimpan di database.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<?php
include "db_connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari formulir
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];
    $npm = isset($_POST["npm"]) ? $_POST["npm"] : null; // Menambahkan pengecekan untuk npm
    $nidnKodeKelas = isset($_POST["nidnKodeKelas"]) ? $_POST["nidnKodeKelas"] : null; // Menambahkan pengecekan untuk nidnKodeKelas

    // Validasi password
    if ($password !== $confirmPassword) {
        die("Password tidak sesuai");
    }

    // Cek apakah ada data npm (mengindikasikan pengguna) atau nidnKodeKelas (mengindikasikan admin)
    if ($npm !== null) {
        $jurusan = $_POST["jurusan"];
        $kelas = $_POST["kelas"];
        $semester = $_POST["semester"];

        // Proses registrasi pengguna
        // Tambahkan kode untuk menyimpan data pengguna ke database
    } elseif ($nidnKodeKelas !== null) {
        // Proses registrasi admin
        // Tambahkan kode untuk menyimpan data admin ke database
    } else {
        die("Jenis akun tidak valid");
    }

    // Proses registrasi umum
    header("Location: NOTSCH-1/examples/profile/profile.html");
    exit();
} else {
    die("Akses tidak valid");
}
?>

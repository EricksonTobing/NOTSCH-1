<?php
include "db_connection.php";
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userType = $_POST["userType"];
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];

    // Validasi password
    if ($password !== $confirmPassword) {
        die("Password tidak sesuai");
    }

    // Validasi jenis akun
    if ($userType === "admin") {
        $nidnKodeKelas = $_POST["nidnKodeKelas"];
        $jurusan = $_POST["jurusan"];
        $kelas = $_POST["kelas"];
        $semester = $_POST["semester"];

        // Proses registrasi admin
    } elseif ($userType === "pengguna") {
        $npm = $_POST["npm"];
        $jurusan = $_POST["jurusan"];
        $kelas = $_POST["kelas"];
        $semester = $_POST["semester"];

        // Proses registrasi pengguna
    } else {
        die("Jenis akun tidak valid");
    }

    // Proses registrasi umum
    echo "Registrasi berhasil!";
} else {
    die("Akses tidak valid");
}
?>

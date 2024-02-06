<?php
include "db_connection.php"; // Sertakan file koneksi ke database

// Fungsi untuk membersihkan input
function clean_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// Inisialisasi variabel
$nama = $nidnKodeKelas = $email = $password = $confirmPassword = "";
$error_message = "";

// Proses formulir saat dikirimkan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Bersihkan dan dapatkan nilai dari formulir
  $nama = clean_input($_POST["nama"]);
  $nidnKodeKelas = clean_input($_POST["nidnKodeKelas"]);
  $email = clean_input($_POST["email"]);
  $password = clean_input($_POST["password"]);
  $confirmPassword = clean_input($_POST["confirmPassword"]);

  // Validasi data (tambahkan validasi sesuai kebutuhan)

  // Cek apakah password dan konfirmasi password sesuai
  if ($password != $confirmPassword) {
    // Handle kesalahan, misalnya dengan menyimpan pesan kesalahan
    $error_message = "Password dan konfirmasi password tidak sesuai.";
  } else {
    // Enkripsi password sebelum disimpan (gunakan metode enkripsi yang aman)
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Proses registrasi ke database
    $query = "INSERT INTO admin (nama, nidn_kode_kelas, email, password) VALUES ('$nama', '$nidnKodeKelas', '$email', '$hashed_password')";
    
    $result = mysqli_query($conn, $query);

    if ($result) {
      // Registrasi berhasil, redirect ke halaman profil admin
        // Proses registrasi umum
    header("Location: NOTSCH-1/examples/admin/profileadmin.html");
    exit();
    } else {
      // Handle kesalahan registrasi ke database
      $error_message = "Gagal melakukan registrasi. Silakan coba lagi.";
    }
  }
}
?>
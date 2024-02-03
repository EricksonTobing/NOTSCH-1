<?php
include "db_connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Registrasi</title>
</head>
<body>
  <div class="container">
    <h2>Registrasi</h2>
    <form action="process_registration.php" method="post">
      <label for="userType">Daftar Sebagai:</label>
      <div class="radio-group">
        <input type="radio" name="userType" value="admin" required>
        <label for="admin">Admin</label>
      </div>
      <div class="radio-group">
        <input type="radio" name="userType" value="pengguna" required>
        <label for="pengguna">Pengguna</label> <br><br>
      </div>

      <label for="nama">Nama Lengkap:</label>
      <input type="text" id="nama" name="nama" required><br>

      <label for="nidnKodeKelas">NIDN/Kode Kelas:</label>
      <input type="text" id="nidnKodeKelas" name="nidnKodeKelas" required><br>

      <label for="jurusan">Jurusan:</label><br>
      <input type="radio" name="jurusan" value="Teknik Informatika" required> Teknik Informatika<br>
      <input type="radio" name="jurusan" value="Sistem Informasi" required> Sistem Informasi<br>
      <input type="radio" name="jurusan" value="Data Science" required> Data Science<br><br>

      <label for="semester">Semester:</label><br>
      <select name="semester" required>
        <?php
        for ($i = 1; $i <= 14; $i++) {
          echo "<option value='$i'>$i</option>";
        }
        ?>
      </select><br>

      <label for="kelas">Kelas:</label><br>
      <div id="kelasOptions"></div>
      <br>

      <label for="email">Email:</label><br>
      <input type="email" id="email" name="email" required><br>

      <label for="password">Password:</label><br>
      <input type="password" id="password" name="password" required><br>

      <label for="confirmPassword">Ulangi Password:</label><br>
      <input type="password" id="confirmPassword" name="confirmPassword" required><br><br>

      <input type="submit" value="Daftar">
    </form>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      document.getElementsByName('jurusan').forEach(function(radio) {
        radio.addEventListener('change', function() {
          updateKelasOptions();
        });
      });

      function updateKelasOptions() {
        var jurusanOptions = {
          'Teknik Informatika': ['TI-A', 'TI-B', 'TI-C', 'TI-D'],
          'Sistem Informasi': ['SI-A', 'SI-B', 'SI-C', 'SI-D'],
          'Data Science': ['DS-1', 'DS-2', 'DS-3', 'DS-4']
        };

        var selectedJurusan = document.querySelector('input[name="jurusan"]:checked').value;
        var kelasOptions = jurusanOptions[selectedJurusan];

        var kelasOptionsDiv = document.getElementById('kelasOptions');
        kelasOptionsDiv.innerHTML = '';

        kelasOptions.forEach(function(kelas) {
          var radioInput = document.createElement('input');
          radioInput.type = 'radio';
          radioInput.name = 'kelas';
          radioInput.value = kelas;
          radioInput.required = true;

          var label = document.createElement('label');
          label.appendChild(radioInput);
          label.appendChild(document.createTextNode(' ' + kelas));

          kelasOptionsDiv.appendChild(label);
        });
      }

      // Inisialisasi saat halaman dimuat
      updateKelasOptions();
    });
  </script>
</body>
</html>

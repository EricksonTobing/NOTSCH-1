<!-- process_registration.php -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Registrasi Pengguna</title>
</head>
<body>
  <div class="container">
    <h2>Registrasi Pengguna</h2>
    <form action="process_registration.php" method="post">
      <label for="nama">Nama Lengkap:</label>
      <input type="text" id="nama" name="nama" required><br>

      <label for="npm">NPM Mahasiswa:</label>
      <input type="text" id="npm" name="npm" required><br>

      <label for="jurusan">Jurusan:</label><br>
      <select id="jurusan" name="jurusan" required>
        <option value="Teknik Informatika">Teknik Informatika</option>
        <option value="Sistem Informasi">Sistem Informasi</option>
        <option value="Data Science">Data Science</option>
      </select><br>

      <label for="semester">Semester:</label><br>
      <select name="semester" required>
        <?php
        for ($i = 1; $i <= 14; $i++) {
          echo "<option value='$i'>$i</option>";
        }
        ?>
      </select><br>

      <label for="kelas">Kelas:</label><br>
      <select id="kelas" name="kelas" required></select><br>

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
      document.getElementById('jurusan').addEventListener('change', function() {
        updateKelasOptions();
      });

      function updateKelasOptions() {
        var jurusanOptions = {
          'Teknik Informatika': ['TI-A', 'TI-B', 'TI-C', 'TI-D'],
          'Sistem Informasi': ['SI-A', 'SI-B', 'SI-C', 'SI-D'],
          'Data Science': ['DS-1', 'DS-2', 'DS-3', 'DS-4']
        };

        var selectedJurusan = document.getElementById('jurusan').value;
        var kelasOptions = jurusanOptions[selectedJurusan];

        var kelasSelect = document.getElementById('kelas');
        kelasSelect.innerHTML = ''; // Mengosongkan opsi sebelumnya

        kelasOptions.forEach(function(kelas) {
          var option = document.createElement('option');
          option.value = kelas;
          option.text = kelas;
          kelasSelect.add(option);
        });
      }

      // Inisialisasi saat halaman dimuat
      updateKelasOptions();
    });
  </script>
</body>
</html>

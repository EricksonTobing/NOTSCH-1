<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pilihan Daftar</title>
  <style>
    body {
      background-color: #ecd657;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .container {
      width: 300px;
      text-align: center;
    }

    button {
      margin: 10px;
      padding: 10px;
      cursor: pointer;
      width: 100%;
    }

    .admin-button {
      background-color: blue;
      color: white;
    }

    .pengguna-button {
      background-color: green;
      color: white;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Pilihan Daftar</h2>
    <button class="admin-button" onclick="location.href='registrasi_admin.php';">Sebagai Admin</button>
    <button class="pengguna-button" onclick="location.href='registrasi_pengguna.php';">Sebagai Pengguna</button>
  </div>
</body>
</html>

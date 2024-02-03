<?php
include "db_connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login Page</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="login-container">
    <h2>Login</h2>
    <form id="loginForm" action="process_login.php" method="post">
    <input type="hidden" name="form_type" value="login">
</form>

      <div class="form-group">
        <label for="username">Username (NIDN/NPM)</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div class="form-group">
        <label for="role">Login sebagai:</label>
        <select id="role" name="role">
          <option value="admin">Admin (Dosen/Komting)</option>
          <option value="user">User (Pengguna)</option>
        </select>
      </div>
      <button type="button" onclick="window.location.href='registrasi.php'" >Belum punya akun</button>
      <button type="submit">Login</button>
    </form>
  </div>
  <script src="scriptlog.js"></script>
</body>
</html>

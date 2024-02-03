document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();
    
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    const role = document.getElementById('role').value;
    
    // Check login credentials based on role
    if (role === 'admin') {
      // Admin login logic (NIDN/password or Kode Kelas/password)
      if ((username === 'nidn' && password === 'adminpassword') || (username === 'kodekelas' && password === 'adminpassword')) {
        alert('Admin login successful');
        // Redirect to admin page or perform necessary actions
      } else {
        alert('Invalid admin credentials');
      }
    } else if (role === 'user') {
      // User login logic (NPM/password)
      if (username === 'npm' && password === 'userpassword') {
        alert('User login successful');
        // Redirect to user page or perform necessary actions
      } else {
        alert('Invalid user credentials');
      }
    }
  });
  
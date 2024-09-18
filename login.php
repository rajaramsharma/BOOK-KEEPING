<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login Page</title>
  <link rel="stylesheet" href="styles.css">
  <script src="script.js"></script>
  <style>
    #register-container {
      display: none;
    }
  </style>
</head>
<body>
  <div class="login-container">
    <form class="login-form" action="login_check.php" method="post" id="login-form">
      <h2>Login</h2>
      <div class="input-group">
        <label for="username">Username</label>
        <input type="email" id="username" name="email" required>
      </div>
      <div class="input-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
      </div>
      <button type="submit" value="login">Login</button>

      <p onclick="loadRegisterPage()">Don't have an account? <button onclick="loadRegisterPage()">Register</button> here.</p>

    </form>
  </div>

  <div id="register-container"></div>

  <script>
    function loadRegisterPage() {
      // Hide the login form
      document.getElementById('login-form').style.display = 'none';

      // Show the register form
      document.getElementById('register-container').style.display = 'block';
      document.getElementById('register-container').innerHTML = `
        
        
        <div class="registration-form">
    <form method="post" action="process.php">
        <label>ID</label>
        <input type="text" name="id" />
        <br />
        <label>Name</label>
        <input type="text" name="name" />
        <br />
        <label>Address</label>
        <input type="text" name="address" />
        <br />
        <label>Password</label>
        <input type="password" name="password" />
        <br />
        <label>Email</label>
        <input type="text" name="email" />
        <br />
        <input type="submit" value="Register">
    </form>
</div>

        
      `;
    }
  </script>
</body>
</html>
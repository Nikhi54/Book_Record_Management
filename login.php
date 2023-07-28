<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link rel="stylesheet" href="login.css">
</head>
<body>
  <div class="login-container">
    <form  action = "validation.php" method="post" class="login-form" >
    
      <h1>Login</h1>
      <label for="username">Username</label>
      <input type="text" id="username" name="username" placeholder="Enter your username" required>
      <label for="password">Password</label>
      <input type="password" id="password" name="password" placeholder="Enter your password" required>
      <button type="submit">Login</button>
      <p>Don't have an account? <a href="#">Sign Up</a></p>
     
    </form>
  </div>
</body>
</html>

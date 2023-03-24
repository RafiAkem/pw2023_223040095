<!DOCTYPE html>
<html>
  <head>
    <title>Registration Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
  </head>
  <body>
    <form>
        <h1>Register</h1>
      <label for="fullname">Full Name:</label>
      <input type="text" id="fullname" name="fullname" required><br><br>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required><br><br>
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required><br><br>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required><br><br>
      <label for="confirm_password">Confirm Password:</label>
      <input type="password" id="confirm_password" name="confirm_password" required><br><br>
      <div class="button">
        <input type="submit" value="Register">
      </div>
      <div class="create">
        <p>Sudah Punya Akun? <a href="login.php">Login Disini!</a></p>
      </div>
    </form>
  </body>
</html>
<!DOCTYPE html>
<html>
  <head>
    <title>Login and Registration Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
  </head>
  <body>
    <form>
      <h1>Login</h1>
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required><br><br>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required><br><br>
      <div class="forgot">
        <div class="remember">
          <input type="checkbox" name="remember" id="remember">   
          <label for="remember">Remember Me</label>
        </div>
        <div class="forgotpass">
          <a href="">Forgot Password?</a>
        </div>
      </div>
      <div class="button">
        <input type="submit" value="Login">
      </div>
      <div class="create">
        <p>Belum Punya Akun? <a href="register.php">Klik Disini!</a></p>
      </div>
    </form>

  </body>
</html>

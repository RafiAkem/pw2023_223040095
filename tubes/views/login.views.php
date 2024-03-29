<?php require('partials/header.php') ?>
<style>
  .navbar-brand {
    font-family: Viga;
    font-size: 32px;
  }

  .card {
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    backdrop-filter: blur(20px);
    display: flex;
    position: relative;
  }

  .card-header {
    background-color: #28a745;
    color: #fff;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
  }
</style>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">No'Akem</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
    </div>
  </nav>

  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-4">
        <div class="card shadow-lg rounded" style="background: rgba(255, 255, 255, 0.5); backdrop-filter: blur(20px);">
          <div class="card-body">
            <h4 class="text-center mb-4" style="font-size: 28px;">Login</h4>
            <hr>
            <!-- Form Start -->
            <div class="form-group">
              <form action="" method="post">
                <label for="username" style="color: black; font-size: 18px;">Username/Email</label>
                <input type="text" name="username" class="form-control" id="username" style="color: black; font-size: 18px;" autocomplete="off">
            </div>
            <div class="form-group">
              <label for="password" style="color: black; font-size: 18px;">Password</label>
              <input type="password" name="password" class="form-control" id="password" style="color: black; font-size: 18px;" autocomplete="off">
            </div>
            <div class="form-group form-check" style="margin-top:3%">
              <input type="checkbox" class="form-check-input" id="rememberMe">
              <label class="form-check-label" name="remember" for="rememberMe" style="color: black; font-size: 18px;">Remember Me</label>
            </div>
            <button type="submit" name="login" class="btn btn-success btn-block" style="width: 100%; font-size: 20px;">Login</button>
            <p class="mt-4 mb-0 text-center" style="color: black; font-size: 18px;">Belum Punya Akun? <a href="register.php">Daftar</a></p>
            </form>
            <!-- Form End -->
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
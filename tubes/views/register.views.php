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
    backdrop-filter: blur(5px);
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
        <div class="card shadow-lg rounded" style="background: rgba(255, 255, 255, 0.5); backdrop-filter: blur(5px);">
          <div class="card-body">
            <h4 class="text-center mb-4" style="font-size: 28px;">Register</h4>
            <hr>
            <!-- Form Start -->
            <form action="" method="post">
              <div class="form-group">
                <label for="username" style="color: black; font-size: 18px;">Username/Email</label>
                <input type="text" name="username" class="form-control" id="username" style="color: black; font-size: 18px;">
              </div>
              <div class="form-group">
                <label for="password" style="color: black; font-size: 18px;">Password</label>
                <input type="password" name="password" class="form-control" id="password" style="color: black; font-size: 18px;">
              </div>
              <div class="form-group">
                <label for="password" style="color: black; font-size: 18px;">Konfirmasi Password</label>
                <input type="password" name="konfirmasi" class="form-control" id="password" style="color: black; font-size: 18px;">
              </div>
              <button type="submit" name="register" class="btn btn-success btn-block mt-3" style="width: 100%; font-size: 20px;">Register</button>
              <p class="mt-4 mb-0 text-center" style="color: black; font-size: 18px;">Sudah Punya Akun? <a href="login.php">Login</a>!</p>
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
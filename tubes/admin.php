<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Page</title>
  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<style>
  .navbar-brand {
    font-family: Viga;
    font-size: 32px;
  }

  .card-container {
    margin-top: 50px;
  }

  .card-body {
    font-family: Viga;
  }
</style>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">No'Akem</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Berita
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Terbaru</a></li>
              <li><a class="dropdown-item" href="#">Populer</a></li>
            </ul>
          </li>
        </ul>
        <img src="user.png" class="img-fluid" style="width:2%">
        <div class="navbar-nav my-2">
          <a class="nav-item btn btn-primary ms-3" href="#">Sign Out</a>
        </div>
      </div>
    </div>
  </nav>
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-md-10 col-sm-12 card-container">
        <div class="card text-center">
          <div class="card-header">
            <h4>Dashboard Admin</h4>
          </div>
          <div class="card-body">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, et. Quos ea consequuntur omnis. Totam dolores illo nihil laboriosam saepe, dignissimos enim dolor non quam et ipsa vero, voluptatum minus.</p>
            <a href="#" class="btn btn-success">Add</a>
            <a href="#" class="btn btn-primary">Edit</a>
            <a href="#" class="btn btn-danger">Delete</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
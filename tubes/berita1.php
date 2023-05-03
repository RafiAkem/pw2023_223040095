<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita</title>
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        .navbar-brand {
            font-family: Viga;
            font-size: 32px;
        }

        .related-article {
            background-color: #f8f9fa;
            border-radius: 10px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
            padding: 20px;
        }

        .related-article img {
            width: 100%;
            height: auto;
            object-fit: cover;
            border-radius: 10px;
        }

        body {
            padding: 0;
            margin: 0;
        }
    </style>
</head>

<body>
    <!-- Nav Start -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">No'Akem</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
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
                <form class="d-flex" role="search">
                    <input class="form-control form-control-sm me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <div class="navbar-nav my-2">
                    <a class="nav-item btn btn-primary ms-3" href="#">Login</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Nav End -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <img src="https://cdn01.metrotvnews.com/dynamic/content/2023/05/02/KZmCva6L/t_64513ee7def41.webp?w=800" class="img-fluid mb-3" alt="Gambar Artikel">
                <h1 class="mb-3">Negeri Banyak Impor</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tristique lectus vel risus imperdiet, nec mollis purus maximus. In euismod neque sit amet sem elementum, at tristique purus tincidunt. Donec pulvinar enim ut turpis malesuada vehicula. Proin sodales, ante in gravida consequat, odio nunc ullamcorper urna, eget rhoncus justo magna sit amet ipsum. Maecenas eu urna vel tellus fermentum tristique in sed dui. Duis hendrerit magna vel nibh ultricies, ut aliquam purus ultricies. Sed venenatis faucibus lectus eu volutpat. In hac habitasse platea dictumst.</p>
                <p>Etiam ut sem ligula. Vivamus consequat fermentum mi in maximus. Praesent feugiat eu nunc vel vulputate. Sed lobortis purus eget ultrices rhoncus. Ut eget velit vitae ipsum aliquam consectetur. Nullam commodo commodo mauris a tristique. Nullam eget sapien vitae lorem blandit faucibus id a urna. Nunc ac libero in nisi venenatis pharetra non non sapien. Proin commodo mi eget ultricies malesuada. Nam quis velit commodo, hendrerit arcu in, interdum justo. Sed ac elit euismod, mollis dolor sed, tempor dolor.</p>
            </div>
            <div class="col-md-4">
                <h3 class="mb-3">Artikel Terkait</h3>
                <ul class="list-unstyled">
                    <li class="mb-3 d-flex align-items-center">
                        <div class="col-md-4">
                            <img src="https://via.placeholder.com/150x100" alt="Gambar Artikel Terkait">
                        </div>
                        <div class="col-md-8 ps-3">
                            <a href="#">Berita 1</a>
                            <p class="my-2">test.</p>
                        </div>
                    </li>
                    <li class="mb-3 d-flex align-items-center">
                        <div class="col-md-4">
                            <img src="https://via.placeholder.com/150x100" alt="Gambar Artikel Terkait">
                        </div>
                        <div class="col-md-8 ps-3">
                            <a href="#">Berita 2</a>
                            <p class="my-2">test.</p>
                        </div>
            </div>
            </li>
            </ul>
        </div>
    </div>

    <footer class="text-center text-lg-start text-white" style="background-color: #929fba; width: 100%;">
        <!-- Grid container -->
        <div class="container-fluid">
            <!-- Section: Links -->
            <section class="">
                <!--Grid row-->
                <div class="row">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">
                            No'Akem
                        </h6>

                    </div>
                    <!-- Grid column -->
                    <hr class="w-100 clearfix d-md-none" />
                    <!-- Grid column -->

                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Grid column -->
                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                        <p><i class="fas fa-envelope mr-3"></i> yc66zio@gmail.com</p>
                        <p><i class="fas fa-phone mr-3"></i> +62 89654782430</p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Follow us</h6>

                        <!-- Facebook -->
                        <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>

                        <!-- Twitter -->
                        <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee" href="#!" role="button"><i class="fab fa-twitter"></i></a>

                        <!-- Google -->
                        <a class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39" href="#!" role="button"><i class="fab fa-google"></i></a>

                        <!-- Instagram -->
                        <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac" href="#!" role="button"><i class="fab fa-instagram"></i></a>

                        <!-- Linkedin -->
                        <a class="btn btn-primary btn-floating m-1" style="background-color: #0082ca" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>
                        <!-- Github -->
                        <a class="btn btn-primary btn-floating m-1" style="background-color: #333333" href="#!" role="button"><i class="fab fa-github"></i></a>
                    </div>
                </div>
                <!--Grid row-->
            </section>
            <!-- Section: Links -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2020 Copyright:
            <a class="text-white" href="#">Rafi Ikhsanul Hakim</a>
        </div>
    </footer>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>
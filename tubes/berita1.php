<?php require('partials/header.php') ?>
<style>
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
    <?php require('partials/nav.php') ?>
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

    <section style="background-color: white;">
        <div class="container my-5 py-5">
            <div class="row d-flex">
                <div class="col-md-12 col-lg-10 col-xl-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-start align-items-center">
                                <!-- <img class="rounded-circle shadow-1-strong me-3" src="" alt="avatar" width="60" height="60" /> -->
                                <div>
                                    <h6 class="fw-bold text-primary mb-1">Naurah Tsabitah</h6>
                                    <p class="text-muted small mb-0">
                                        Dikirim Pada May - 2023
                                    </p>
                                </div>
                            </div>

                            <p class="mt-3 mb-4 pb-2">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip consequat.
                            </p>

                            <div class="small d-flex justify-content-start">
                                <a href="#!" class="d-flex align-items-center me-3">
                                    <i class="far fa-thumbs-up me-2"></i>
                                    <p class="mb-0">Like</p>
                                </a>
                                <a href="#!" class="d-flex align-items-center me-3">
                                    <i class="far fa-comment-dots me-2"></i>
                                    <p class="mb-0">Comment</p>
                                </a>
                                <a href="#!" class="d-flex align-items-center me-3">
                                    <i class="fas fa-share me-2"></i>
                                    <p class="mb-0">Share</p>
                                </a>
                            </div>
                        </div>
                        <div class="card-footer py-3 border-0" style="background-color: #f8f9fa;">
                            <div class="d-flex flex-start w-100">
                                <!-- <img class="rounded-circle shadow-1-strong me-3" src="" alt="avatar" width="40" height="40" /> -->
                                <div class="form-outline w-100">
                                    <textarea class="form-control" id="textAreaExample" rows="4" style="background: #fff;"></textarea>
                                    <label class="form-label" for="textAreaExample">Message</label>
                                </div>
                            </div>
                            <div class="float-end mt-2 pt-1">
                                <button type="button" class="btn btn-primary btn-sm">Post comment</button>
                                <button type="button" class="btn btn-outline-primary btn-sm">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php require('partials/footer.php') ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>
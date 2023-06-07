<?php require('partials/header.php');
require('partials/nav.php')
?>
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

    h1 {
        font-family: 'Viga', sans-serif;
    }

    p {
        font-family: 'Poppins', sans-serif;
        font-size: 16px;
    }
</style>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <img src="./img/upload/<?= $item['image']; ?>" class="img-fluid mb-3" alt="Gambar Artikel">
                <h1 class="mb-3"><?= $item['title']; ?></h1>
                <p class="whitespace-pre-wrap"><?= nl2br($item['content']); ?></p>
            </div>
            </li>
            </ul>
        </div>
    </div>

    <section class="content-item" id="comments">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <form action="" method="post">
                        <input type="hidden" name="newsId" value="<?= $item['id'] ?>">
                        <h3 class="pull-left">New Comment</h3>
                        <button type="submit" class="btn btn-normal pull-right">Submit</button>
                        <fieldset>
                            <div class="row">
                                <div class="col-sm-3 col-lg-2 hidden-xs">
                                    <img class="img-fluid" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                                </div>
                                <div class="form-group col-xs-12 col-sm-9 col-lg-10">
                                    <textarea class="form-control" id="message" placeholder="Your message" required=""></textarea>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
            <!-- COMMENT 1 - END -->
    </section>


    <?php require('partials/footer.php') ?>
</body>

</html>
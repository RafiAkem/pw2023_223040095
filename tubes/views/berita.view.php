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

    /* body {
        margin-top: 20px;
    } */

    .content-item {
        padding: 30px 0;
        background-color: #FFFFFF;
    }

    .content-item.grey {
        background-color: #F0F0F0;
        padding: 50px 0;
        height: 100%;
    }

    .content-item h2 {
        font-weight: 700;
        font-size: 35px;
        line-height: 45px;
        text-transform: uppercase;
        margin: 20px 0;
    }

    .content-item h3 {
        font-weight: 400;
        font-size: 20px;
        color: #555555;
        margin: 10px 0 15px;
        padding: 0;
    }

    .content-headline {
        height: 1px;
        text-align: center;
        margin: 20px 0 70px;
    }

    .content-headline h2 {
        background-color: #FFFFFF;
        display: inline-block;
        margin: -20px auto 0;
        padding: 0 20px;
    }

    .grey .content-headline h2 {
        background-color: #F0F0F0;
    }

    .content-headline h3 {
        font-size: 14px;
        color: #AAAAAA;
        display: block;
    }


    #comments {
        box-shadow: 0 -1px 6px 1px rgba(0, 0, 0, 0.1);
        background-color: #FFFFFF;
    }

    #comments form {
        margin-bottom: 30px;
    }

    #comments .btn {
        margin-top: 7px;
    }

    #comments form fieldset {
        clear: both;
    }

    #comments form textarea {
        height: 100px;
    }

    #comments .media {
        border-top: 1px dashed #DDDDDD;
        padding: 20px 0;
        margin: 0;
    }

    #comments .media>.pull-left {
        margin-right: 20px;
    }

    #comments .media img {
        max-width: 100px;
    }

    #comments .media h4 {
        margin: 0 0 10px;
    }

    #comments .media h4 span {
        font-size: 14px;
        float: right;
        color: #999999;
    }

    #comments .media p {
        margin-bottom: 15px;
        text-align: justify;
    }

    #comments .media-detail {
        margin: 0;
    }

    #comments .media-detail li {
        color: #AAAAAA;
        font-size: 12px;
        padding-right: 10px;
        font-weight: 600;
    }

    #comments .media-detail a:hover {
        text-decoration: underline;
    }

    #comments .media-detail li:last-child {
        padding-right: 0;
    }

    #comments .media-detail li i {
        color: #666666;
        font-size: 15px;
        margin-right: 10px;
    }
</style>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <img src="./img/upload/<?= $item['image']; ?>" class="img-fluid mb-3 ratio ratio-16x9" alt="Gambar Artikel">
                <a class="btn btn-primary my-3" href="print.php?id=<?= $item['id'] ?>" target="_blank">Print</a>
                <h1 class="mb-3"><?= $item['title']; ?></h1>
                <p class="whitespace-pre-wrap"><?= nl2br($item['content']); ?></p>
            </div>
        </div>
    </div>

    <section class="content-item" id="comments">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <form action="" method="post">
                        <input type="hidden" name="newsId" value="<?= $item['id'] ?>">
                        <h3 class="pull-left">New Comment</h3>
                        <fieldset>
                            <div class="row">
                                <div class="col-sm-3 col-lg-2 hidden-xs">
                                    <img class="img-fluid" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                                </div>
                                <div class="form-group col-xs-12 col-sm-9 col-lg-10">
                                    <textarea class="form-control" name="comment" id="message" placeholder="Your message" required=""></textarea>
                                    <button type="submit" name="submit-comment" class="btn btn-primary my-3">Submit</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                    <?php foreach ($comments as $comment) : ?>
                        <div class="media d-flex my-3">
                            <div class="col-sm-3 col-lg-2 hidden-xs">
                                <img class="img-fluid" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Anonymous</h4>
                                <p><?= $comment['comment']; ?></p>
                                <ul class="list-unstyled list-inline media-detail pull-left">
                                    <li><i class="fa fa-calendar"></i><?= $comment['created_at']; ?></li>
                                </ul>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
    </section>


    <?php require('partials/footer.php') ?>
</body>

</html>
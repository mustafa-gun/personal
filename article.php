<?php require_once 'config.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Mustafa Gün | Kişisel Web Sitesi</title>
    <?php include 'assets/includes/head.php'; ?>
    <link rel="stylesheet" href="./assets/css/person.css">
</head>

<body>
    <?php include_once 'assets/includes/navbar.php'; ?>
    <div class="container mt-5">
        <div class="jumbotron page-info" style="background-image: url(assets/img/article.jpg);">
            <h1>Haberler</h1>
            <h5>PlanetDP sitesinde editörlüğünü yaptığım haberler.</h5>
        </div>
        <? $articleConn = $connection->query("SELECT * FROM articles WHERE statu='1' ORDER BY İD DESC", PDO::FETCH_ASSOC); ?>
        <div class="d-flex px-3 page-content">
            <?foreach ($articleConn as $article) :?>
            <div class="article pt-2 pb-4 px-2 w-100 d-flex my-3 border-bottom border-secondary">
                <figure>
                    <img src="upload/<?= $article['articleImg'] ?>" alt="<?= $article['articleName'] ?>" class="article-img">
                </figure>
                <div class="article-content flex-grow-1">
                    <h4><?= $article['articleName'] ?></h4>
                    <?= $article['articleContent'] ?>
                </div>
                <a href="<?= $article['articleLink'] ?>" class="read-more">Devamını Oku...</a>
            </div>
            <?endforeach?>
            <hr>
        </div>
    </div>
</body>

</html>
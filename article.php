<?php require_once 'config.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Haberler | Kişisel Web Sitesi</title>
    <?php include 'assets/includes/head.php'; ?>
    <script src="assets/js/lazy.js"></script>
</head>

<body>
    <?php include_once 'assets/includes/navbar.php'; ?>
    <div class="container mt-5" id="article-container">
        <div class="jumbotron page-info mt-5" style="background-image: url(assets/img/article.jpg);">
            <h1>Haberler</h1>
            <h5>PlanetDP sitesinde editörlüğünü yaptığım haberler.</h5>
        </div>
        <?php
        $limit = 6;
        $query = "SELECT * FROM articles";

        include 'assets/includes/page-set.php';

        $show = "SELECT * FROM articles WHERE statu='1' ORDER BY id DESC LIMIT $starting_limit, $limit";

        $r = $connection->prepare($show);
        $r->execute();
        ?>

        <div class="page-content px-3 mb-5">
            <? while($article = $r->fetch(PDO::FETCH_ASSOC)): ?>
            <div class="article pt-2 pb-4 px-2 w-100 my-3 border-bottom border-secondary">
                <figure>
                    <img src="data:image/svg+xml,<svg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20300%20152'></svg>" data-src="https://mustafagun.com/new/upload/<?= $article['articleImg'] ?>" alt="<?= $article['articleName'] ?>" class="article-img lazy">
                </figure>
                <div class="article-content flex-grow-1">
                    <h4><?= $article['articleName'] ?></h4>
                    <?= $article['articleContent'] ?>
                </div>
                <a href="<?= $article['articleLink'] ?>" class="read-more r-link ai-element ai-element_type2 ai-element2">
                    <span class="ai-element__label">Devamını Oku...</span>
                </a>
            </div>
            <? endwhile; ?>
            <? include 'assets/includes/pagination.php' ?>

        </div>
    </div>
</body>

</html>
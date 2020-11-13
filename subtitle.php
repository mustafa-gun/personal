<?php require_once 'config.php' ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Türkçe Altyazı | Mustafa Gün</title>

    <?php include 'assets/includes/head.php'; ?>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Cardo:400i|Rubik:400,700&display=swap');

        :root {
            --d: 700ms;
            --e: cubic-bezier(0.19, 1, 0.22, 1);
        }

        * {
            box-sizing: border-box;
        }

        body {
            place-items: center;
        }

        a {
            color: white !important;
            text-decoration: none !important;
        }

        .page-content {
            display: flex;
            padding: .2rem;
            max-width: 1024px;
            margin: 0 auto;
            font-family: var(--font-sans);
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-evenly;
        }

        @media (max-width:699px) {
            .page-content {
                display: flex;
                flex-wrap: wrap;
                flex-direction: row;
                justify-content: center;
            }

            .content {
                margin: auto;
            }

            .card {
                width: 45% !important;
                height: 200px !important;
                margin: 3px;
            }

            .content {
                height: 20vh !important;
                width: 100% !important;
            }

            .titleEN {
                display: flex;
                flex-direction: column;
                position: unset !important;
                margin: auto;
                text-align: center;
                width: 100% !important;
                text-shadow: 0 2px 4px black;
            }

            .titleTR {
                width: 120% !important;
                text-shadow: 0 2px 4px black;
                display: none;
            }
        }

        .card {
            position: relative;
            display: flex;
            align-items: flex-end;
            overflow: hidden;
            padding: .2rem;
            width: 23%;
            height: 350px;
            text-align: center;
            color: whitesmoke;
            background-size: cover;
            background-position: top;
            background-color: rgb(255 255 255 / 12%);
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1), 0 2px 2px rgba(0, 0, 0, 0.1), 0 4px 4px rgba(0, 0, 0, 0.1), 0 8px 8px rgba(0, 0, 0, 0.1), 0 16px 16px rgba(0, 0, 0, 0.1);
            border: 1px black;
            transition: .3s;
            text-decoration: none;
            margin: .5rem;
        }

        .card:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 110%;
            background-size: cover;
            background-position: 0 0;
            transition: transform calc(var(--d) * 1.5) var(--e);
            pointer-events: none;
        }

        .card:after {
            content: '';
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 200%;
            pointer-events: none;
            background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.009) 11.7%, rgba(0, 0, 0, 0.034) 22.1%, rgba(0, 0, 0, 0.072) 31.2%, rgba(0, 0, 0, 0.123) 39.4%, rgba(0, 0, 0, 0.182) 46.6%, rgba(0, 0, 0, 0.249) 53.1%, rgba(0, 0, 0, 0.320) 58.9%, rgba(0, 0, 0, 0.394) 64.3%, rgba(0, 0, 0, 0.468) 69.3%, rgba(0, 0, 0, 0.540) 74.1%, rgba(0, 0, 0, 0.607) 78.8%, rgba(0, 0, 0, 0.668) 83.6%, rgba(0, 0, 0, 0.721) 88.7%, rgba(0, 0, 0, 0.762) 94.1%, rgba(0, 0, 0, 0.790) 100%);
            transform: translateY(-50%);
            transition: transform calc(var(--d) * 2) var(--e);
        }

        .content {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
            padding: 1rem;
            transition: transform var(--d) var(--e);
            z-index: 1;
            height: 100%;
            width: 24vh;
        }

        .content>*+* {
            margin-top: 1rem;
        }

        .titleTR {
            position: absolute;
            bottom: 1rem;
            width: 25vh;
            font-weight: 200;
        }

        .titleEN {
            position: absolute;
            bottom: 4rem;
            width: 25vh;
            font-weight: 600;
            padding: 0 5px;
        }

        .copy {
            font-family: var(--font-serif);
            font-size: 1.125rem;
            font-style: italic;
            line-height: 1.35;
        }

        .btn {
            cursor: pointer;
            margin-top: 1.5rem;
            padding: 0.75rem 1.5rem;
            font-size: 0.65rem;
            font-weight: bold;
            letter-spacing: 0.025rem;
            text-transform: uppercase;
            color: white !important;
            background-color: black;
            border: none;
        }

        .btn:hover {
            background-color: #0d0d0d;
        }

        @media (hover: hover) and (min-width: 600px) {
            .card:after {
                transform: translateY(0);
            }

            .content {
                transform: translateY(calc(100% - 4.5rem));
            }

            .content>*:not(.title) {
                opacity: 0;
                transform: translateY(1rem);
                transition: transform var(--d) var(--e), opacity var(--d) var(--e);
            }

            .card:hover,
            .card:focus-within {
                align-items: center;
                filter: grayscale(.4);
                color: whitesmoke !important;
            }

            .card:hover:before,
            .card:focus-within:before {
                transform: translateY(-4%);
            }

            .card:hover:after,
            .card:focus-within:after {
                transform: translateY(-50%);
            }

            .card:hover .content,
            .card:focus-within .content {
                transform: translateY(0);
            }

            .card:hover .content>*:not(.title),
            .card:focus-within .content>*:not(.title) {
                opacity: 1;
                transform: translateY(0);
                transition-delay: calc(var(--d) / 8);
            }

            .card:focus-within:before,
            .card:focus-within:after,
            .card:focus-within .content,
            .card:focus-within .content>*:not(.title) {
                transition-duration: 0s;
            }

            span.mvPoint {
                text-shadow: 0 2px 3px white;
            }
        }
    </style>
</head>
<? $subConn = $connection->query("SELECT * FROM subtitles ORDER BY subPoint DESC", PDO::FETCH_ASSOC);?>

<body>
    <?php include_once 'assets/includes/navbar.php'; ?>
    <div class="container-fluid">
        <div class="container mb-3" id="subTitle">
            <div class="jumbotron page-info" style="background-image: url(assets/img/subtitle.jpg);">
                <h1>Türkçe Altyazı</h1>
                <h5>Hobi olarak Türkçe altyazı çevirmenliği yapıyorum.</h5>
            </div>
            <?php
            $limit = 8;
            $query = "SELECT * FROM subtitles";

            include 'assets/includes/page-set.php';

            $show = "SELECT * FROM subtitles ORDER BY subPoint DESC LIMIT $starting_limit, $limit";

            $r = $connection->prepare($show);
            $r->execute();
            ?>
            <main class="page-content mb-5">
                <? while($subs = $r->fetch(PDO::FETCH_ASSOC)): ?>
                <a href="https://www.planetdp.org/title/<?= $subs['subtitle_id']; ?>" class="card" style="background-image: url(https://mustafagun.com/uploads/mg<?= $subs['subtitle_id']; ?>.jpg) ;" target="_blank">
                    <div class="point p-1">
                        <i class="fab fa-imdb fa-2x"></i> <span class="mvPoint pl-1"><?= $subs['subPoint'] ?></span></div>
                    <div class="content">
                        <p class="titleEN"><?= $subs['nameEN'] ?></p>
                        <?php if ($subs['nameTR'] != "") : ?>
                            <b class="titleTR">(<?= $subs['nameTR'] ?>)</b>
                        <?php endif ?>
                    </div>
                </a>
                <? endwhile; ?>
                <? include 'assets/includes/pagination.php' ?>
            </main>
        </div>
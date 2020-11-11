<!DOCTYPE html>
<html id="home">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Mustafa Gün | Kişisel Web Sitesi</title>
    <?php include 'assets/includes/head.php'; ?>
    <link rel="stylesheet" href="./assets/css/person.css">
</head>

<body>
    <?php include_once 'assets/includes/navbar.php'; ?>
    <div class="container-fluid home">
        <div class="container">
            <script src="./assets/js/person.js"></script>
            <div class="card">
                <div class="ds-top"></div>
                <div class="avatar-holder">
                    <img src="./assets/img/person.jpg" alt="Mustafa Gün">
                </div>
                <div class="name">
                    <b>Mustafa GÜN</b>
                </div>
                <div class="ds-skill">
                    <h6>Becerilerim <i class="fa fa-code" aria-hidden="true"></i></h6>
                    <div class="skill html">
                        <h6><i class="fab fa-html5"></i> HTML5 </h6>
                        <div class="bar bar-html">
                            <p>100%</p>
                        </div>
                    </div>
                    <div class="skill css">
                        <h6><i class="fab fa-css3-alt"></i> CSS3 </h6>
                        <div class="bar bar-css">
                            <p>90%</p>
                        </div>
                    </div>
                    <div class="skill">
                        <h6><i class="fab fa-php"></i>PHP</h6>
                        <div class="bar bar-php">
                            <p>60%</p>
                        </div>
                    </div>
                    <div class="skill javascript">
                        <h6><i class="fab fa-js"></i> JavaScript </h6>
                        <div class="bar bar-js">
                            <p>50%</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'assets/includes/footer.php'; ?>
	<?php

    $s = $connection->prepare($query);
    $s->execute();
    $total_results = $s->rowCount();
    $total_pages = ceil($total_results / $limit);

    if (!isset($_GET['page']) || $_GET['page'] < 1 || $_GET['page'] == "" || $_GET['page'] > $total_pages) {
        $page = 1;
        $_GET['page'] = 1;
    } else {
        $page = $_GET['page'];
    }

    $pre = $page - 1;
    $next = $page + 1;

    $starting_limit = ($page - 1) * $limit;



    ?>
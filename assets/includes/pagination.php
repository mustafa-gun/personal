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
<div class="pagination-container" data-wow-duration="0.5s">

    <ul class="pagination">
        <li class="pagination-item--wide first">
            <a class="pagination-link--wide mr-1 first <? if($_GET['page']==1 ) { echo 'disabled';} ?>" href="?page=<? if($_GET['page']!=1){ echo $pre;}  else { echo $page; } ?>">
                <span id="next-show">Önceki</span> <i class="fas fa-chevron-left" style="display: none;"></i>
            </a>
        </li>
        <?php for ($page = 1; $page <= $total_pages; $page++) : ?>
            <li class="pagination-item first-number <? if($_GET['page']==$page) { echo 'disabled';} ?>">
                <a class="pagination-link <? if($_GET['page']==$page){ echo 'disabled-link';} ?>" href="<?= "?page=$page"; ?>">
                    <?= $page ?>
                </a>
            </li>
        <?php endfor; ?>
        <li class="pagination-item--wide last m-last <? if($_GET['page']==$total_pages){ echo 'disabled';} ?>">
            <a class="pagination-link--wide last" href="?page=<? if($_GET['page']!=$total_pages) { echo $next;} else { echo $page; }  ?>">
                <span id="next-show">Sonraki</span> <i class="fas fa-chevron-right" style="display: none;"></i>
            </a>
        </li>
    </ul>

</div>
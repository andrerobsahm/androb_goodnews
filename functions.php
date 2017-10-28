<?php
declare(strict_types=1);

function sortByDate($a, $b) {
    return strtotime($a['pub']) < strtotime($b['pub']);
}
usort($newsFeed, 'sortByDate');

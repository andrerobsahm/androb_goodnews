<?php

declare(strict_types=1);

// This is the file where you can keep all your functions.


function sortByDate($a, $b) {
    return (int) $a['pub'] < (int) $b['pub'];
}
usort($newsFeed, 'sortByDate');

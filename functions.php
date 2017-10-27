<?php

declare(strict_types=1);

// This is the file where you can keep all your functions.


function sortByDate($a, $b) {
    return strtotime($a['pub']) < strtotime($b['pub']);
}
usort($newsFeed, 'sortByDate');



//Back to top function

<?php

declare(strict_types=1);

//The function sorts the post by date, newest on top.
function sortByDate ($a, $b){
    return $a['published_date'] <  $b['published_date'];

}
usort($posts, 'sortByDate');


?>

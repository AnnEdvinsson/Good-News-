<?php

declare(strict_types=1);


// require __DIR__.'/data.php';

function sortByDate ($a, $b){
  return $a['published_date'] <  $b['published_date'];

}
usort($posts, 'sortByDate');
// foreach ($posts as $post) {
//     echo $post['published_date'].'<br>';
// }

 ?>

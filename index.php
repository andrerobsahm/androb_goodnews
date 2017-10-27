<?php
declare(strict_types=1);
require __DIR__.'/data.php';
require __DIR__.'/functions.php';

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <title>The fellowship</title>
  </head>
  <body>
    <h1 id=''>The fellowship</h1>

  <?php foreach ($newsFeed as $post) {?>
    <div class="wrapper">
      <article class="blogitem">
        <div class="post-top">
          <h1><?php echo $post['title']; ?></h1>
          <h2><?php echo $post['author']['name']?></h2>
        </div>
        <div class="post-content">
            <p><?php echo $post['content']; ?></p>
        </div>

        <div class="post-bottom">
          <p>Published: <?php echo $post['pub']; ?></p>
        </div>
        <div>
          <img class="like-button" src="images/sauron.png" alt="the eye of sauron">
          <p><?php echo $post['like']; ?></p>
        </div>
      </article>
    </div>
  <?php } ?>

  </body>
</html>

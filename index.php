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
    <title>Your 'Good News' in the morning</title>
  </head>
  <body>
    <h1 id=''>The Blog</h1>

<?php foreach ($newsFeed as $post) {?>
  <div class="wrapper">
    <article class="blogitem">
        <h1><?php echo $post['title']; ?></h1>
        <h3><?php echo $post['author']['name']?></h3>
        <p><?php echo $post['content']; ?></p>
      <div class="post-bottom">
        <p><?php echo $post['pub']; ?></p>
        <p><?php echo $post['like']; ?></p>
    </div>
  </article>
<?php } ?>
    </div>
  </body>
</html>

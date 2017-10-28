<?php
declare(strict_types=1);
require __DIR__.'/data.php';
require __DIR__.'/functions.php';

// The project should use the following PHP functionality:
// - Variables
// - Multiple data types
// - Arrays
// - Functions
// - Loops (for, while or foreach)
// - Concatenation
// - Output (echo, print etc.)

// The project's PHP files should declare strict types.
// The repository should have at least 10 commits
// The repository must contain a README.md file with installation instructions and documentation.
// The repository must contain a .editorconfig file with your preferred settings.
// The repository must contain a LICENSE file.
// The project must be tested on at least two of your classmates computers.



?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <title>The Fellowship Of The Ring</title>
  </head>
  <body>
    <h1>The fellowship Blog</h1>

  <?php foreach ($newsFeed as $post): ?>
    <section>
      <article class="blogitem">
        <div class="post-top">
          <h1><?php echo $post['title']; ?></h1>
            <hr>
        </div>

        <div class="post-profile">
          <div class="author">
            <h2><?php echo $post['author']['name']?></h2>
          </div>
          <div>
            <img class="profile-pic" src="<?php echo $post['author']['profile'] ?>">
          </div>
        </div>

        <div class="post-content">
            <p><?php echo $post['content']; ?></p>
        </div>

        <hr class="hr-bottom">

        <div class="post-bottom">
          <p class="published"><?php echo 'Published: ' . $post['pub']; ?></p>
            <div class="like-box">
                <button class="button" type="button" alt="Like"></button>
                <p class="like"><?php echo $post['like']; ?></p>
            </div>
        </div>
      </article>
    </section>
  <?php endforeach;  ?>

<p class="copy">&copy; André Robsahm, Yrgo, <?php echo date('Y'); ?></p>
  </body>
</html>

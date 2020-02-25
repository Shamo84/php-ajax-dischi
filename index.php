<?php
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="dist/app.css">
    <title>AJAX DISCHI</title>
  </head>
  <body>
    <header>
      <div id="navbar">
        <img src="img/logo.png" alt="logo">
      </div>
    </header>
    <main>
      <div class="container">
        <?php
          foreach ($db as $disco) {
        ?>
        <div class="disco">
          <img src="<?php echo $disco["poster"];?>" alt="<?php echo $disco["title"];?>">
          <h2><?php echo $disco["title"]?></h2>
          <h3><?php echo $disco["author"]?></h3>
          <p><?php echo $disco["genre"]?></p>
          <p><?php echo $disco["year"]?></p>
        </div>
        <?php
          }
        ?>
      </div>
    </main>
  </body>
</html>

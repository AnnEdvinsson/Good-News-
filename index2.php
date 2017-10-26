<?php
declare(strict_types=1);
require __DIR__.'/data.php';
require __DIR__.'/functions.php';?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>GOOD NEWS
  </title>
</head>
<link rel="stylesheet" type="text/css" href="styles2.css">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link rel="stylesheet" href="css/font-awesome.min.css">
<body>
  <div class="container">
    <div class=aroundHeader>
    <div class="header">
    <h3 id="om">OM</h3>
    <h1>GOOD NEWS</h1>
    <h3>FÖLJ</h3>
    </div>
      </div>
    <?php foreach ($posts as $post):?>
      <div class="wrapper">
        <div class="post">
          <div class="title"> <?php echo $post['title'] ?></div>
          <div class="date"><?php echo $post['published_date'] ?></div>
          <div class="content"><?php echo $post['content'] ?></div>

<div class="imgauthor">


          <div class="author"><?php echo $post['author'] ?></div>
        <div class="img"><img src=<?php echo $post['image'] ?>></div>
        </div>
          <div class="likes button">
          <button type="button" class="btn btn-default">
            <div class="likes"><?php echo $post['likes']?>
            <i class="fa fa-thumbs-up fa-2x" ></i></button></div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</body>
</html>

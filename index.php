<?php
declare(strict_types=1);
require __DIR__.'/data.php';
require __DIR__.'/functions.php';?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>GOOD NEWS</title>
</head>
<link rel="stylesheet" type="text/css" href="styles.css">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link rel="stylesheet" href="css/font-awesome.min.css">
<body>
    <div class="container">
        <div class=aroundHeader>
            <div class="header">
                <a href="#"><h3 id="about">ABOUT</h3></a>
                <a href="#"><h1>GOOD NEWS</h1></a>
                <a href="#"><h3>FOLLOW</h3></a>
            </div>
        </div>
        <!-- Here starts the looping of posts with data from data.php document. -->
        <?php foreach ($posts as $post):?>
            <div class="wrapper">
                <div class="post">
                    <div class="title"> <?php echo $post['title'] ?></div>
                    <div class="img"><img src=<?php echo $post['image'] ?>></div>
                    <div class="content"><p><?php echo $post['content'] ?></p></div>
                    <div class="author_date">
                        <div class="author"><p><?php echo "By". " ".$post['author']['name'];?></p></div>
                        <div class="date"><p><?php echo $post['published_date'] ?></p></div>
                    </div>
                    <div class="likes button">
                        <button type="button" class="btn btn-default">
                            <div class="likes"><?php echo $post['likes']?>
                                <i class="fa fa-thumbs-up fa-2x" ></i></button></div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <!-- End of loop -->
                </div>
            </div>
        </body>
        </html>

<!DOCTYPE html>
<html>
<head>
    <title><?= /*$data['page']['title'] . " | " .*/ CONFIG['site_title'];?></title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Saturn is free PSD &amp; HTML template by @flamekaizar">
    <meta name="author" content="Afnizar Nur Ghifari">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="/<?= CONFIG['site_path'];?>/assets/css2/kube.min.css" />
    <link rel="stylesheet" href="/<?= CONFIG['site_path'];?>/assets/css2/font-awesome.min.css" />
    <link rel="stylesheet" href="/<?= CONFIG['site_path'];?>assets/css2/custom.min.css" />
    <link rel="shortcut icon" href="/<?= CONFIG['site_path'];?>/assets/img2/favicon.png" />
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet" type="text/css">
</head>
<body>
<!-- Navigation -->
<div class="main-nav">
    <div class="container">
        <header class="group top-nav">
            <nav class="navbar logo-w navbar-left" >
                <a class="logo" href="/<?= CONFIG['site_path'];?>"><?= CONFIG['site_title'];?></a>
            </nav>
            <div class="navigation-toggle" data-tools="navigation-toggle" data-target="#navbar-1">
                <span class="logo"><?= CONFIG['site_title']; ?></span>
            </div>
            <nav id="navbar-1" class="navbar item-nav navbar-right">
                <ul>
                    <li><a href="/<?= CONFIG['site_path'];?>">Home</a></li>
                    <li><a href="/<?= CONFIG['site_path'];?>Blog/index">Posts</a></li>

                </ul>
            </nav>
        </header>
    </div>
</div>

<!-- Introduction -->

<!-- Content -->
<div class="content">
    <div class="container">
        <!-- Post -->
        <div class="post">
            <!-- Heading -->
            <?php
                      foreach ($data['postList'] as $post){
            ?>
            <h1><?= $post['title'];?></h1>
            <hr>
            <div class="in-content">
                <p>
                    <?= $post['body'] . "..."; ?>
                </p>
                <a class="read-more" href="/<?= CONFIG['site_path']?>/Blog/show/<?=$post['id']?>">Read more</a>
            </div>
                          <div class="foot-post">

                          </div>
            <?php
                      }
            ?>
        </div>
        <!-- /post -->
    </div>
</div>

<!-- Javascript -->
<script src="/<?= CONFIG['site_path'];?>assets/js2/jquery.min.js"></script>
<script src="/<?= CONFIG['site_path'];?>assets/js2/kube.min.js"></script>
</body>
</html>
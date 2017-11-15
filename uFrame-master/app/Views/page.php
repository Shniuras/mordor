<!DOCTYPE html>
<html>
<head>
    <title><?= $data['page']['title'] . " | " . CONFIG['site_title'];?></title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Saturn is free PSD &amp; HTML template by @flamekaizar">
    <meta name="author" content="Afnizar Nur Ghifari">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="/<?= CONFIG['site_path'];?>/assets/css2/kube.min.css" />
    <link rel="stylesheet" href="/<?= CONFIG['site_path'];?>/assets/css2/font-awesome.min.css" />
    <link rel="stylesheet" href="/<?= CONFIG['site_path'];?>/assets/css2/custom.min.css" />
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

<!-- Content -->
<div class="content">
    <div class="container">
        <!-- Post -->
        <div class="post">
            <!-- Heading -->
            <h1>Welcome to the MORDOR BLOG!</h1>
            <hr>
            <div class="in-content">
                <p>
                    <?= $data['page']['body']; ?>
                </p>
            </div>
            <div class="input-group">
                <form action="/<?=CONFIG['site_path']?>Blog/search" method="get">
                    <input type="text" class="form-control" placeholder="Search for..." aria-label="Search for..." name="query">
                    <span class="input-group-btn"></span>
                    <button class="btn btn-secondary" type="submit">GO!</button>
<!--                    Rodo MENU is duomenu bazes
                    <li> <?php /*uFrame\Menu::show(); */?></li>-->
                </form>
            </div>
        </div>
        <!-- /post -->
    </div>
</div>


<!-- Javascript -->
<script src="/<?= CONFIG['site_path'];?>/assets/js2/jquery.min.js"></script>
<script src="/<?= CONFIG['site_path'];?>/assets/js2/kube.min.js"></script>
</body>
</html>
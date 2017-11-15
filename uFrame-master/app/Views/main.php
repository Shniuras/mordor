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
                <a class="logo" href="index.html"><?= CONFIG['site_title'];?></a>
            </nav>
            <div class="navigation-toggle" data-tools="navigation-toggle" data-target="#navbar-1">
                <span class="logo"><?= CONFIG['site_title']; ?></span>
            </div>
            <nav id="navbar-1" class="navbar item-nav navbar-right">
                <ul>
                    <li class="active"><a href="index.html">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Archive</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
        </header>
    </div>
</div>

<!-- Introduction -->
<div style="background-color: #0b2e13">
    <div class="container">
        <div class="units-row">
        </div>
    </div>
</div>

<!-- Content -->
<div class="content">
    <div class="container">
        <!-- Post -->
        <div class="post">
            <!-- Heading -->
            <a href="#"><h1>Galaxy is on your hand</h1></a>
            <hr>
            <div class="in-content">
                <p>
                    Saturn has a prominent ring system that consists of nine continuous main rings and three discontinuous arcs, composed mostly of ice particles with a smaller amount of rocky debris and dust. Sixty-two known moons orbit the planet, of which fifty-three are officially named. This does not include the hundreds of "moonlets" comprising the rings.
                </p>
                <a class="read-more" href="#">Read more</a>
            </div>
            <div class="foot-post">
                <div class="units-row">
                    <div class="unit-100">
                        <strong>Tags:</strong>
                        <a href="#">Galaxy</a>,
                        <a href="#">Human</a>,
                        <a href="#">World</a>,
                    </div>
                    <div class="unit-100">
                        <strong>COMMENTS:</strong>
                        <a href="#">3</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /post -->

        <!-- Post -->
        <div class="post">
            <!-- Heading -->
            <a href="#"><h1>The moon will pass above or below Saturn in the sky</h1></a>
            <hr>
            <div class="in-content">
                <img class="right" src="assets/img2/post-img.jpg" alt="">
                <p>
                    Saturn has a prominent ring system that consists of nine continuous main rings and three discontinuous arcs, composed mostly afn of ice particles with a smaller amount of rocky debris and dust.
                </p>
            </div>
            <div class="foot-post">
                <div class="units-row">
                    <div class="unit-100">
                        <strong>Tags:</strong>
                        <a href="#">Saturn</a>,
                        <a href="#">Sky</a>,
                        <a href="#">Moon</a>,
                    </div>
                    <div class="unit-100">
                        <strong>COMMENTS:</strong>
                        <a href="#">3</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /post -->

        <!-- Post -->
        <div class="post">
            <!-- Heading -->
            <a href="#"><h1>Moon’s orbit around the Earth </h1></a>
            <hr>
            <div class="in-content">
                <p>
                    Tilted to the orbit of the Earth around the Sun – and so most of the time, the moon will pass above or below Saturn in the sky, and no occultation will occur. It is only when Saturn lies near the point that the moon’s orbit crosses the “plane of the ecliptic” that occultations can happen.
                </p>
                <a class="read-more" href="#">Read more</a>
            </div>
            <div class="foot-post">
                <div class="units-row">
                    <div class="unit-100">
                        <strong>Tags:</strong>
                        <a href="#">Moon</a>,
                        <a href="#">Orbit</a>,
                        <a href="#">Earth</a>,
                    </div>
                    <div class="unit-100">
                        <strong>COMMENTS:</strong>
                        <a href="#">221</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /post -->
    </div>
</div>

<footer>
    <div class="container">
        <div class="units-row">
            <div class="unit-50">
                <button class="btn btn-black"><i class="fa fa-arrow-left"></i> PREVIOUS</button>
            </div>
            <div class="unit-50">
                <ul class="social list-flat right">
                    <li><a href="mailto:afnizarhilmi@gmail.com"><i class="fa fa-send"></i></a></li>
                    <li><a href="http://twitter.com/flamekaizar"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="http://dribbble.com/flamekaizar"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="http://behance.com/flamekaizar"><i class="fa fa-behance"></i></a></li>
                </ul>
            </div>
        </div>
        <p class="text-centered foot-cp">
            <a href="#">handcrafted by @flamekaizar</a>
        </p>
    </div>
</footer>

<!-- Javascript -->
<script src="/<?= CONFIG['site_path'];?>/assets/js2/jquery.min.js"></script>
<script src="/<?= CONFIG['site_path'];?>/assets/js2/kube.min.js"></script>
</body>
</html>
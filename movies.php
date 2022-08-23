<?php
    include_once 'functions.php';
    (isset($_GET['id'])) ? $movies_id = $_GET['id'] : header("Location: index.php");
    $movies_id = $_GET['id'];
    $movies = getDetail($movies_id);
    $title = $movies["original_title"];

    $similiar = similiar($movies_id);
    $sm = $similiar["results"];
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/plyr.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
               <div class="col-lg-2">
                    <!-- <div class="header__logo"> -->
                        <a href="./index.php">
                            <!-- <img src="img/logo.png" alt=""> -->
                            <h4 class="text-white mt-3">FILMOVIE</h4>
                        </a>
                    <!-- </div> -->
                </div>
                <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li><a href="./index.php">Home</a></li>
                                <li><a href="./categories.php">Categories</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="header__right">
                        <a href="#" class="search-switch"><span class="icon_search"></span></a>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="./index.php"><i class="fa fa-home"></i> Home</a>
                        <a href="./movies.php">Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Product Section Begin -->
    <section class="product-page spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product__page__content">
                        <div class="product__page__title">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-6">
                                    <div class="section-title">
                                        <h5><?= $movies["tagline"]; ?></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            ?>
                            <div class="col-lg-12 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="https://image.tmdb.org/t/p/original/<?= $movies["poster_path"] ?>">
                                        <div class="ep"><?= $movies["vote_average"]; ?></div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li><?= $movies["genres"][0]["name"]?></li>
                                        </ul>
                                        <h5><a href="#"><?= $movies["title"]; ?></a></h5>
                                        <h5 class="text-white">Budget : <?=  (($movies["budget"] == "0")) ? "UNKNOWN"  : "$ ".  number_format($movies["budget"]); ?></h5>
                                        <h5 class="text-white">Revenue : <?= (($movies["revenue"] == "0")) ? "UNKNOWN"  : "$ ". number_format($movies["revenue"]); ?></h5>
                                        <h5 class="text-white">Production Countries : <?= $movies["production_countries"][0]["name"]; ?></h5>
                                        <h5 class="text-white">Release Date : <?= $movies["release_date"]; ?></h5>
                                       
                                        <h5 class="text-white">Overview: <?= $movies["overview"]; ?></h5>
                                    </div>
                                </div>
                               <!-- streaming -->
                                <!-- <div class="row">
                                    <div class="col-12 col-xl-12"><iframe src="https://databasegdriveplayer.co/player.php?tmdb=<?=$movies_id?>" title="Streaming Video" scrolling="no" frameborder="0" height="500px" width="100%" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
                                    </div> -->
                                </div>
                                  <div class="product__page__title mt-3">
                                    <div class="row">
                                        <div class="col-lg-8 col-md-8 col-sm-6">
                                            <div class="section-title">
                                                <h5>ABOUT</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <div class="row no-gutters">
                                    <?php
                                        $q = $movies["title"];
                                        $youtube = searchYoutube($q);
                                        $yt = $youtube["items"];
                                        foreach ($yt as $y) {
                                        ?>
                                    <div class="col-md-6 mb-3">
                                    <iframe width="500" height="400" src="https://www.youtube.com/embed/<?=$y["id"]["videoId"]?>" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen ></iframe>
                                    </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                                  <div class="product__page__title">
                                    <div class="row">
                                        <div class="col-lg-8 col-md-8 col-sm-6">
                                            <div class="section-title">
                                                <h5>SIMILIAR MOVIES</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <div class="row">
                                    <?php
                                        foreach ($sm as $s) {
                                    ?>
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="product__item">
                                            <div class="product__item__pic set-bg" data-setbg="https://image.tmdb.org/t/p/w500/<?= $s["poster_path"] ?>">
                                                <div class="ep"><?= $s["vote_average"]; ?></div>
                                            </div>
                                            <div class="product__item__text">
                                                <h5><a href="movies.php?id=<?=$s["id"];?>"><?= $s["title"]; ?></a></h5>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                        }
                                    ?>
                                </div>
                            </div>
                            <?php
                            ?>
                        </div>
                    </div>
                </div>
</div>
</div>
</section>
<!-- Product Section End -->

<!-- Footer Section Begin -->
<footer class="footer">
    <div class="page-up">
        <a href="#" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="footer__logo">
                    <a href="./index.php"><h4 class="text-white">FILMOVIE</h4></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="footer__nav">
                    <ul>
                        <li><a href="./index.php">Home</a></li>
                        <li><a href="./categories.php">Categories</a></li>
                    </ul>
                </div>
            </div>
          </div>
      </div>
  </footer>
  <!-- Footer Section End -->

  <!-- Search model Begin -->
 <div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch"><i class="icon_close"></i></div>
        <form class="search-model-form" action="search.php" method="GET">
            <input type="text" id="search-input" type="submit" name="search" placeholder="Search here....." required>
        </form>
    </div>
</div>
<!-- Search model end -->

<!-- Js Plugins -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/player.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/mixitup.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>

</body>

</html>
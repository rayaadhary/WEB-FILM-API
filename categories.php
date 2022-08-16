<?php
include_once "functions.php";
$data=genre();
$dt = $data["genres"];
?>    

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FILMOVIE</title>

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
                                <li class="active"><a href="./categories.php">Categories</a></li>
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
                        <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                        <a href="./categories.html">Categories</a>
                        <span>Romance</span>
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
                                        <h4>GENRES</h4>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="product__page__filter">
                                       <form action="categories.php" method="get"> 
                                         <select name="genre" class="">
                                        <?php
                                            foreach($dt as $d){
                                                echo "<option value=\"".$d["id"]."\">".$d["name"]."</option>";
                                            }
                                        ?>
                                        </select>
                                        <button type="submit" name="tblGenre" class="btn btn-light btn-sm">SUBMIT</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <?php
                            if (isset($_GET["tblGenre"])){    
                            $genre = $_GET["genre"];
                            $genreList = getGenre($genre);
                            $gl = $genreList["results"];
                            foreach ($gl as $g) {
                            ?>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="https://image.tmdb.org/t/p/w500/<?= $g["poster_path"] ?>">
                                        <div class="ep"><?= $g["vote_average"]; ?></div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                        </ul>
                                        <h5><a href="#"><?= $g["title"]; ?></a></h5>
                                    </div>
                                </div>
                            </div>
                            <?php
                                }
                            }
                            else {
                            $genre = "28";
                            $genreList = getGenre($genre);
                            $gl = $genreList["results"];
                            foreach ($gl as $g) {
                            ?>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="https://image.tmdb.org/t/p/w500/<?= $g["poster_path"] ?>">
                                        <div class="ep"><?= $g["vote_average"]; ?></div>
                                    </div>
                                    <div class="product__item__text">
                                        <h5><a href="movies.php?id=<?=$g["id"];?>"><?= $g["title"]; ?></a></h5>
                                    </div>
                                </div>
                            </div>
                            <?php
                                }
                            }
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
                        <li class="active"><a href="./categories.php">Categories</a></li>
                    </ul>
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
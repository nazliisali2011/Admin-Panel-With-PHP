<?php 
require_once "admin/settings/code/front.php"
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="<?=$settings[0]["description"] ?>">
    <meta name="keywords" content="<?=$settings[0]["keywords"] ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$settings[0]["title"] ?></title>

    <link href="../../css2.css?family=Play:wght@400;700&display=swap" rel="stylesheet">
    <link href="../../css2-1.css?family=Josefin+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet"
        href="css/A.bootstrap.min.css font-awesome.min.css elegant-icons.css owl.carousel.min.css magnific-popup.css slicknav.min.css style.css,Mcc.TVZdRHNonf.css.pagespeed.cf.KgfOmR-5Zz.css"
        type="text/css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>

<body>

    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="index.html"><img src="<?=$settings[0]["logo"] ?>" width="300px" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="header__nav__option">
                        <nav class="header__nav__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="index.php">Ana Səhifə</a></li>
                                <li><a href="about.php">Haqqimizda</a></li>
                                <li><a href="portfolio.php">Portfolio</a></li>
                                <li><a href="blog.php">Blog</a></li>
                                <li><a href="contact.php">Əlaqə</a></li>
                            </ul>
                        </nav>
                        <div class="header__nav__social">
                            <a href="<?=$settings[0]["facebook"] ?>"><i class="fab fa-facebook"></i></a>
                            <a href="<?=$settings[0]["instagram"] ?>"><i class="fab fa-instagram"></i></a>
                            <a href="<?=$settings[0]["github"] ?>"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
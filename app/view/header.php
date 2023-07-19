<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ogani | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="/technology/public/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/technology/public/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="/technology/public/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="/technology/public/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="/technology/public/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="/technology/public/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="/technology/public/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="/technology/public/css/style.css" type="text/css">
</head>

<body>
<header class="header">
        <!-- <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                                <li>Free Shipping for all Order of $99</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            <div class="header__top__right__language">
                                <img src="/technology/public/img/language.png" alt="">
                                <div>English</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">Spanis</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div>
                            <div class="header__top__right__auth">
                                <a href="#"><i class="fa fa-user"></i> Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="/technology/public/img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class=""><a href="<?php echo BASE_URL ?>/index">Home</a></li>
                            <li><a href="<?php echo BASE_URL ?>/sanpham/tatca">Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="<?php echo BASE_URL ?>/index/chitietsanpham/14">Shop Details</a></li>
                                    <li><a href="<?php echo BASE_URL ?>/giohang">Shoping Cart</a></li>
                                    <li><a href="./checkout.html">Check Out</a></li>
                                    <li><a href="<?php echo BASE_URL ?>/tintuc/chitiettin">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="<?php echo BASE_URL?>/tintuc/tatca">Blog</a>
                                <ul class="header__menu__dropdown">
                                    <?php
                                    foreach ($category_post as $key => $post) {
                                    ?>
                                    <li><a href="<?php echo BASE_URL?>/tintuc/danhmuc/<?php echo $post['id_post']?>"><?php echo $post['title_post']?></a></li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </li>
                            <!-- <li><a href="<?php echo BASE_URL ?>/tintuc">Blog</a></li> -->
                            <li><a href="<?php echo BASE_URL ?>/index/lienhe">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="<?php echo BASE_URL ?>/giohang"><i class="fa fa-shopping-bag"></i> </a></li>
                            <li><a href="<?php echo BASE_URL ?>/login"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                        </ul>
                        <!-- <div class="header__cart__price">item: <span>$150.00</span></div> -->
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All departments</span>
                        </div>
                        <ul>
                            <?php
                            foreach ($category as $key => $cate) {
                            ?>
                            <li><a href="<?php echo BASE_URL?>/sanpham/danhmuc/<?php echo $cate['id_category']?>"><?php echo $cate['title_category']?></a></li>
                            <?php
                            }
                            ?>
                            <!-- <li><a href="#">Vegetables</a></li>
                            <li><a href="#">Fruit & Nut Gifts</a></li>
                            <li><a href="#">Fresh Berries</a></li>
                            <li><a href="#">Ocean Foods</a></li>
                            <li><a href="#">Butter & Eggs</a></li>
                            <li><a href="#">Fastfood</a></li>
                            <li><a href="#">Fresh Onion</a></li>
                            <li><a href="#">Papayaya & Crisps</a></li>
                            <li><a href="#">Oatmeal</a></li>
                            <li><a href="#">Fresh Bananas</a></li> -->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                    All Categories
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+65 11.188.888</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>
                    <div class="hero__item set-bg" data-setbg="/technology/public/img/banner/Techdv.jpg">
                        <div class="hero__text">
                            <!-- <span>FRUIT FRESH</span> -->
                            <!-- <a href="#" class="primary-btn">SHOP NOW</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
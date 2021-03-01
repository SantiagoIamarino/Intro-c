<?php 

    require('config.php');

    $statement = $db->prepare('SELECT * FROM posts');
    $statement->execute();
    $posts = $statement->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Intro Arquitectura">
    <meta name="author" content="Santiago Iamarino">
    <meta name="keywords" content="Intro Arquitectura">

    <!-- Title Page-->
    <title>Nuestro blog | Intro Arquitectura</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/themify-font/themify-icons.css" rel="stylesheet" media="all">
    <!-- Base fonts of theme-->
    <link href="css/roboto-font.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.min.css" rel="stylesheet" media="all">

    <!--Favicons-->
    <link rel="shortcut icon" href="images/icon/favicon.jpg">
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="apple-icon-114x114.png">
</head>

<body class="animsition js-preloader">
    <div class="page-wrapper">
        <!-- HEADER-->
        <header id="header">
            <div class="header header-1 d-none d-lg-block js-header-1">
                <div class="header__bar">
                    <div class="wrap wrap--w1790">
                        <div class="container-fluid">
                            <div class="header__content">
                                <div class="logo">
                                    <a href="#">
                                        <img src="images/icon/logo-black.png" alt="Tatee" />
                                    </a>
                                </div>
                                <div class="header__content-right">
                                    <nav class="header-nav-menu">
                                        <ul class="menu nav-menu">
                                            <li class="menu-item">
                                                <a href="index.html">Inicio</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="index.html#nosotros">Sobre Nosotros</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="#">Proyectos</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="blog.php">Nuestro blog</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="index.html#contact">contacto</a>
                                            </li>
                                        </ul>
                                    </nav>
                                    <div class="header-social">
                                        <ul class="list-social">
                                            <li class="list-social__item">
                                                <a class="ic-fb" target="_blank" href="https://www.facebook.com/IntroArquitectura/?fref=ts">
                                                    <i class="zmdi zmdi-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="list-social__item">
                                                <a class="ic-insta" target="_blank" href="https://www.instagram.com/intro_arquitectura/">
                                                    <i class="zmdi zmdi-instagram"></i>
                                                </a>
                                            </li>
                                            <!-- <li class="list-social__item">
                                                <a class="ic-twi" href="#">
                                                    <i class="zmdi zmdi-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="list-social__item">
                                                <a class="ic-pinterest" href="#">
                                                    <i class="zmdi zmdi-pinterest"></i>
                                                </a>
                                            </li> -->
                                            <li class="list-social__item">
                                                <a class="ic-linkedin" target="_blank" href="https://www.linkedin.com/company/intro-arquitectura-srl-">
                                                    <i class="zmdi zmdi-linkedin"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-mobile d-block d-lg-none">
                <div class="header-mobile__bar">
                    <div class="container-fluid">
                        <div class="header-mobile__bar-inner">
                            <a class="logo" href="index.html">
                                <img src="images/icon/logo-black.png" alt="Tatee" />
                            </a>
                            <button class="hamburger hamburger--slider float-right" type="button">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <nav class="header-nav-menu-mobile">
                    <div class="container-fluid">
                        <ul class="menu nav-menu menu-mobile">
                            <li class="menu-item">
                                <a href="index.html">Inicio</a>
                            </li>
                            <li class="menu-item">
                                <a href="index.html#nosotros">Sobre Nosotros</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">Proyectos</a>
                            </li>
                            <li class="menu-item">
                                <a href="blog.php">Nuestro blog</a>
                            </li>
                            <li class="menu-item">
                                <a href="index.html#contact">contacto</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!-- END HEADER-->

        <!-- MAIN-->
        <main id="main">
            <!-- PAGE LINE-->
            <div class="page-line">
                <div class="container">
                    <div class="page-line__inner">
                        <div class="page-col"></div>
                        <div class="page-col"></div>
                        <div class="page-col"></div>
                    </div>
                </div>
            </div>
            <!-- END PAGE LINE-->

            <!-- PAGE HEADING-->
            <section class="section p-t-100 p-b-65">
                <div class="container">
                    <div class="page-heading">
                        <h4 class="title-sub title-sub--c8 m-b-15">Nuestro blog</h4>
                        <h2 class="title-2">Últimas novedades</h2>
                    </div>
                </div>
            </section>
            <!-- END PAGE HEADING-->

            <!-- BLOG-->
            <section class="section">
                <div class="container">
                    <div class="row gutter-xl">
                        <?php foreach($posts as $post): ?>
                            <div class="col-md-6">
                                <article class="blog">
                                    <figure class="entry-image">
                                        <a href="articulo.php?postId=<?php echo $post['id'] ?>">
                                            <img src="<?php echo './uploads/' . $post['imageUrl'] ?>" alt="<?php echo $post['title'] ?>" />
                                        </a>
                                    </figure>
                                    <div class="entry-summary">
                                        <h4 class="entry-title">
                                            <a href="articulo.php?postId=<?php echo $post['id'] ?>"><?php echo $post['title'] ?></a>
                                        </h4>
                                        <span class="entry-meta">
                                            <?php echo date('d', strtotime($post['date'])) ?> - <?php echo date('m', strtotime($post['date'])) ?> - <?php echo date('Y', strtotime($post['date'])) ?>
                                        </span>
                                        <p class="entry-excerpt">
                                            <?php echo $post['metaDescription'] ?>
                                        </p>
                                    </div>
                                </article>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>
            <!-- END BLOG-->

            <nav class="navigation blog-navigation">
                <div class="container">
                    <div class="nav-links">
                        <ul class="page-numbers">
                            <li>
                                <a class="page-number prev" href="#">
                                    <span class="ti-arrow-left"></span>
                                </a>
                            </li>
                            <li>
                                <span class="page-number current">01</span>
                            </li>
                            <li>
                                <a class="page-number" href="#">02</a>
                            </li>
                            <li>
                                <a class="page-number next" href="#">
                                    <span class="ti-arrow-right"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </main>
        <!-- END MAIN-->

        <!-- FOOTER-->
        <footer class="footer bg-parallax">
            <div class="bg-overlay bg-overlay--p85"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-col">
                            <div class="widget m-b-25">
                                <a href="#">
                                    <img src="images/icon/logo-white.png" alt="Tatee" />
                                </a>
                            </div>
                            <div class="widget widget-address">
                                <ul>
                                    <li>Address : 991 White St . Dawsonville, GA 30534 , New York</li>
                                    <li>Phone number : + (898) 784-7217</li>
                                    <li>Email : Tatee.architecture@gmail.com</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="footer-col p-l-70 p-md-l-0">
                            <div class="widget widget_pages">
                                <h4 class="widget-title">Link</h4>
                                <ul>
                                    <li>
                                        <a href="#">About us</a>
                                    </li>
                                    <li>
                                        <a href="#">Services</a>
                                    </li>
                                    <li>
                                        <a href="#">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-col p-l-70 p-md-l-0">
                            <h4 class="widget-title">Social</h4>
                            <div class="widget widget_socials">
                                <ul class="list-social list-social-2">
                                    <li class="list-social__item">
                                        <a class="ic-fb" target="_blank" href="https://www.facebook.com/IntroArquitectura/?fref=ts">
                                            <i class="zmdi zmdi-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="list-social__item">
                                        <a class="ic-insta" target="_blank" href="https://www.instagram.com/intro_arquitectura/">
                                            <i class="zmdi zmdi-instagram"></i>
                                        </a>
                                    </li>
                                    <!-- <li class="list-social__item">
                                        <a class="ic-twi" href="#">
                                            <i class="zmdi zmdi-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="list-social__item">
                                        <a class="ic-pinterest" href="#">
                                            <i class="zmdi zmdi-pinterest"></i>
                                        </a>
                                    </li> -->
                                    <li class="list-social__item">
                                        <a class="ic-linkedin" target="_blank" href="https://www.linkedin.com/company/intro-arquitectura-srl-">
                                            <i class="zmdi zmdi-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-col">
                            <div class="widget widget_text">
                                <h4 class="widget-title">copyright</h4>
                                <p>© 2018 TATEE . Designed by Authemes</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END FOOTER-->
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/slick/slick.min.js"></script>
    <script src="vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/jquery.counterup/jquery.counterup.min.js"></script>
    <script src="vendor/isotope/isotope.pkgd.min.js"></script>
    <script src="vendor/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="vendor/matchHeight/jquery.matchHeight-min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/sweetalert/sweetalert.min.js"></script>
    <script src="vendor/noUiSlider/nouislider.min.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>

</html>
<!-- end document-->
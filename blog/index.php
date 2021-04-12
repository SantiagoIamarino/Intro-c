<?php 

    require('../config.php');

    $perPage = 10;
    $page = (isset($_GET['page']) && !empty($_GET['page'])) ? $_GET['page'] : 1;
    $page = (!is_numeric($page) || $page <= 0) ? 1 : $page;

    $start = ($perPage * $page) - $perPage;
    $end = $perPage * $page;

    $statement = $db->prepare("SELECT * FROM posts LIMIT $start, $end");
    $statement->execute();
    $posts = $statement->fetchAll();

    $statement = $db->prepare("SELECT COUNT(*) as total FROM posts");
    $statement->execute();
    $total = $statement->fetch()['total'];

    $totalPages = ceil($total / $perPage);

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
    <title>Blog | Intro Arquitectura</title>

    <!-- Icons font CSS-->
    <link href="../vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="../vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../vendor/themify-font/themify-icons.css" rel="stylesheet" media="all">
    <!-- Base fonts of theme-->
    <link href="../css/roboto-font.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->

    <!-- Bootstrap CSS-->
    <link href="../vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="../vendor/animate.css/animate.min.css" rel="stylesheet" media="all">
    <link href="../vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../vendor/select2/select2.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../css/main.min.css" rel="stylesheet" media="all">

    <!--Favicons-->
    <link rel="apple-touch-icon" sizes="57x57" href="../images/icon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../images/icon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../images/icon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../images/icon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../images/icon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../images/icon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../images/icon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../images/icon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../images/icon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="../images/icon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../images/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../images/icon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../images/icon/favicon-16x16.png">
    <link rel="manifest" href="../images/icon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../images/icon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
<!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5M43SWV');</script>
    <!-- End Google Tag Manager -->
</head>

<body class="animsition js-preloader">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5M43SWV";
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div class="page-wrapper">
       <!-- HEADER-->
       <?php require('../header.php') ?>
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
                        <h4 class="title-sub title-sub--c8 m-b-15">Blog</h4>
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
                                        <a href="../articulo/?postId=<?php echo $post['id'] ?>">
                                            <img src="<?php echo '../uploads/' . $post['imageUrl'] ?>" alt="<?php echo $post['title'] ?>" />
                                        </a>
                                    </figure>
                                    <div class="entry-summary">
                                        <h4 class="entry-title">
                                            <a href="../articulo/?postId=<?php echo $post['id'] ?>"><?php echo $post['title'] ?></a>
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
            <?php if($total > $perPage): ?>
                <nav class="navigation blog-navigation">
                    <div class="container">
                        <div class="nav-links">
                            <ul class="page-numbers">
                                <?php if(($page - 1) >= 1): ?>
                                    <li>
                                        <a class="page-number prev" href="?page=<?php echo ($page - 1) ?>">
                                            <span class="ti-arrow-left"></span>
                                        </a>
                                    </li>
                                <?php endif; ?>
                                <?php for($i = 0; $i < $total; $i++): ?>
                                    <li class="pagination-item <?php echo (($i + 1) == $page) ? 'active' : '' ?>">
                                        <a href="?page=<?php echo ($i+1) ?>">
                                            <span class="page-number">
                                                <?php echo ($i > 9) ? ($i + 1) : "0".($i + 1) ?>
                                            </span>
                                        </a>
                                    </li>
                                <?php endfor; ?>
                                <?php if(($page + 1) <= $totalPages): ?>
                                    <li>
                                        <a class="page-number next" href="?page=<?php echo ($page + 1) ?>">
                                            <span class="ti-arrow-right"></span>
                                        </a>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </nav>
            <?php endif; ?>
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
                                    <img src="../images/icon/logo-white.png" alt="Tatee" />
                                </a>
                            </div>
                            <div class="widget widget-address">
                                <ul>
                                    <li>Dirección : Av. del Libertador 88 - piso 2<br>Vicente Lopez, Buenos Aires, Argentina.</li>
                                    <li>Teléfono : (+54 11) 5199-1401</li>
                                    <li>Email : info@introarquitectura.com.ar</li>
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
                                        <a href="about-us/">Nosotros</a>
                                    </li>
                                    <li>
                                        <a href="proyectos/">Proyectos</a>
                                    </li>
                                    <li>
                                        <a href="contacto/">Contacto</a>
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
                                <p>© 2021 Intro Arquitectura. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END FOOTER-->
    </div>

    <!-- Jquery JS-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="../vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS-->
    <script src="../vendor/animsition/animsition.min.js"></script>
    <script src="../vendor/slick/slick.min.js"></script>
    <script src="../vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="../vendor/wow/wow.min.js"></script>
    <script src="../vendor/jquery.counterup/jquery.counterup.min.js"></script>
    <script src="../vendor/isotope/isotope.pkgd.min.js"></script>
    <script src="../vendor/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="../vendor/matchHeight/jquery.matchHeight-min.js"></script>
    <script src="../vendor/select2/select2.min.js"></script>
    <script src="../vendor/sweetalert/sweetalert.min.js"></script>
    <script src="../vendor/noUiSlider/nouislider.min.js"></script>

    <!-- Main JS-->
    <script src="../js/global.js"></script>

</body>

</html>
<!-- end document-->
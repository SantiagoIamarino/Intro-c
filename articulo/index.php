<?php 

    require('../config.php');
    require('../shared/language.php');

    if(!isset($_GET['postId']) || empty($_GET['postId'])){
        header('Location: ../');
    }

    $statement = $db->prepare('SELECT * FROM posts WHERE id = :postId');
    $statement->execute(array('postId' => $_GET['postId']));
    $post = $statement->fetch();

    $statement = $db->prepare("SELECT * FROM posts ORDER BY RAND() LIMIT 5");
    $statement->execute();
    $random_posts = $statement->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php echo $post['metaDescription'] ?>">
    <meta name="author" content="AuCreative">
    <meta name="keywords" content="Intro Arquitectura">

    <!-- Title Page-->
    <title><?php echo $post['title'] ?></title>

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
            <!-- BLOG DETAIL-->
            <section class="p-t-100 p-b-80">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-lg-9">
                            <article class="blog-detail-1">
                                <header class="entry-header">
                                    <h2 class="entry-title"><?php echo $post['title'] ?></h2>
                                    <span class="entry-date"><?php echo date('d', strtotime($post['date'])) ?> - <?php echo date('m', strtotime($post['date'])) ?> - <?php echo date('Y', strtotime($post['date'])) ?></span>
                                </header>
                                <div class="entry-content">
                                    <img class="wp-post-image" src="<?php echo '../uploads/' . $post['imageUrl'] ?>" alt="<?php echo $post['slug'] ?>">
                                    <?php echo $post['content'] ?>
                                </div>
                                <footer class="entry-footer">
                                    <div class="entry-share">
                                        <span class="title-6">Compartir:</span>

                                        <?php
                                            $actualUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://". $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
                                        ?>

                                        <ul class="list-social list-social--light2">
                                            <li class="list-social__item">
                                                <a class="ic-fb" target="_blank" 
                                                    href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $actualUrl ?>">
                                                    <i class="zmdi zmdi-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="list-social__item">
                                                <a class="ic-whatsapp" target="_blank" 
                                                    href="https://api.whatsapp.com/send?text=Mira%20este%20articulo%20<?php echo $actualUrl ?>">
                                                    <i class="zmdi zmdi-whatsapp"></i>
                                                </a>
                                            </li>
                                            <li class="list-social__item">
                                                <a class="ic-linkedin" target="_blank" 
                                                    href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo $actualUrl ?>">
                                                    <i class="zmdi zmdi-linkedin"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </footer>
                            </article>
                        </div>
                        <div class="col-md-4 col-lg-3" style='padding-top: 20px'>
                            <aside class="widget-area widget-sidebar">
                                <!-- <div class="widget widget_search">
                                    <form class="search-form" method="GET" action="#">
                                        <input class="search-field" type="text" placeholder="Search here...">
                                        <button class="search-submit" type="submit">
                                            <span class="ti-search"></span>
                                        </button>
                                    </form>
                                </div> -->
                                <div id="search-3" class="widget widget_search" 
                                    style='background: #f6f7f8; padding: 25px'>
                                    <div id="custom-search-input">  
                                        <form class="search-form" method="GET" 
                                            action="<?php echo $url . '/blog' ?>">
                                            <input class="search-field" name="s" placeholder="Buscar aquí" type="text">
                                            <button class="search-submit" type="submit">
                                                <span class="ti-search"></span>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                <div id="tatee_popular_posts_widget_id-3" class="widget widget_recent_entries"
                                    style='background: #f6f7f8; padding: 25px'> 
                                    <h4 class="widget-title">Articulos populares</h4>            
                                    <ul>
                                        <?php foreach($random_posts as $post): ?>
                                            <li>
                                                <a href="./?postId=<?php echo $post['id']?>">
                                                    <?php echo $post['title'] ?>
                                                </a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BLOG DETAIL-->
        </main>
        <!-- END MAIN-->

        <!-- FOOTER-->
        <?php require(__DIR__ . '/../footer.php') ?>
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
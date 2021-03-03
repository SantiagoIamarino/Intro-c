<?php 

    require('config.php');

    if(!isset($_GET['postId']) || empty($_GET['postId'])){
        header('Location: ./index.html');
    }

    $statement = $db->prepare('SELECT * FROM posts WHERE id = :postId');
    $statement->execute(array('postId' => $_GET['postId']));
    $post = $statement->fetch();

    $statement = $db->prepare('SELECT * FROM comments WHERE postId = :postId');
    $statement->execute(array('postId' => $_GET['postId']));
    $comments = $statement->fetchAll();

    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['comment'])){
        if(!isset($_POST['name']) || empty($_POST['name'])) {
            echo '<script>alert("Debes indicar tu nombre")</script>';
        } else if(!isset($_POST['email']) || empty($_POST['email'])) {
            echo '<script>alert("Debes indicar tu email")</script>';
        } else if(!isset($_POST['content']) || empty($_POST['content'])) {
            echo '<script>alert("El mensaje no puede estar vacio")</script>';
        } else {
            // print_r($_POST); die();
            $statement = $db->prepare("INSERT INTO comments(name, postId, email, content) VALUES (:name, :postId, :email, :content)");
            $statement->execute(array(
                'name' => $_POST['name'], 
                'email' => $_POST['email'],
                'content' => $_POST['content'],
                'postId'  => $post['id']
            ));

            echo '<script>alert("Comentario publicado correctamente")</script>';
            $_POST = [];
        }
    }

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
                                                <a href="about-us.html">Sobre Nosotros</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="proyectos.html">Proyectos</a>
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
                                <a href="about-us.html">Sobre Nosotros</a>
                            </li>
                            <li class="menu-item">
                                <a href="proyectos.html">Proyectos</a>
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
                                    <img class="wp-post-image" src="<?php echo './uploads/' . $post['imageUrl'] ?>" alt="Blog 1">
                                    <?php echo $post['content'] ?>
                                </div>
                                <footer class="entry-footer">
                                    <div class="entry-share">
                                        <span class="title-6">Compartir:</span>
                                        <ul class="list-social list-social--light2">
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
                                </footer>
                            </article>
                            <div class="comments-area">
                                <h3 class="comment-title"><?php echo count($comments) ?> Comentarios</h3>
                                <ul class="comment-list">
                                    <?php foreach($comments as $comment): ?>
                                        <li class="comment">
                                            <article class="comment-body">
                                                <header class="comment-meta">
                                                    <div class="comment-author vcard">
                                                        <img class="avatar" src="images/user-01.jpg" alt="user 1">
                                                        <b class="fn"><?php echo $comment['name'] ?></b>
                                                    </div>
                                                    <div class="comment-metadata">
                                                        <a href="#">12 - August - 2018</a>
                                                    </div>
                                                </header>
                                                <div class="comment-content">
                                                    <p>
                                                    <?php echo $comment['content'] ?>
                                                </div>
                                            </article>
                                        </li>
                                    <?php endforeach ?>
                                </ul>
                                <div class="comment-area-form">
                                    <h3 class="comment-title">Deja un comentario</h3>
                                    <form method="POST" action="#">
                                        <div class="row gutter-md">
                                            <div class="col-md-6">
                                                <input name='name' class="au-input-2 m-b-20" type="text" placeholder="Tu nombre">
                                            </div>
                                            <div class="col-md-6">
                                                <input name='email' class="au-input-2 m-b-20" type="email" placeholder="Tu correo">
                                            </div>
                                        </div>
                                        <textarea name='content' class="au-textarea-2 m-b-20" placeholder="Tu comentario"></textarea>
                                        <button class="au-btn au-btn--solid" type="submit" name='comment'>Enviar comentario</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-3">
                            <aside class="widget-area widget-sidebar">
                                <div class="widget widget_search">
                                    <form class="search-form" method="GET" action="#">
                                        <input class="search-field" type="text" placeholder="Search here...">
                                        <button class="search-submit" type="submit">
                                            <span class="ti-search"></span>
                                        </button>
                                    </form>
                                </div>
                                <div class="widget widget_recent_entries">
                                    <h4 class="widget-title">Post populares</h4>
                                    <ul>
                                        <li>
                                            <a href="#">Eight eye-catching homes made from bamboo</a>
                                        </li>
                                        <li>
                                            <a href="#">Nine home interiors furnished around statement rug</a>
                                        </li>
                                        <li>
                                            <a href="#">Zooco Estudio creates cave-like wine shop in Spain</a>
                                        </li>
                                        <li>
                                            <a href="#">Will Bruder clads a mountain home in Aspen</a>
                                        </li>
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
                                        <a href="about-us.html">Sobre nosotros</a>
                                    </li>
                                    <li>
                                        <a href="index.html#whatWeDo">Servicios</a>
                                    </li>
                                    <li>
                                        <a href="index.html#contact">Contacto</a>
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
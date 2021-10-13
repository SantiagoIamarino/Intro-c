<?php
    require_once('./config.php');
    require_once('./shared/language.php');

    $statement = $db->prepare("SELECT * FROM configs LIMIT 1");
    $statement->execute();
    $configs = $statement->fetch();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="INTRO Arquitectura">
    <meta name="author" content="GauchoDigital">
    <meta name="keywords" content="INTRO Arquitectura">

    <!-- Title Page-->
    <title>Intro Arquitectura - Diseño y Construcción de oficinas</title>

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
    <link href="vendor/revolution/css/layers.css" rel="stylesheet" />
    <link href="vendor/revolution/css/navigation.css" rel="stylesheet" />
    <link href="vendor/revolution/css/settings.css" rel="stylesheet" />
    <link href="vendor/pagePiling/css/jquery.pagepiling.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.min.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="css/styles.css" media="all">

    <!--Favicons-->
    
    <link rel="apple-touch-icon" sizes="57x57" href="./images/icon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="./images/icon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="./images/icon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="./images/icon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="./images/icon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="./images/icon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="./images/icon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="./images/icon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="./images/icon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="./images/icon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./images/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="./images/icon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./images/icon/favicon-16x16.png">
    <link rel="manifest" href="./images/icon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="./images/icon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">


<!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5M43SWV');</script>
    <!-- End Google Tag Manager -->
</head>

<body class=" js-preloader">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5M43SWV";
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- MAIN-->
    <main id="main home-page">
        <!-- HEADER PAGE PILLING-->
        <header id="header">
            <div class="header header-2 header-page-pilling d-none d-lg-block">
                <div class="header__bar">
                    <div class="wrap wrap--w1790">
                        <div class="container-fluid">
                            <div class="header__content">
                                <div class="logo">
                                    <a href="#">
                                        <img src="images/icon/logo-white.png" alt="INTRO Arquitectura" />
                                    </a>
                                </div>
                                <div class="header__content-right">
                                    <button class="hamburger hamburger--slider float-right hamburger--sm js-menusb-btn" type="button">
                                        <span class="hamburger-box">
                                            <span class="hamburger-inner"></span>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="header-top-languages">
                        <div class="spanish active">
                            <a href="#">Español</a>
                        </div>
                        <div class="english">
                            <a href='./?language=en'>English</a>
                        </div>
                    </div>
                </div>
            </div>
            <aside class="menu-sidebar js-menusb" id="sidebar">
                <a class="btn-close" href="#" id="js-close-btn">
                    <span class="ti-close"></span>
                </a>
                <div class="menu-sidebar__content">
                    <nav class="menu-sidebar-nav-menu">
                        <ul class="menu nav-menu" id="nav-menu-sidebar">
                            <li class="menu-item menu-item-has-children">
                                <a href="#" >Inicio</a>
                            </li>
                            <li class="menu-item">
                                <a onclick='closeMenu()' href="about-us/">Nosotros</a>
                            </li>
                            <li class="menu-item">
                                <a onclick='closeMenu()' href="proyectos/">Proyectos</a>
                            </li>
                            <li class="menu-item">
                                <a onclick='closeMenu()' href="blog/">Blog</a>
                            </li>
                            <li class="menu-item">
                                <a onclick='closeMenu()' href="noticias/">Noticias</a>
                            </li>
                            <li class="menu-item">
                                <a onclick='closeMenu()' href="contacto/">Contacto</a>
                            </li>
                        </ul>
                        <div class="languages">
                            <label class='d-block'
                                style='font-size: 20px; margin-bottom: 0'>Lenguaje:</label>

                            <a href='#' style='cursor: pointer; font-size: 18px; font-weight: normal;color:black'>
                                <img src="<?php echo $assets_url ?>/images/icon/spain-flag-icon.png" alt="">
                                Español
                            </a>
                            <a href='./?language=en' class='ml-3'
                                style='cursor: pointer; font-size: 18px; font-weight: normal; opacity: .6;color:black'>
                                <img src="<?php echo $assets_url ?>/images/icon/usa-flag-icon.png" alt="">
                                English
                            </a>
                        </div>
                    </nav>
                    <ul class="list-social list-social--big">
                        <li class="list-social__item">
                            <a class="ic-fb" target='_blank' href="https://www.facebook.com/IntroArquitectura/?fref=ts">
                                <i class="zmdi zmdi-facebook"></i>
                            </a>
                        </li>
                        <li class="list-social__item">
                            <a class="ic-insta" target='_blank' href="https://www.instagram.com/intro_arquitectura/">
                                <i class="zmdi zmdi-instagram"></i>
                            </a>
                        </li>
                        <li class="list-social__item">
                            <a class="ic-pinterest" target="_blank" href="https://www.pinterest.es/introarquitectura/">
                                <i class="zmdi zmdi-pinterest-box"></i>
                            </a>
                        </li>
                        <li class="list-social__item">
                            <a class="ic-tiktok" target="_blank" href="https://www.tiktok.com/@intro_arquitectura">
                                <img src="./images/icon/tik-tok.png" 
                                    style='height: 16px !important; margin-top: -3px'>
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
                            <a class="ic-linkedin" target='_blank' href="https://www.linkedin.com/company/intro-arquitectura-srl-">
                                <i class="zmdi zmdi-linkedin"></i>
                            </a>
                        </li>
                        <li class="list-social__item">
                            <a class="ic-youtube" target='_blank' href="https://www.youtube.com/channel/UC2FmA2sVcrsHigia6ciMWww">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="menu-sidebar__footer">
                    <div class="copyright">
                        <p>© 2021 INTRO Arquitectura</p>
                    </div>
                </div>
            </aside>
            <div id="menu-sidebar-overlay"></div>
            <div class="header-mobile d-block d-lg-none">
                <div class="header-mobile__bar">
                    <div class="container-fluid">
                        <div class="header-mobile__bar-inner">
                            <a class="logo" href="index.php">
                                <img src="images/icon/logo-black.png" alt="INTRO Arquitectura" />
                            </a>
                            <div class="right d-flex align-items center">
                                <div class="socials mt-1">
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
                                        <li class="list-social__item">
                                            <a class="ic-pinterest" target="_blank" href="https://www.pinterest.es/introarquitectura/">
                                                <i class="zmdi zmdi-pinterest-box"></i>
                                            </a>
                                        </li>
                                        <li class="list-social__item">
                                            <a class="ic-tiktok" target="_blank" href="https://www.tiktok.com/@intro_arquitectura">
                                                <img src="./images/icon/tik-tok.png" 
                                                    style='height: 13px !important; margin-top: -3px'>
                                            </a>
                                        </li>
                                        <li class="list-social__item">
                                            <a class="ic-linkedin" target="_blank" href="https://www.linkedin.com/company/intro-arquitectura-srl-">
                                                <i class="zmdi zmdi-linkedin"></i>
                                            </a>
                                        </li>
                                        <li class="list-social__item">
                                            <a class="ic-youtube" target="_blank" href="https://www.youtube.com/channel/UC2FmA2sVcrsHigia6ciMWww">
                                                <i class="fab fa-youtube"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <button class="hamburger hamburger--slider float-right" type="button">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>   
                            </div>
                        </div>
                    </div>
                </div>
                <nav class="header-nav-menu-mobile">
                    <div class="container-fluid">
                        <ul class="menu nav-menu menu-mobile custom-menu">
                            <li class="menu-item ">
                                <a href="#" >Inicio</a>
                            </li>
                            <li class="menu-item">
                                <a onclick='closeMenu()' href="about-us/">Nosotros</a>
                            </li>
                            <li class="menu-item">
                                <a onclick='closeMenu()' href="proyectos/">Proyectos</a>
                            </li>
                            <li class="menu-item">
                                <a onclick='closeMenu()' href="blog/">Blog</a>
                            </li>
                            <li class="menu-item">
                                <a onclick='closeMenu()' href="noticias/">Noticias</a>
                            </li>
                            <li class="menu-item">
                                <a onclick='closeMenu()' href="contacto/">Contacto</a>
                            </li>

                            <div class="languages">

                                <a href='#' class='ml-3'
                                    style='cursor: pointer; font-size: 16px; font-weight: normal;color:black'>
                                    <img src="<?php echo $assets_url ?>/images/icon/spain-flag-icon.png" alt="">
                                    Español
                                </a>

                                <a href='./?language=en' style='cursor: pointer; font-size: 16px; opacity: .6; font-weight: normal;color:black'>
                                    <img src="<?php echo $assets_url ?>/images/icon/usa-flag-icon.png" alt="">
                                    English
                                </a>

                            </div>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!-- END HEADER PAGE PILLING-->

        <!-- PAGE INFO-->
        <div class="page-info" id="js-pageinfo">
            <ul class="list-social-3">
                <li class="list-social__item">
                    <a href="https://www.facebook.com/IntroArquitectura/?fref=ts" target='_blank'>facebook
                        <i class="fab fa-facebook-f icon"></i>
                    </a>
                </li>
                <li class="list-social__item">
                    <a href="https://www.instagram.com/intro_arquitectura/" target='_blank'>instagram
                        <i class="fab fa-instagram icon"></i>
                    </a>
                </li>
                <li class="list-social__item">
                    <a href="https://www.pinterest.es/introarquitectura/" target='_blank'>pinterest
                        <i class="fab fa-pinterest icon"></i>
                    </a>
                </li>
                <li class="list-social__item">
                    <a href="https://www.tiktok.com/@intro_arquitectura" target='_blank'>tiktok
                        <img src="./images/icon/tik-tok.png" class='icon'
                            style='height: 35px !important; margin-top: -3px;opacity: .05'>
                    </a>
                </li>
                <li class="list-social__item">
                    <a href="https://www.linkedin.com/company/intro-arquitectura-srl-" target='_blank'>LinkedIn
                        <i class="fab fa-linkedin icon"></i>
                    </a>
                </li>
                <!-- <li class="list-social__item">
                    <a href="https://www.youtube.com/channel/UC2FmA2sVcrsHigia6ciMWww" target='_blank'>YouTube
                        <i class="fab fa-youtube icon"></i>
                    </a>
                </li> -->
                <!-- <li class="list-social__item">
                    <a href="#">pinterest
                        <i class="fab fa-pinterest-p icon"></i>
                    </a>
                </li>
                <li class="list-social__item">
                    <a href="#">google
                        <i class="fab fa-google-plus-g icon"></i>
                    </a>
                </li> -->
            </ul>
           
            <h3 class="page-info__title">Nosotros</h3>
        </div>
        <!-- END PAGE INFO-->

        <!-- PAGE PILLING-->
        <div class="page-pagepiling-wrap js-pagepilling">
            <!-- SLIDER-->
            <section class="section-pp pp-table pp-easing home-projects-slider" data-background="dark" data-title="Nosotros">
                
                <div class="mouse-wheel-wrap">
                    <a class="mouse-wheel js-mouse-wheel" href="#">
                        <span class="mouse-wheel__inner"></span>
                    </a>
                    <span class="ti-angle-double-down mouse-wheel__down"></span>
                </div>
                <div class="rev_slider_wrapper">
                    <div class="rev_slider fullwidthabanner js-rev" data-version="5.4.4" style="display:none" data-rev-layout="fullscreen" data-rev-bullets="false" data-rev-arrows="false">
                        <ul>
                            <li class="rev-item rev-item-1" data-transition="crossfade">
                                <img class="rev-slidebg" src="images/slider-01.jpg" alt="Master Slider 01" />
                                <h4 class="tp-caption tp-resizeme rev-text-1"
                                data-frames="[{&quot;delay&quot;:400,&quot;speed&quot;:1200,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[0];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:800,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                                    data-x="['left']" data-y="['middle']" data-hoffset="[0, 0, 0, 0, 0]"
                                    data-voffset="[-128, -118, -150, -130, -130]" data-paddingleft="[0, 0, 0, 0, 15]" data-paddingbottom="[50, 50, 50, 50]" 
                                    data-paddingright="[0, 0, 0, 0, 15]" data-width="['auto']" data-height="[&quot;auto&quot;]" 
                                    data-whitespace="[nowrap, nowrap, nowrap, nowrap, nowrap]" data-color="#fff" data-fontweight="400"
                                    data-fontsize="[11, 11, 14, 16, 16]" data-textalign="[left, left, left, center, center]">Somos INTRO Arquitectura</h4>
                                    <h2 class="tp-caption tp-resizeme rev-text-2"
                                    data-frames="[{&quot;delay&quot;:0,&quot;speed&quot;:1200,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:0px;opacity:1;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                                    data-x="[left]" data-y="[center]" data-hoffset="[0, 0, 0, 0, 0]" data-voffset="[-45, -40, 0, 0, 0]"
                                    data-paddingleft="[0, 0, 0, 0, 15]" data-paddingright="[0, 0, 0, 0, 15]"
                                    data-width="[1170, 930, 690, 510, 576]" data-height="[&quot;auto&quot;]" data-lineheight="[60, 58, 54, 38, 36]"
                                    data-whitespace="normal" data-color="#ebebeb" data-fontweight="700" data-fontsize="[48, 42, 46, 32, 32]"
                                    data-textalign="[left, left, left, left, left]">Nos especializamos en el diseño,
                                    construcción y transformación de espacios de trabajo.</h2>
                                <!-- <a class="tp-caption tp-resizeme" href="contacto/" target="_self"
                                    data-frames="[{&quot;delay&quot;:400,&quot;speed&quot;:1200,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:800,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                                    data-x="[left]" data-y="[center]" data-hoffset="[0, 0, 0, 0, 15]" data-voffset="[105, 105, 105, 105, 105]"
                                    data-width="['auto']" data-height="[&quot;auto&quot;]" data-responsive_offset="on" data-responsive="off"
                                    data-whitespace="[nowrap, nowrap, nowrap, nowrap, nowrap]">
                                    <span class="rev-btn-2">Contactanos</span>
                                </a>  -->   
                            </li>
                            <li class="rev-item rev-item-1" data-transition="crossfade">
                                <img class="rev-slidebg" src="images/slider-02.jpg" alt="Master Slider 01" />
                                <h4 class="tp-caption tp-resizeme rev-text-1"
                                    data-frames="[{&quot;delay&quot;:400,&quot;speed&quot;:1200,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[0];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:800,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                                    data-x="['left']" data-y="['middle']" data-hoffset="[0, 0, 0, 0, 0]"
                                    data-voffset="[-128, -118, -150, -130, -130]" data-paddingleft="[0, 0, 0, 0, 15]" data-paddingbottom="[50, 50, 50, 50]" 
                                    data-paddingright="[0, 0, 0, 0, 15]" data-width="['auto']" data-height="[&quot;auto&quot;]" 
                                    data-whitespace="[nowrap, nowrap, nowrap, nowrap, nowrap]" data-color="#fff" data-fontweight="400"
                                    data-fontsize="[11, 11, 14, 16, 16]" data-textalign="[left, left, left, center, center]" ">Somos INTRO Arquitectura</h4>
                                <h2 class="tp-caption tp-resizeme rev-text-2"
                                    data-frames="[{&quot;delay&quot;:0,&quot;speed&quot;:1200,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:0;opacity:1;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:800,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                                    data-x="[left]" data-y="[center]" data-hoffset="[0, 0, 0, 0, 0]" data-voffset="[-45, -40, 0, 0, 0]"
                                    data-paddingleft="[0, 0, 0, 0, 15]" data-paddingright="[0, 0, 0, 0, 15]"
                                    data-width="[1170, 930, 690, 510, 576]" data-height="[&quot;auto&quot;]" data-lineheight="[60, 58, 54, 38, 36]"
                                    data-whitespace="normal" data-color="#ebebeb" data-fontweight="700" data-fontsize="[48, 42, 46, 32, 32]"
                                    data-textalign="[left, left, left, left, left]">Nos especializamos en el diseño,
                                    construcción y transformación de espacios de trabajo.</h2>
                                <!-- <a class="tp-caption tp-resizeme" href="contacto/" target="_self"
                                    data-frames="[{&quot;delay&quot;:400,&quot;speed&quot;:1200,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:800,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                                    data-x="[left]" data-y="[center]" data-hoffset="[0, 0, 0, 0, 15]" data-voffset="[95, 95, 105, 105, 85]"
                                    data-width="['auto']" data-height="[&quot;auto&quot;]" data-responsive_offset="on" data-responsive="off"
                                    data-whitespace="[nowrap, nowrap, nowrap, nowrap, nowrap]">
                                    <span class="rev-btn-2">Contactanos</span>
                                </a> -->    
                            </li>
                            <li class="rev-item rev-item-1" data-transition="crossfade">
                                <img class="rev-slidebg" src="images/slider-03.jpg" alt="Master Slider 01" />
                                <h4 class="tp-caption tp-resizeme rev-text-1"
                                    data-frames="[{&quot;delay&quot;:400,&quot;speed&quot;:1200,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[0];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:800,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                                    data-x="['left']" data-y="['middle']" data-hoffset="[0, 0, 0, 0, 0]"
                                    data-voffset="[-128, -118, -150, -130, -130]" data-paddingleft="[0, 0, 0, 0, 15]"
                                    data-paddingright="[0, 0, 0, 0, 15]" data-width="['auto']" data-height="[&quot;auto&quot;]"
                                    data-whitespace="[nowrap, nowrap, nowrap, nowrap, nowrap]" data-color="#fff" data-fontweight="400" data-paddingbottom="[50, 50, 50, 50]" 
                                    data-fontsize="[11, 11, 14, 16, 16]" data-textalign="[left, left, left, center, center]">Somos INTRO Arquitectura</h4>
                                <h2 class="tp-caption tp-resizeme rev-text-2"
                                    data-frames="[{&quot;delay&quot;:0,&quot;speed&quot;:1200,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:0;opacity:1;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:800,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                                    data-x="[left]" data-y="[center]" data-hoffset="[0, 0, 0, 0, 0]" data-voffset="[-45, -40, 0, 0, 0]"
                                    data-paddingleft="[0, 0, 0, 0, 15]" data-paddingright="[0, 0, 0, 0, 15]"
                                    data-width="[1170, 930, 690, 510, 576]" data-height="[&quot;auto&quot;]" data-lineheight="[60, 58, 54, 38, 36]"
                                    data-whitespace="normal" data-color="#ebebeb" data-fontweight="700" data-fontsize="[48, 42, 46, 32, 32]"
                                    data-textalign="[left, left, left, left, left]">Nos especializamos en el diseño,
                                    construcción y transformación de espacios de trabajo.</h2>
                                <!-- <a class="tp-caption tp-resizeme" href="contacto/" target="_self"
                                    data-frames="[{&quot;delay&quot;:400,&quot;speed&quot;:1200,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:800,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                                    data-x="[left]" data-y="[center]" data-hoffset="[0, 0, 0, 0, 15]" data-voffset="[185, 185, 210, 180, 170]"
                                    data-width="['auto']" data-height="[&quot;auto&quot;]" data-responsive_offset="on" data-responsive="off"
                                    data-whitespace="[nowrap, nowrap, nowrap, nowrap, nowrap]">
                                    <span class="rev-btn-2">Contactanos</span>
                                </a>  -->   
                            </li>
                            <li class="rev-item rev-item-1" data-transition="crossfade">
                                <img class="rev-slidebg" src="images/slider-04.jpg" alt="Master Slider 01" />
                                <h4 class="tp-caption tp-resizeme rev-text-1"
                                    data-frames="[{&quot;delay&quot;:400,&quot;speed&quot;:1200,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[0];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:800,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                                    data-x="['left']" data-y="['middle']" data-hoffset="[0, 0, 0, 0, 0]"
                                    data-voffset="[-128, -118, -150, -130, -130]" data-paddingleft="[0, 0, 0, 0, 15]" data-paddingbottom="[50, 50, 50, 50]" 
                                    data-paddingright="[0, 0, 0, 0, 15]" data-width="['auto']" data-height="[&quot;auto&quot;]"
                                    data-whitespace="[nowrap, nowrap, nowrap, nowrap, nowrap]" data-color="#fff" data-fontweight="400"
                                    data-fontsize="[11, 11, 14, 16, 16]" data-textalign="[left, left, left, center, center]">Somos INTRO Arquitectura</h4>
                                <h2 class="tp-caption tp-resizeme rev-text-2"
                                    data-frames="[{&quot;delay&quot;:0,&quot;speed&quot;:1200,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:0;opacity:1;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:800,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                                    data-x="[left]" data-y="[center]" data-hoffset="[0, 0, 0, 0, 0]" data-voffset="[-45, -40, 0, 0, 0]"
                                    data-paddingleft="[0, 0, 0, 0, 15]" data-paddingright="[0, 0, 0, 0, 15]"
                                    data-width="[1170, 930, 690, 510, 576]" data-height="[&quot;auto&quot;]" data-lineheight="[60, 58, 54, 38, 36]"
                                    data-whitespace="normal" data-color="#ebebeb" data-fontweight="700" data-fontsize="[48, 42, 46, 32, 32]"
                                    data-textalign="[left, left, left, left, left]">Nos especializamos en el diseño,
                                    construcción y transformación de espacios de trabajo.</h2>
                               <!--  <a class="tp-caption tp-resizeme" href="contacto/" target="_self"
                                    data-frames="[{&quot;delay&quot;:400,&quot;speed&quot;:1200,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:800,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                                    data-x="[left]" data-y="[center]" data-hoffset="[0, 0, 0, 0, 15]" data-voffset="[185, 185, 210, 180, 170]"
                                    data-width="['auto']" data-height="[&quot;auto&quot;]" data-responsive_offset="on" data-responsive="off"
                                    data-whitespace="[nowrap, nowrap, nowrap, nowrap, nowrap]">
                                    <span class="rev-btn-2">Contactanos</span>
                                </a>  -->   
                            </li>
                           <!--  <li class="rev-item rev-item-1" data-transition="crossfade">
                                <img class="rev-slidebg" src="images/slider-05.jpg" alt="Master Slider 01" />
                                <h4 class="tp-caption tp-resizeme rev-text-1"
                                    data-frames="[{&quot;delay&quot;:400,&quot;speed&quot;:1200,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[0];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:800,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                                    data-x="['left']" data-y="['middle']" data-hoffset="[0, 0, 0, 0, 0]"
                                    data-voffset="[-128, -118, -150, -130, -130]" data-paddingleft="[0, 0, 0, 0, 15]" data-paddingbottom="[50, 50, 50, 50]" 
                                    data-paddingright="[0, 0, 0, 0, 15]" data-width="['auto']" data-height="[&quot;auto&quot;]" 
                                    data-whitespace="[nowrap, nowrap, nowrap, nowrap, nowrap]" data-color="#fff" data-fontweight="400"
                                    data-fontsize="[11, 11, 14, 16, 16]" data-textalign="[left, left, left, center, center]">Somos INTRO Arquitectura</h4>
                                <h2 class="tp-caption tp-resizeme rev-text-2"
                                    data-frames="[{&quot;delay&quot;:0,&quot;speed&quot;:1200,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:0;opacity:1;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:800,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                                    data-x="[left]" data-y="[center]" data-hoffset="[0, 0, 0, 0, 0]" data-voffset="[-45, -40, 0, 0, 0]"
                                    data-paddingleft="[0, 0, 0, 0, 15]" data-paddingright="[0, 0, 0, 0, 15]"
                                    data-width="[1170, 930, 690, 510, 576]" data-height="[&quot;auto&quot;]" data-lineheight="[60, 58, 54, 38, 36]"
                                    data-whitespace="normal" data-color="#ebebeb" data-fontweight="700" data-fontsize="[48, 42, 46, 32, 32]"
                                    data-textalign="[left, left, left, left, left]">Nos especializamos en el diseño,
                                    construcción y transformación de espacios de trabajo.</h2>
                                <a class="tp-caption tp-resizeme" href="contacto/" target="_self"
                                    data-frames="[{&quot;delay&quot;:400,&quot;speed&quot;:1200,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:800,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                                    data-x="[left]" data-y="[center]" data-hoffset="[0, 0, 0, 0, 15]" data-voffset="[185, 185, 210, 180, 170]"
                                    data-width="['auto']" data-height="[&quot;auto&quot;]" data-responsive_offset="on" data-responsive="off"
                                    data-whitespace="[nowrap, nowrap, nowrap, nowrap, nowrap]">
                                    <span class="rev-btn-2">Contactanos</span>
                                </a>    
                            </li> -->
                        </ul>
                    </div>
                </div>
            </section>
            <!-- END SLIDER-->

            <!-- SECTION-->
            <section class="section-pp pp-easing section-pp--pad" data-background="light" data-title="Que hacemos">
                
                <div class="section-content">
                    <div class="container">
                        <div class="row no-gutters circles-home">
                            <div class="col-md-4">
                                <article class="media media-service-1">
                                    <figure class="media__img">
                                        <div class="media__img-inner">
                                            <img src="images/circulos/ESCUCHAMOS.jpg" alt="architecture" />
                                        </div>
                                        <img class="img-line" src="images/icon/line.png" alt="Line" />
                                    </figure>
                                    <div class="media__title title-number">
                                        <h3 class="title title--sm">
                                            <p>Escuchamos</p>
                                        </h3>
                                        <span class="number">01</span>
                                    </div>
                                    <p class="media__text">Nos caracterizamos por la atención personalizada que brindamos a nuestros clientes; escuchamos y evaluamos atentamente sus necesidades para ofrecerle una solución 100% a medida.</p>
                                </article>
                            </div>
                            <div class="col-md-4">
                                <article class="media media-service-1">
                                    <figure class="media__img">
                                        <div class="media__img-inner">
                                            <img src="images/circulos/PROPONEMOS.jpg" alt="Interior" />
                                        </div>
                                        <img class="img-rotate-1 img-line" src="images/icon/line.png" alt="Line" />
                                    </figure>
                                    <div class="media__title title-number">
                                        <h3 class="title title--sm">
                                            <p>Proponemos</p>
                                        </h3>
                                        <span class="number">02</span>
                                    </div>
                                    <p class="media__text">Transformamos ideas en verdaderas experiencias. Brindamos soluciones integrales y versátiles, hechas a medida. Nuestra flexibilidad y trabajo continuo con el cliente dan como resultado propuestas que superan sus expectativas.</p>
                                </article>
                            </div>
                            <div class="col-md-4">
                                <article class="media media-service-1">
                                    <figure class="media__img">
                                        <div class="media__img-inner">
                                            <img src="images/circulos/DESARROLLAMOS.jpg" alt="planning" />
                                        </div>
                                        <img class="img-rotate-2 img-line" src="images/icon/line.png" alt="Line" />
                                    </figure>
                                    <div class="media__title title-number">
                                        <h3 class="title title--sm">
                                            <p>Desarrollamos</p>
                                        </h3>
                                        <span class="number">03</span>
                                    </div>
                                    <p class="media__text">La supervisión constante en el gerenciamiento y ejecución integral de las obras sumado a una amplia trayectoria ha consolidado nuestra especialización en la creación de ambientes óptimos para el desarrollo del capital humano.</p>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END SECTION-->

            <!-- SECTION-->
            <section class="section-pp pp-easing bg-pattern-1 section-pp--pad projects-slider" data-background="dark" data-title="Últimos trabajos">
                
                <div class="section-content">
                    <div class="container">
                        <div class="rev_slider_wrapper home-projects">
                            <div class="rev_slider fullwidthabanner js-rev" data-version="5.4.4" style="display:none" data-rev-height="650" data-rev-layout="auto" data-rev-bullets="false" data-rev-arrows="true" data-rev-stylearrow="au-rev-arrow-3" data-rev-parallaxon="true">
                                <ul class="list-rev-item--ov">

                                    <li class="rev-item rev-item-1 rev-item--ov" data-transition="crossfade">
                                        <img class="rev-slidebg" src="./images/kimberly-portada-home.jpg" alt="Master Slider 01" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="6" />
                                        <h4 class="tp-caption tp-resizeme rev-text-4 rs-parallaxlevel-1" data-frames="[{&quot;delay&quot;:300,&quot;speed&quot;:1200,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:-50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:800,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                                        data-x="['right']" data-y="['bottom']" data-hoffset="[-8, 120, 120, 0, 0]" data-voffset="[-40, 40, 40, 30, 30]" data-paddingleft="[0, 0, 0, 0, 15]" data-paddingright="[0, 0, 0, 0, 15]" data-width="['auto']" data-height="[&quot;auto&quot;]"
                                        data-whitespace="[nowrap, nowrap, nowrap, nowrap, nowrap]" data-color="#ececec" data-fontweight="400" data-lineheight="[30, 30, 26, 30, 30]" data-fontsize="[18, 18, 14, 16, 16]" data-textalign="[left, left, left, center, center]">Kimberly Clark</h4>
                                        <!-- <h2 class="tp-caption tp-resizeme rev-text-3 rs-parallaxlevel-2" data-frames="[{&quot;delay&quot;:200,&quot;speed&quot;:1100,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:800,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                                        data-x="[left]" data-y="[bottom]" data-hoffset="[0, 75, 70, 65, 65]" data-voffset="[-28, 50, 70, 65, 65]" data-paddingleft="[0, 0, 0, 0, 15]" data-paddingright="[0, 0, 0, 0, 15]" data-width="[370, 370, 690, 510, 576]"
                                        data-height="[&quot;auto&quot;]" data-lineheight="[60, 58, 54, 38, 36]" data-whitespace="normal" data-color="#fff" data-fontweight="700" data-fontsize="[48, 42, 46, 32, 32]" data-textalign="[left, left, left, left, left]">KIMBERLY CLARK
                                        </h2> -->
                                    </li>

                                    <li class="rev-item rev-item-1 rev-item--ov" data-transition="crossfade">
                                        <img class="rev-slidebg" src="./images/mae-portada-home.jpg" alt="Master Slider 01" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="6" />
                                        <h4 class="tp-caption tp-resizeme rev-text-4 rs-parallaxlevel-1" data-frames="[{&quot;delay&quot;:300,&quot;speed&quot;:1200,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:-50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:800,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                                        data-x="['right']" data-y="['bottom']" data-hoffset="[-8, 120, 120, 0, 0]" data-voffset="[-40, 40, 40, 30, 30]" data-paddingleft="[0, 0, 0, 0, 15]" data-paddingright="[0, 0, 0, 0, 15]" data-width="['auto']" data-height="[&quot;auto&quot;]"
                                        data-whitespace="[nowrap, nowrap, nowrap, nowrap, nowrap]" data-color="#ececec" data-fontweight="400" data-lineheight="[30, 30, 26, 30, 30]" data-fontsize="[18, 18, 14, 16, 16]" data-textalign="[left, left, left, center, center]">MAE</h4>
                                        <!-- <h2 class="tp-caption tp-resizeme rev-text-3 rs-parallaxlevel-2" data-frames="[{&quot;delay&quot;:200,&quot;speed&quot;:1100,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:800,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                                        data-x="[left]" data-y="[bottom]" data-hoffset="[0, 75, 70, 65, 65]" data-voffset="[-28, 50, 70, 65, 65]" data-paddingleft="[0, 0, 0, 0, 15]" data-paddingright="[0, 0, 0, 0, 15]" data-width="[370, 370, 690, 510, 576]"
                                        data-height="[&quot;auto&quot;]" data-lineheight="[60, 58, 54, 38, 36]" data-whitespace="normal" data-color="#fff" data-fontweight="700" data-fontsize="[48, 42, 46, 32, 32]" data-textalign="[left, left, left, left, left]">MAE
                                        </h2> -->
                                    </li>

                                    <li class="rev-item rev-item-1 rev-item--ov" data-transition="crossfade">
                                        <img class="rev-slidebg" src="./images/regus-portada-home.jpg" alt="Master Slider 01" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="6" />
                                        <h4 class="tp-caption tp-resizeme rev-text-4 rs-parallaxlevel-1" data-frames="[{&quot;delay&quot;:300,&quot;speed&quot;:1200,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:-50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:800,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                                        data-x="['right']" data-y="['bottom']" data-hoffset="[-8, 120, 120, 0, 0]" data-voffset="[-40, 40, 40, 30, 30]" data-paddingleft="[0, 0, 0, 0, 15]" data-paddingright="[0, 0, 0, 0, 15]" data-width="['auto']" data-height="[&quot;auto&quot;]"
                                        data-whitespace="[nowrap, nowrap, nowrap, nowrap, nowrap]" data-color="#ececec" data-fontweight="400" data-lineheight="[30, 30, 26, 30, 30]" data-fontsize="[18, 18, 14, 16, 16]" data-textalign="[left, left, left, center, center]">Regus</h4>
                                        <!-- <h2 class="tp-caption tp-resizeme rev-text-3 rs-parallaxlevel-2" data-frames="[{&quot;delay&quot;:200,&quot;speed&quot;:1100,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:800,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                                        data-x="[left]" data-y="[bottom]" data-hoffset="[0, 75, 70, 65, 65]" data-voffset="[-28, 50, 70, 65, 65]" data-paddingleft="[0, 0, 0, 0, 15]" data-paddingright="[0, 0, 0, 0, 15]" data-width="[370, 370, 690, 510, 576]"
                                        data-height="[&quot;auto&quot;]" data-lineheight="[60, 58, 54, 38, 36]" data-whitespace="normal" data-color="#fff" data-fontweight="700" data-fontsize="[48, 42, 46, 32, 32]" data-textalign="[left, left, left, left, left]">Regus
                                        </h2> -->
                                    </li>

                                    <li class="rev-item rev-item-1 rev-item--ov" data-transition="crossfade">
                                        <img class="rev-slidebg" src="./images/wenance-portada-home.jpg" alt="Master Slider 01" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="6" />
                                        <h4 class="tp-caption tp-resizeme rev-text-4 rs-parallaxlevel-1" data-frames="[{&quot;delay&quot;:300,&quot;speed&quot;:1200,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:-50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:800,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                                        data-x="['right']" data-y="['bottom']" data-hoffset="[-8, 120, 120, 0, 0]" data-voffset="[-40, 40, 40, 30, 30]" data-paddingleft="[0, 0, 0, 0, 15]" data-paddingright="[0, 0, 0, 0, 15]" data-width="['auto']" data-height="[&quot;auto&quot;]"
                                        data-whitespace="[nowrap, nowrap, nowrap, nowrap, nowrap]" data-color="#ececec" data-fontweight="400" data-lineheight="[30, 30, 26, 30, 30]" data-fontsize="[18, 18, 14, 16, 16]" data-textalign="[left, left, left, center, center]">Wenance</h4>
                                        <!-- <h2 class="tp-caption tp-resizeme rev-text-3 rs-parallaxlevel-2" data-frames="[{&quot;delay&quot;:200,&quot;speed&quot;:1100,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:800,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                                        data-x="[left]" data-y="[bottom]" data-hoffset="[0, 75, 70, 65, 65]" data-voffset="[-28, 50, 70, 65, 65]" data-paddingleft="[0, 0, 0, 0, 15]" data-paddingright="[0, 0, 0, 0, 15]" data-width="[370, 370, 690, 510, 576]"
                                        data-height="[&quot;auto&quot;]" data-lineheight="[60, 58, 54, 38, 36]" data-whitespace="normal" data-color="#fff" data-fontweight="700" data-fontsize="[48, 42, 46, 32, 32]" data-textalign="[left, left, left, left, left]">Regus
                                        </h2> -->
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="text-center p-t-80">
                            <a class="au-btn au-btn--light" href="proyectos/">Ver más proyectos</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END SECTION-->

            <!-- SECTION-->
            <section class="section-pp pp-easing bg-gray section-pp--pad" data-background="dark" data-title="Medallia">
                
                <div class="section-content">
                    <div class="container">
                        <div class="row m-b-10">
                            <div class="col-12 title m-b-20">
                                <h2 style='padding-bottom: 10px;color: #e4e4e4'>
                                    <?php echo $configs['title_home_video_spanish'] ?>
                                </h2>
                                <hr style='border-color:rgba(255,255,255,.4)'>
                            </div>
                            <div class="col-12 m-t-20 medallia-video" style='margin-bottom: -20px'>
                                <?php echo $configs['url_home_video_spanish'] ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END SECTION-->

            <!-- SECTION-->
            <section class="section-pp pp-easing section-pp--pad" data-background="light" data-title="Por que elegirnos">
               
                <div class="section-content">
                    <div class="container">
                        <div class="row no-gutters">
                            <div class="col-md-8 p-r-155">
                                <h4 class="title-sub m-b-15">¿Por qué trabajar con nosotros?</h4>
                                <h2 class="title-0 m-b-40 h2-nos-especializamos">Nos especializamos en el diseño de oficinas corporativas.</h2>
                                <p class="m-b-65">
                                    Nuestros proyectos son concebidos desde la dinámica de la empresa, el análisis de los individuos y su relación con el entorno.
                                </p>
                                <div class="row no-gutters section-numbers">
                                    <div class="media-about-3">
                                        <div class="media__number-wrap">
                                            <span class="media__number">01</span>
                                            <span class="line"></span>
                                            <span class="line line--bottom"></span>
                                        </div>
                                        <div class="media__body">
                                            <h4 class="media__title title--sm titulos-de-cuadrados">
                                                <a href="https://www.introarquitectura.com.ar/about-us/">Proyectos llave en mano.</a>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="media-about-3">
                                        <div class="media__number-wrap">
                                            <span class="media__number">02</span>
                                            <span class="line"></span>
                                            <span class="line line--bottom"></span>
                                        </div>
                                        <div class="media__body">
                                            <h4 class="media__title title--sm titulos-de-cuadrados">
                                                <a href="https://www.introarquitectura.com.ar/about-us/">Equipo de profesionales especializados.</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="row no-gutters">
                                    <div class="media-about-3">
                                        <div class="media__number-wrap">
                                            <span class="media__number">03</span>
                                            <span class="line"></span>
                                            <span class="line line--bottom"></span>
                                        </div>
                                        <div class="media__body">
                                            <h4 class="media__title title--sm titulos-de-cuadrados">
                                                 <a href="https://www.introarquitectura.com.ar/about-us/">Espacios de trabajo versátiles.</a>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="media-about-3">
                                        <div class="media__number-wrap">
                                            <span class="media__number">04</span>
                                            <span class="line"></span>
                                            <span class="line line--bottom"></span>
                                        </div>
                                        <div class="media__body">
                                            <h4 class="media__title title--sm titulos-de-cuadrados">
                                                 <a href="https://www.introarquitectura.com.ar/about-us/">Diseño basado en estándares Well.</a>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="media-about-3">
                                        <div class="media__number-wrap">
                                            <span class="media__number">05</span>
                                            <span class="line"></span>
                                            <span class="line line--bottom"></span>
                                        </div>
                                        <div class="media__body">
                                            <h4 class="media__title title--sm titulos-de-cuadrados">
                                                <a href="https://www.introarquitectura.com.ar/about-us/">Cumplimiento de los plazos acordados</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="media-about">
                                    <div class="media__img media__img--rect js-line">
                                        <img src="images/15-anos.jpg" alt="15-anos.jpg" id="15anosimg">
                                        <span class="line"></span>
                                        <span class="line line-bottom"></span>
                                        <div class="media__img-inner">
                                            <span class="number">15</span>
                                            <span class="desc">Años de experiencia </br>y más de 500.000 m2 construidos.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END SECTION-->

            <!-- SECTION-->
            <section class="section-pp pp-easing bg-image-1 section-pp--pad" data-background="dark" data-title="Testimonios">
              
                <div class="section-content">
                    <div class="container">
                        <div class="row m-b-10 logos-home">
                            <div class="screen-inner row active first-row">
                                <div class="col-lg-3 col-md-6">
                                    <a class="img-client" href="./proyectos/Andreani.php">
                                        <img src="images/icon/clientes/andreani-logo.png" alt="andreani-logo">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <a class="img-client" href="./proyectos/Asapp.php">
                                        <img src="images/icon/clientes/asapp-logo.png" alt="asapp-logo.png">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <a class="img-client belatrix-logo" href="./proyectos/Belatrix.php">
                                        <img src="images/icon/clientes/belatrix-logo.png" alt="belatrix-logo.png">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <a class="img-client" href="./proyectos/Comviva.php">
                                        <img src="images/icon/clientes/Comviva-logo.png" alt="Comviva-logo.png">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <a class="img-client" href="./proyectos/Despegar.php">
                                        <img src="images/icon/clientes/despegar-logo.png" alt="despegar-logo.png">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <a class="img-client" href="#" style='cursor: unset' onclick='noRedirect(event)' >
                                        <img src="images/icon/clientes/Digital-House-logo.png" alt="Digital-House-logo.png">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <a class="img-client" href="./proyectos/Emergencias.php">
                                        <img src="images/icon/clientes/emergencias-logo.png" alt="emergencias-logo.png">
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-6">
                                    <a class="img-client" href="#" style='cursor: unset' onclick='noRedirect(event)'>
                                        <img style='transform: scale(0.8)'
                                            src="images/icon/clientes/huawei-logo.png" alt="huawei-logo.png">
                                    </a>
                                </div>
                            </div>
                            
                            <div class="screen-inner row">
                                <div class="col-lg-3 col-md-6">
                                    <a class="img-client" href="./proyectos/Etex.php">
                                        <img src="images/icon/clientes/etex-logo.png" alt="etex-logo.png">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <a class="img-client" href="./proyectos/Kimberly-Clark.php">
                                        <img src="images/icon/clientes/kimberly-clark-logo-1.png" alt="kimberly-clark-logo-1.png">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <a class="img-client" href="#" style='cursor: unset' onclick='noRedirect(event)' >
                                        <img src="images/icon/clientes/prudential-logo.png" alt="prudential-logo">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <a class="img-client" href="./proyectos/Mega.php">
                                        <img src="images/icon/clientes/LOGO-MEGA.png" alt="LOGO-MEGA.png">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <a class="img-client" href="./proyectos/Valuar.php">
                                        <img src="images/icon/clientes/valuar-logo.png" alt="valuar-logo.png">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <a class="img-client" href="./proyectos/Mae.php">
                                        <img src="images/icon/clientes/MAE-logo.png" alt="MAE-logo.png">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <a class="img-client" href="./proyectos/Medallia.php">
                                        <img src="images/icon/clientes/Medallia-Logo.png" alt="Medallia-Logo.png">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <a class="img-client" href="#" style='cursor: unset' onclick='noRedirect(event)'>
                                        <img src="images/icon/clientes/bayer-logo.png" alt="bayer-logo.png">
                                    </a>
                                </div>
                            </div>

                            <div class="screen-inner row">
                                <div class="col-lg-3 col-md-6">
                                    <a class="img-client" href="./proyectos/Navent.php">
                                        <img src="images/icon/clientes/navent-logo.png" alt="navent-logo.png">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <a class="img-client" >
                                        <img src="images/icon/clientes/pedidos-ya-logo.png" alt="pedidos-ya-logo.png">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <a class="img-client" href="./proyectos/Phd.php">
                                        <img src="images/icon/clientes/PHD-LOGO-NUEVO.png" alt="PHD-LOGO-NUEVO">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <a class="img-client" href="./proyectos/Posta.php">
                                        <img src="images/icon/clientes/Posta-logo.png" alt="Posta-logo">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <a class="img-client" href="./proyectos/Lo-Jack.php">
                                        <img style='transform: scale(1.1)'
                                            src="images/icon/clientes/lo-jack-logo.png" alt="lo-jack-logo.png">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <a class="img-client" href="./proyectos/Regus.php">
                                        <img src="images/icon/clientes/regus.png" alt="regus">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <a class="img-client" href="./proyectos/Daikin.php">
                                        <img src="images/icon/clientes/Daikin-logo.png" alt="Daikin-logo.png">
                                    </a>
                                </div>
                            </div>

                            <div class="screen-inner row">
                                <div class="screen-item">
                                    <a class="img-client" href="#" style='cursor: unset' onclick='noRedirect(event)'>
                                        <img style='transform: scale(0.5)'
                                            src="images/icon/clientes/epson-logo.png" alt="epson-logo.png">
                                    </a>
                                </div>

                                <div class="screen-item">
                                    <a class="img-client" href="#" style='cursor: unset' onclick='noRedirect(event)'>
                                        <img style='transform: scale(0.5)'
                                            src="images/icon/clientes/mercado-libre-logo.png" alt="mercado-libre-logo">
                                    </a>
                                </div>

                                <div class="screen-item">
                                    <a class="img-client" href="#" style='cursor: unset' onclick='noRedirect(event)'>
                                        <img src="images/icon/clientes/pirelli-logo.png" alt="pirelli-logo.png">
                                    </a>
                                </div>

                                <div class="screen-item">
                                    <a class="img-client" href="#" style='cursor: unset' onclick='noRedirect(event)'>
                                        <img style='transform: scale(0.75)'
                                            src="images/icon/clientes/edenor-logo.png" alt="edenor-logo">
                                    </a>
                                </div>

                                <div class="screen-item">
                                    <a class="img-client" href="#" style='cursor: unset' onclick='noRedirect(event)'>
                                        <img style='transform: scale(0.8); filter: grayscale(1) !important'
                                            src="images/icon/clientes/carrier.png" alt="carrier.png">
                                    </a>
                                </div>

                                <div class="screen-item">
                                    <a class="img-client" href="#" style='cursor: unset' onclick='noRedirect(event)'>
                                        <img src="images/icon/clientes/credit-suisse-logo.png" alt="credit-suisse-logo">
                                    </a>
                                </div>

                                <div class="screen-item">
                                    <a class="img-client" href="#" style='cursor: unset' onclick='noRedirect(event)'>
                                        <img src="images/icon/clientes/ICBC-logo.png" alt="ICBC-logo">
                                    </a>
                                </div>
                                
                                <!-- <div class="screen-item">
                                    <a class="img-client" href="#" style='cursor: unset' onclick='noRedirect(event)'>
                                        <img src="images/icon/clientes/genneia-logo.jpg" alt="genneia-logo">
                                    </a>
                                </div> -->
                            </div>
                        </div>
                        <div class="row m-b-10 logos-home logos-home-mobile">
                            <div class="screen-inner row active higher-row">
                                <div class="screen-item">
                                    <a class="img-client" href="./proyectos/Andreani.php">
                                        <img src="images/icon/clientes/andreani-logo.png" alt="andreani-logo">
                                    </a>
                                </div>
                                <div class="screen-item">
                                    <a class="img-client" href="./proyectos/Asapp.php">
                                        <img src="images/icon/clientes/asapp-logo.png" alt="asapp-logo.png">
                                    </a>
                                </div>
                                <div class="screen-item">
                                    <a class="img-client belatrix-logo" href="./proyectos/Belatrix.php">
                                        <img src="images/icon/clientes/belatrix-logo.png" alt="belatrix-logo.png">
                                    </a>
                                </div>
                                <div class="screen-item">
                                    <a class="img-client" href="./proyectos/Comviva.php">
                                        <img src="images/icon/clientes/Comviva-logo.png" alt="Comviva-logo.png">
                                    </a>
                                </div>
                            </div>

                            <div class="screen-inner row higher-row">
                                <div class="screen-item">
                                    <a class="img-client" href="./proyectos/Despegar.php">
                                        <img src="images/icon/clientes/despegar-logo.png" alt="despegar-logo.png">
                                    </a>
                                </div>
                                <div class="screen-item">
                                    <a class="img-client" href="#" style='cursor: unset' onclick='noRedirect(event)' >
                                        <img src="images/icon/clientes/Digital-House-logo.png" alt="Digital-House-logo.png">
                                    </a>
                                </div>
                                <div class="screen-item">
                                    <a class="img-client" href="./proyectos/Emergencias.php">
                                        <img src="images/icon/clientes/emergencias-logo.png" alt="emergencias-logo.png">
                                    </a>
                                </div>
                                <div class="screen-item">
                                    <a class="img-client" href="./proyectos/Etex.php">
                                        <img src="images/icon/clientes/etex-logo.png" alt="etex-logo.png">
                                    </a>
                                </div>
                            </div>

                            <div class="screen-inner row higher-row">
                                <div class="screen-item">
                                    <a class="img-client" href="./proyectos/Kimberly-Clark.php">
                                        <img src="images/icon/clientes/kimberly-clark-logo-1.png" alt="kimberly-clark-logo-1.png">
                                    </a>
                                </div>
                                <div class="screen-item">
                                    <a class="img-client" href="#" style='cursor: unset' onclick='noRedirect(event)' >
                                        <img src="images/icon/clientes/prudential-logo.png" alt="prudential-logo">
                                    </a>
                                </div>
                                <div class="screen-item">
                                    <a class="img-client" href="./proyectos/Mega.php">
                                        <img src="images/icon/clientes/LOGO-MEGA.png" alt="LOGO-MEGA.png">
                                    </a>
                                </div>
                                <div class="screen-item">
                                    <a class="img-client" href="./proyectos/Valuar.php">
                                        <img src="images/icon/clientes/valuar-logo.png" alt="valuar-logo.jpg">
                                    </a>
                                </div>
                            </div>

                            <div class="screen-inner row higher-row">
                                <div class="screen-item">
                                    <a class="img-client" href="./proyectos/Mae.php">
                                        <img src="images/icon/clientes/MAE-logo.png" alt="MAE-logo.png">
                                    </a>
                                </div>
                                <div class="screen-item">
                                    <a class="img-client" href="./proyectos/Medallia.php">
                                        <img src="images/icon/clientes/Medallia-Logo.png" alt="Medallia-Logo.png">
                                    </a>
                                </div>
                                <div class="screen-item">
                                    <a class="img-client" href="./proyectos/Navent.php">
                                        <img src="images/icon/clientes/navent-logo.png" alt="navent-logo.png">
                                    </a>
                                </div>
                                <div class="screen-item">
                                    <a class="img-client" href="#" style='cursor: unset' onclick='noRedirect(event)' >
                                        <img src="images/icon/clientes/pedidos-ya-logo.png" alt="pedidos-ya-logo.png">
                                    </a>
                                </div>
                            </div>

                            <div class="screen-inner row">
                                <div class="screen-item">
                                    <a class="img-client" href="./proyectos/Phd.php">
                                        <img src="images/icon/clientes/PHD-LOGO-NUEVO.png" alt="PHD-LOGO-NUEVO">
                                    </a>
                                </div>
                                <div class="screen-item">
                                    <a class="img-client" href="./proyectos/Regus.php">
                                        <img src="images/icon/clientes/regus.png" alt="regus">
                                    </a>
                                </div>
                                <div class="screen-item">
                                    <a class="img-client" href="./proyectos/Lo-Jack.php">
                                        <img src="images/icon/clientes/lo-jack-logo.png" alt="lo-jack-logo.png">
                                    </a>
                                </div>
                                <div class="screen-item">
                                    <a class="img-client" href="./proyectos/Posta.php">
                                        <img src="images/icon/clientes/Posta-logo.png" alt="Posta-logo">
                                    </a>
                                </div>
                                <div class="screen-item">
                                    <a class="img-client" href="./proyectos/Daikin.php">
                                        <img src="images/icon/clientes/Daikin-logo.png" alt="Daikin-logo.png">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="slick-wrap slick-testi js-slick-wrapper" data-slick-xs="1" data-slick-sm="1" data-slick-md="1" data-slick-lg="2" data-slick-xl="2" data-slick-customnav="true" data-slick-autoplay="true">
                            <div class="slick-wrap-content">
                                <div class="slick-content js-slick-content">
                                    <div class="slick-item">
                                        <div class="media-testi light">
                                            <p class="media__text">“Una gran experiencia trabajar con Intro. Destaco la flexibilidad, agilidad y disposición en relación con los compromisos asumidos. Tuvimos un gran acompañamiento para finalizar la obra.”</p>
                                            <div class="media__title">
                                                <h4 class="name">
                                                    <!-- <a>Maria Teresa Suarez</a> -->
                                                    <p>M.T. S.</p>
                                                </h4>
                                                <span class="job">Monsanto Argentina</span>
                                            </div>
                                            <!-- <figure class="brand-logo">
                                                <img src="images/icon/clientes/monsanto-logo.png" alt="Monsanto Argentina" />
                                            </figure>-->                                     </div>
                                    </div>
                                    <div class="slick-item">
                                        <div class="media-testi light">
                                            <p class="media__text">“Agradecemos mucho la paciencia y el empeño que le pusieron al proyecto de remodelación para llegar en tiempo y forma.”</p>
                                            <div class="media__title">
                                                <h4 class="name">
                                                    <!-- <a>Jeanette Martinez Quiroga</a> -->
                                                    <p>J.M. Q.</p>
                                                </h4>
                                                <span class="job">AstraZeneca</span>
                                            </div>
                                            <!-- <figure class="brand-logo">
                                                <img src="images/icon/clientes/astrazeneca.png" alt="AstraZeneca" />
                                            </figure>-->                                        
                                        </div>
                                    </div>
                                    <div class="slick-item">
                                        <div class="media-testi light">
                                            <p class="media__text">“Entendieron perfectamente la necesidad de realizar una obra con equilibrio entre características y presupuesto. La predisposición de todo el equipo para estar presentes cada vez que eran requeridos fue fundamental”</p>
                                            <div class="media__title">
                                                <h4 class="name">
                                                    <!-- <a>Daniel Rodriguez</a> -->
                                                    <p>D. R.</p>
                                                </h4>
                                                <span class="job">Genneia SA</span>
                                            </div>
                                            <!-- <figure class="brand-logo">
                                                <img src="images/icon/clientes/genneia-logo.jpg" alt="Genneia SA" />
                                            </figure>-->                                        
                                        </div>
                                    </div>
                                    <div class="slick-item">
                                        <div class="media-testi light">
                                            <p class="media__text">“La cercanía y el seguimiento de sus profesionales. Nos tuvieron mucha paciencia y nunca perdieron la calidez y profesionalismo.”</p>
                                            <div class="media__title">
                                                <h4 class="name">
                                                    <!-- <a>Gustavo Goldman</a> -->
                                                    <p>G. D.</p>
                                                </h4>
                                                <span class="job">Navent</span>
                                            </div>
                                            <!-- <figure class="brand-logo">
                                                <img src="images/icon/clientes/navent-logo.png" alt="Navent" />
                                            </figure>-->                                        
                                        </div>
                                    </div>
                                    <div class="slick-item">
                                        <div class="media-testi light">
                                            <p class="media__text">“Excelente calidad humana y profesional de todo el equipo. Presupuestos muy competitivos, completos y con varias opciones de materiales. Cumplimiento de tiempos de obra pactados.”</p>
                                            <div class="media__title">
                                                <h4 class="name">
                                                    <!-- <a>Florencia Nardini</a> -->
                                                    <p>F. N.</p>
                                                </h4>
                                                <span class="job">CBRE</span>
                                            </div>
                                            <!-- <figure class="brand-logo">
                                                <img src="images/icon/clientes/cbre-logo.png" alt="CBRE" />
                                            </figure>-->                                        
                                        </div>
                                    </div>
                                    <div class="slick-item">
                                        <div class="media-testi light">
                                            <p class="media__text">“Disponibilidad, atención, empatía, compromiso con lo que requería el cliente”</p>
                                            <div class="media__title">
                                                <h4 class="name">
                                                    <!-- <a>Gilberto Monteiro</a> -->
                                                    <p>G. A.</p>
                                                </h4>
                                                <span class="job">Kimberly Clark</span>
                                            </div>
                                            <!-- <figure class="brand-logo">
                                                <img src="images/icon/clientes/kimberly-clark-logo-1.png" alt="Kimberly Clark" />
                                            </figure>-->                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slick__nav arrows-1 light">
                                <i class="slick-prev slick-arrow js-slick-prev ti-angle-left"></i>
                                <i class="slick-next slick-arrow js-slick-next ti-angle-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END SECTION-->

            <!-- SECTION-->
            <section class="section-pp pp-easing section-pp--pad bg-pattern-1" data-background="dark" data-title="Contactanos">
                
                <div class="section-content">
                    <div class="container">
                        <div class="row no-gutters">
                            <div class="col-lg-4">
                                <div class="contact-info">
                                    <div class="contact-info__item">
                                        <h5 class="title--sm2" style='color: white'>dirección:</h5>
                                        <p class="value value--dark" style='color: white'>
                                            Av. del Libertador 88 - piso 2</br>Vicente Lopez, Buenos Aires, Argentina.
                                        </p>
                                    </div>
                                    <div class="contact-info__item">
                                        <h5 class="title--sm2" style='color: white'>NUMERO DE TELÉFONO :</h5>
                                        <p class="value value--dark" style='color: white'>
                                            (+54 11) 5199-1401
                                        </p>
                                    </div>
                                    <div class="contact-info__item">
                                        <h5 class="title--sm2" style='color: white'>email:</h5>
                                        <p class="value value--dark" style='color: white'>
                                            info@introarquitectura.com.ar
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <?php  require(__DIR__ . '/contact-form.php') ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END SECTION-->
        </div>
        <!-- END PAGE PILLING-->
        <!-- END FOOTER-->
        <div class="whatsapp-btn">
            <a href="https://api.whatsapp.com/send?phone=541166823584" target="_blank" class="wpp">
                <i class="fab fa-whatsapp wpp-icon text-white" aria-hidden="true"></i>
            </a>
        </div>
    </main>

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
    <script type="text/javascript" src="vendor/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="vendor/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <!--
    | (Load Extensions only on Local File Systems !
    | The following part can be removed on Server for On Demand Loading)
    -->
    <script type="text/javascript" src="vendor/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script type="text/javascript" src="vendor/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="vendor/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="vendor/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="vendor/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="vendor/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="vendor/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="vendor/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="vendor/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <!-- Config Revolution Slider-->
    <script type="text/javascript" src="js/config-revolution.min.js"></script>
    <script src="vendor/pagePiling/js/jquery.pagepiling.js"></script>
    <script src="js/config-pagePilling.js"></script>
    
    <script src="js/theme-map.js"></script>
    <script src="js/config-contact.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
    <script src="js/custom.js"></script>

    <script>
        function noRedirect(e) {
            e.preventDefault();
        }
    </script>

</body>

</html>
<!-- end document-->
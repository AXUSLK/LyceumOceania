<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lyceum Oceania | Develop an interest in Sri Lanka culture through rewarding educational experiences</title>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">

    <!-- Google Fonts -->
    <link href='//fonts.googleapis.com/css?family=DM+Sans:400,400i,500,700' rel='stylesheet'>

    <!-- Css -->
    <link rel="stylesheet" href="css/style.min.css" />
    <link rel="stylesheet" href="css/custom.css" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="img/favicon.png">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

    <style type="text/css">
        /* Extra small devices (phones, 600px and down) */
        @media only screen and (max-width: 600px) {
            .backTop-btn {
                position: fixed;
                right: 20px;
                bottom: 75px;
                padding: 5px 5px;
            }

            .project__description-wrap {
                margin: 0;
                position: absolute;
                top: 60%;
                left: 50%;
                bottom: -20%;
                -ms-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%);
            }

            .intro__text {
                font-size: 1.5rem !important;
            }
        }

        /* Small devices (portrait tablets and large phones, 600px and up) */
        @media only screen and (min-width: 600px) {
            .backTop-btn {
                position: fixed;
                right: 20px;
                bottom: 75px;
                padding: 5px 5px;
            }

            .project__description-wrap {
                margin: 0;
                position: absolute;
                top: 70%;
                left: 50%;
                bottom: -20%;
                -ms-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%);
            }

            .intro__text {
                font-size: 1.5rem !important;
            }
        }

        /* Medium devices (landscape tablets, 768px and up) */
        @media only screen and (min-width: 768px) {
            .backTop-btn {
                position: fixed;
                right: 20px;
                bottom: 75px;
                padding: 10px 20px;
            }

            .project__description-wrap {
                margin: 0;
                position: absolute;
                top: 70%;
                left: 50%;
                bottom: -20%;
                -ms-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%);
            }

            .intro__text {
                font-size: 1.8rem !important;
            }
        }

        /* Large devices (laptops/desktops, 992px and up) */
        @media only screen and (min-width: 992px) {
            .backTop-btn {
                position: fixed;
                right: 20px;
                bottom: 75px;
                padding: 10px 20px;
            }

            .project__description-wrap {
                margin: 0;
                position: absolute;
                top: 60%;
                left: 50%;
                bottom: -20%;
                -ms-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%);
            }

            .intro__text {
                font-size: 2.2rem !important;
            }
        }

        /* Extra large devices (large laptops and desktops, 1200px and up) */
        @media only screen and (min-width: 1200px) {
            .backTop-btn {
                position: fixed;
                right: 20px;
                bottom: 75px;
                padding: 10px 20px;
            }

            .project__description-wrap {
                margin: 0;
                position: absolute;
                top: 80%;
                left: 50%;
                bottom: -20%;
                -ms-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%);
            }

            .intro__text {
                font-size: 2.2rem !important;
            }
        }

        .title-row {
            margin-top: 10%;
        }

        /* .intro__text {
            font-size: 2.2rem !important;
        } */

        /* .project__description-wrap {
            margin: 0;
            position: absolute;
            top: 80%;
            left: 50%;
            bottom: -10%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        } */

        .cc-link {
            color: #009fdc !important;
            text-decoration: none;
        }

        .cc-link:hover,
        .cc-link:active {
            color: #FFFFFF !important;
            text-decoration: none;
        }

        .backTop-btn {
            /* position: fixed;
            right: 20px;
            bottom: 75px;
            padding: 10px 20px; */
            text-align: center;
            /* color: #ffffff; */
            text-decoration: none;
            background-color: #009fdc;

            border-radius: 40px;
            font-size: 18px;
            /* border-bottom-left-radius: 0px; */
            /* border-top-right-radius: 0px; */
            border: 3px solid #f6f6f6;
            box-shadow: 0px 0px 8px 2px #5a5a5a;
            display: none;
        }

        .backTop-btn:hover,
        .backTop-btn:active {
            color: #795548;
            background: #FFFFFF
        }

        #back-to-top a {
            color: #FFFFFF;
            text-align: center;
        }

        #back-to-top>a:hover,
        #back-to-top>a:active {
            color: #000000;
            text-align: center;
            border: 3px solid #009fdc;
        }

        .lg-logo {
            min-height: 50px;
            max-height: 30px;
        }

        .sm-logo {
            min-height: 30px;
            max-height: 30px;
        }

        /* .tp-parallax-wrap.tp-parallax-container  {
            position: absolute;
            display: block;
            visibility: visible;
            transform: matrix(1, 0, 0, 1, 0, 0);
            left: 870px !important;
            top: 608px !important;
            z-index: 12;
        } */

    </style>

</head>

<body data-spy="scroll" data-offset="60" data-target=".nav__holder" data-cookie="on" id="home" itemscope
    itemtype="http://schema.org/WebPage">

    <!-- Preloader -->
    <div class="loader-mask">
        <div class="loader">
            "Loading..."
        </div>
    </div>

    <!-- Header -->
    <header class="nav nav--always-fixed" itemtype="http://schema.org/WPHeader" itemscope>

        <div class="nav__holder nav--sticky nav--align-center">
            <div class="container-fluid container-semi-fluid">
                <div class="flex-parent">

                    <div class="nav__header clearfix">
                        <!-- Logo -->
                        <div class="logo-wrap local-scroll">
                            <a href="#home" class="logo__url">
                                <img class="lg-logo" src="img/logo/logo_nn.png"
                                    srcset="img/logo/logo_nn.png 1x, img/logo/logo_nn.png 2x" alt="logo"
                                    itemtype="http://schema.org/Organization" itemscope>
                            </a>
                        </div>

                        <button type="button" class="nav__icon-toggle" id="nav__icon-toggle" data-toggle="collapse"
                            data-target="#navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="nav__icon-toggle-bar"></span>
                            <span class="nav__icon-toggle-bar"></span>
                            <span class="nav__icon-toggle-bar"></span>
                        </button>
                    </div> <!-- end nav-header -->

                    <!-- Navbar -->
                    <nav id="navbar-collapse" class="nav__wrap collapse navbar-collapse"
                        itemtype="http://schema.org/SiteNavigationElement" itemscope="itemscope">
                        <ul class="nav__menu local-scroll" id="onepage-nav">
                            {{-- <li class="nav__dropdown">
                                <a href="index.html#home" class="nav-link active" aria-haspopup="true">Home</a>
                                <i class="ui-arrow-down nav__dropdown-trigger" role="button" aria-haspopup="true"
                                    aria-expanded="false"></i>
                                <ul class="nav__dropdown-menu">
                                    <li>
                                        <a href="index.html">
                                            <span class="nav__dropdown-menu-label">Hero Image</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index-video-bg.html">
                                            <span class="nav__dropdown-menu-label">HTML Video (Dark Version)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index-creative.html">
                                            <span class="nav__dropdown-menu-label">Hero Creative</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index-youtube-bg.html">
                                            <span class="nav__dropdown-menu-label">Youtube Video</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index-vimeo-bg.html">
                                            <span class="nav__dropdown-menu-label">Vimeo Video</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index-projects-showcase.html">
                                            <span class="nav__dropdown-menu-label">Projects Showcase</span>
                                        </a>
                                    </li>
                                </ul>
                            </li> --}}
                            <li>
                                <a href="/" class="nav-link">Home</a>
                            </li>
                            <li>
                                <a href="#services" class="nav-link">Services</a>
                            </li>
                            <li>
                                <a href="#about" class="nav-link">About</a>
                            </li>
                            <li>
                                <a href="#works" class="nav-link">Works</a>
                            </li>
                            {{-- <li>
                                <a href="#clients" class="nav-link">Clients</a>
                            </li> --}}
                            {{-- <li>
                                <a href="#blog" class="nav-link">Blog</a>
                            </li> --}}

                            {{-- <li class="nav__dropdown">
                                <a href="#" class="nav-link" aria-haspopup="true">Pages</a>
                                <i class="ui-arrow-down nav__dropdown-trigger" role="button" aria-haspopup="true"
                                    aria-expanded="false"></i>
                                <ul class="nav__dropdown-menu">
                                    <li>
                                        <a href="projects.html">
                                            <span class="nav__dropdown-menu-label">Projects</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="single-project.html">
                                            <span class="nav__dropdown-menu-label">Single Project</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="blog.html">
                                            <span class="nav__dropdown-menu-label">Blog</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="single-post.html">
                                            <span class="nav__dropdown-menu-label">Single Post</span>
                                        </a>
                                    </li>
                                </ul>
                            </li> --}}

                            <li>
                                <a href="#contact" class="nav-link">Contact</a>
                            </li>
                        </ul> <!-- end menu -->


                        <!-- Mobile Socials -->
                        <div class="nav__mobile-socials d-lg-none">
                            <div class="socials">
                                {{-- <a href="#" class="social social-behance" aria-label="behance" title="behance"
                                        target="_blank"><i class="ui-behance"></i></a> --}}
                                <a href="https://twitter.com/lyceumlife" class="social social-twitter"
                                    aria-label="twitter" title="twitter" target="_blank"><i
                                        class="ui-twitter"></i></a>
                                <a href="https://www.instagram.com/lyceum_official/" class="social social-instagram"
                                    aria-label="instagram" title="instagram" target="_blank"><i
                                        class="ui-instagram"></i></a>
                                {{-- <a href="#" class="social social-google-plus" aria-label="linkedin" title="linkedin"
                                        target="_blank"><i class="ui-linkedin"></i></a> --}}
                                <a href="https://www.facebook.com/lyceuminternationalschools"
                                    class="social social-facebook" aria-label="facebook" title="facebook"
                                    target="_blank"><i class="ui-facebook"></i></a>
                            </div>
                        </div>

                    </nav> <!-- end nav-wrap -->

                    <!-- Socials -->
                    <div class="nav__socials flex-child d-none d-lg-block">
                        <div class="socials right">
                            {{-- <a href="#" class="social social-behance" aria-label="behance" title="behance"
                                        target="_blank"><i class="ui-behance"></i></a> --}}
                            <a href="https://twitter.com/lyceumlife" class="social social-twitter" aria-label="twitter"
                                title="twitter" target="_blank"><i class="ui-twitter"></i></a>
                            <a href="https://www.instagram.com/lyceum_official/" class="social social-instagram"
                                aria-label="instagram" title="instagram" target="_blank"><i
                                    class="ui-instagram"></i></a>
                            {{-- <a href="#" class="social social-google-plus" aria-label="linkedin" title="linkedin"
                                        target="_blank"><i class="ui-linkedin"></i></a> --}}
                            <a href="https://www.facebook.com/lyceuminternationalschools" class="social social-facebook"
                                aria-label="facebook" title="facebook" target="_blank"><i
                                    class="ui-facebook"></i></a>
                        </div>
                    </div>

                </div> <!-- end flex-parent -->
            </div> <!-- end container -->

        </div>
    </header> <!-- end navigation -->

    <main class="main-wrap">

        <div class="content-wrap">

            <!-- Revolution Slider -->
            <section class="p-0">
                <div class="rev_slider_wrapper">
                    <div class="rev_slider" id="slider1" data-version="5.0">
                        <ul>
                            <!-- SLIDE 1 -->
                            <li data-fstransition="fade" data-transition="parallaxtoright" data-easein="default"
                                data-easeout="default" data-slotamount="1" data-masterspeed="1200" data-delay="8000"
                                data-title="The Art of Design">

                                <!-- VIDEO COVER IMAGE -->
                                <img src="videos/lyceum_oceiana_cover.png" alt="" data-bgrepeat="no-repeat"
                                    data-bgfit="cover" data-bgparallax="7" class="rev-slidebg">

                                <!-- BACKGROUND VIDEO LAYER -->
                                <div class="rs-background-video-layer" data-forcerewind="on" data-volume="mute"
                                    data-videowidth="100%" data-videoheight="100%"
                                    data-videomp4="videos/lyceum_oceiana_cover.mp4" data-videopreload="auto"
                                    data-videoloop="loopandnoslidestop" data-forceCover="1" data-aspectratio="16:9"
                                    data-autoplay="true" data-autoplayonlyfirsttime="false"></div>

                                <!-- COLOR OVERLAY -->
                                <div class="tp-caption tp-shape tp-shapewrapper"
                                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                    data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                    data-width="full" data-height="full" data-whitespace="nowrap"
                                    data-transform_idle="o:1;" data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;"
                                    data-transform_out="s:300;s:300;" data-start="200" data-basealign="slide"
                                    data-responsive_offset="on" data-responsive="off"
                                    style="z-index: 1; background-color: rgba(0,0,0,.48);">
                                </div>

                                <!-- HERO TITLE 1 -->
                                {{-- <div class="tp-caption hero-title hero-text-uppercase rs-parallaxlevel-7"
									data-x="left"
									data-y="center"
									data-voffset="[-100, -100, -120, -140]"
									data-hoffset="[30]"
									data-type="text"
									data-lineheight="90"
									data-textAlign="left"
									data-fontsize="[120, 100, 80, 60]"
									data-frames='[{"delay":500,"speed":1000,"sfx_effect":"blockfromleft","sfxcolor":"#ffffff","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 100);bc:rgb(255,255,255);bw:0 0 3px 0;"}]'
									>Digital
								</div> --}}

                                <!-- HERO TITLE 2 -->
                                {{-- <div class="tp-caption hero-title hero-text-stroke hero-text-uppercase rs-parallaxlevel-7"
									data-x="left"
									data-y="center"
									data-voffset="[20, 20, -30, -60]"
									data-hoffset="[30]"
									data-textAlign="left"
									data-lineheight="90"
									data-fontsize="[120, 100, 80, 60]"
									data-frames='[{"delay":600,"speed":1000,"sfx_effect":"blockfromleft","sfxcolor":"#ffffff","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 100);bc:rgb(255,255,255);bw:0 0 3px 0;"}]'
									>Experience
								</div> --}}

                                <!-- BUTTON -->
                                <div class="tp-caption rs-parallaxlevel-3"
                                    data-x="center"
                                    data-y="center"
                                    data-voffset="[160, 160, 160, 160]"
                                    data-hoffset="0"
                                    data-frames='[{"delay":700,"speed":1000,"sfx_effect":"blockfromleft","sfxcolor":"#ffffff",
                                    "frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999",
                                    "to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone",
                                    "to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 100);bc:rgb(255,255,255);bw:0 0 3px 0;"}]'
                                    style="z-index: 12; max-width: auto; max-height: auto; white-space: nowrap;">
                                    <a href='#' class='btn btn--lg btn--color'>Learn More</a>
                                </div>

                            </li> <!-- end slide 1 -->
                        </ul>

                        <div class="local-scroll">
                            <a href="#intro" class="scroll-down">
                                <i class="ui-arrow-scroll-down"></i>
                            </a>
                        </div>

                    </div>
                </div>
            </section>
            <!-- End Revolution Slider -->

            <!-- Intro -->
            <section id="intro" class="intro bg-dark bg-pattern angle angle--top angle--dark">
                <div class="container">
                    <div class="animate">
                        <div class="animate-container">
                            <p class="intro__text text-center">Lyceum International Schools extend their wings to
                                Australia with an innovative project, 'Lyceum Oceania'. This project aims at educating
                                Sri Lankan children live in Australia on culture, tradition and language of Sri Lanka.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end intro -->

            <!-- Service Boxes -->
            <section id="services" class="pb-72">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="title-row animate">
                                <div class="animate-container">
                                    <h3 class="section-subtitle section-subtitle--line">Our Strengths</h3>
                                    <h2 class="section-title">Why Choose Us?</h2>
                                    <p class="section-description">Spread our wings into Oceania to empower the cultural
                                        values among the Sri Lankan communities.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 offset-lg-1">
                            <div class="animate">
                                <div class="animate-container">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="service">
                                                <i class="service__icon o-edit-window-1"></i>
                                                <h4 class="service__title">Online Lessons</h4>
                                                <p class="service__text">Participate in online lessons with
                                                    professional, well-trained teachers from Lyceum International
                                                    Schools.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="service">
                                                <i class="service__icon o-source-code-1"></i>
                                                <h4 class="service__title">Service Values</h4>
                                                <p class="service__text">Develop an interest in Sri Lanka culture
                                                    through rewarding educational experiences.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="service">
                                                <i class="service__icon o-call-contact-1"></i>
                                                <h4 class="service__title">Reputed Brand in Sri Lanka</h4>
                                                <p class="service__text">Connect with the highly reputed Lyceum
                                                    International Schools network.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="service">
                                                <i class="service__icon o-strategy-1"></i>
                                                <h4 class="service__title">Excellence in Teaching</h4>
                                                <p class="service__text">Best practices in teaching are utilized to
                                                    develop the skills necessary for success in university, workplace
                                                    and beyond.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <!-- end service boxes -->

            <!-- Results -->
            <section class="section-results bg-gradient-bottom"
                style="background-image: url('img/results/results2.jpg');">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 results-col">
                            <div class="results">
                                <div class="results__counter">
                                    <span class="results__number" data-from="0" data-to="8">8</span>
                                </div>
                                <p class="results__text">Branches around Sri Lanka to connect with the highly reputed
                                    group
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 results-col">
                            <div class="results">
                                <div class="results__counter">
                                    <span class="results__number" data-from="0" data-to="27">27</span>
                                    {{-- <span class="results__suffix">%</span> --}}
                                </div>
                                <p class="results__text">Years of experience with best practices in teaching</p>
                            </div>
                        </div>
                        <div class="col-lg-3 results-col">
                            <div class="results">
                                <div class="results__counter">
                                    <span class="results__number" data-from="0" data-to="2083">2083</span>
                                </div>
                                <p class="results__text">Professional, well-trained and self motivated teachers around
                                    Sri Lanka</p>
                            </div>
                        </div>
                        <div class="col-lg-3 results-col">
                            <div class="results">
                                <div class="results__counter">
                                    <span class="results__number" data-from="0" data-to="20154">20154</span>
                                    {{-- <span class="results__suffix">K</span> --}}
                                </div>
                                <p class="results__text">plenty of smart and motivated students around the Sri Lanka.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end results -->

            <!-- About -->
            <section class="section-about pb-72 bg-light" id="about">
                <div class="about">
                    <div class="about__holder">

                        <figure class="about__img-holder">
                            <div class="animate">
                                <div class="animate-container">
                                    <img src="img/about/about-min.jpg" alt="about us">
                                    <a href="https://www.youtube.com/watch?v=2GdzNhSB6-0"
                                        class="play-btn icon-wave single-video-lightbox mfp-iframe"
                                        data-effect="mfp-zoom-in">
                                    </a>
                                </div>
                            </div>
                        </figure>

                        <div class="about__info">
                            <div class="animate">
                                <div class="animate-container">
                                    <div class="title-row mb-40">
                                        <h3 class="section-subtitle section-subtitle--line">About</h3>
                                        <h2 class="section-title">Award-Winning
                                            Business Startup</h2>
                                        <p class="section-description">We want to tell your brand’s story with
                                            quality content that will help you inspire.</p>
                                    </div>

                                    <!-- Accordion -->
                                    <div id="accordion-1">

                                        <div class="accordion">
                                            <div class="accordion__panel">
                                                <div class="accordion__heading" id="heading-1">
                                                    <a data-toggle="collapse" href="#collapse-1"
                                                        class="accordion__link accordion--is-open" aria-expanded="true"
                                                        aria-controls="collapse-1">
                                                        <span class="accordion__toggle"></span>
                                                        <h4 class="accordion__title">Who we are</h4>
                                                    </a>
                                                </div>
                                                <div id="collapse-1" class="collapse show" data-parent="#accordion-1"
                                                    role="tabpanel" aria-labelledby="heading-1">
                                                    <div class="accordion__body">
                                                        <p>
                                                            We are passionate about creating and delivering high quality
                                                            work, meeting the business needs of our clients and ensuring
                                                            the very best user experience for their customers.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion">
                                            <div class="accordion__panel">
                                                <div class="accordion__heading" id="heading-2">
                                                    <a data-toggle="collapse" href="#collapse-2"
                                                        class="accordion__link" aria-expanded="true"
                                                        aria-controls="collapse-2">
                                                        <span class="accordion__toggle"></span>
                                                        <h4 class="accordion__title">Our philosophy</h4>
                                                    </a>
                                                </div>
                                                <div id="collapse-2" class="collapse" data-parent="#accordion-1"
                                                    role="tabpanel" aria-labelledby="heading-2">
                                                    <div class="accordion__body">
                                                        <p>
                                                            We are passionate about creating and delivering high quality
                                                            work, meeting the business needs of our clients and ensuring
                                                            the very best user experience for their customers.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion">
                                            <div class="accordion__panel">
                                                <div class="accordion__heading" id="heading-3">
                                                    <a data-toggle="collapse" href="#collapse-3"
                                                        class="accordion__link" aria-expanded="true"
                                                        aria-controls="collapse-3">
                                                        <span class="accordion__toggle"></span>
                                                        <h4 class="accordion__title">How we work</h4>
                                                    </a>
                                                </div>
                                                <div id="collapse-3" class="collapse" data-parent="#accordion-1"
                                                    role="tabpanel" aria-labelledby="heading-3">
                                                    <div class="accordion__body">
                                                        <p>
                                                            We are passionate about creating and delivering high quality
                                                            work, meeting the business needs of our clients and ensuring
                                                            the very best user experience for their customers.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div> <!-- end accordion -->

                                </div>
                            </div>
                        </div> <!-- end about__info -->

                    </div>
                </div>
            </section>
            <!-- end about -->

            <!-- Works -->
            <section class="section-works bg-light pt-72" id="works">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="title-row text-center">
                                <h2 class="section-title">Learning Strategies </h2>
                                <p class="section-description">Learn more about the tropical paradise of Sri Lanka and
                                    its nature, culture, Heritage, and languages</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project Slider -->
                <div class="projects-slider">
                    <div class="flickity-slide">
                        <article class="project project-slide hover-shrink">
                            <a href="#" class="project__url">
                                <figure class="project__img-holder hover-shrink--shrink">
                                    <img src="img/works/1.jpg" class="project__img hover-shrink--zoom" alt="project 1">
                                </figure>
                            </a>
                            <div class="project__description-wrap">
                                <div class="project__description">
                                    <h3 class="project__title"><a href="single-project.html">Nature</a></h3>
                                    <span class="project__category">Learn more about the tropical paradise of Sri Lanka
                                        and its natural wonders</span>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="flickity-slide">
                        <article class="project project-slide hover-shrink">
                            <a href="#" class="project__url">
                                <figure class="project__img-holder hover-shrink--shrink">
                                    <img src="img/works/2.jpg" class="project__img hover-shrink--zoom" alt="project 2">
                                </figure>
                            </a>
                            <div class="project__description-wrap">
                                <div class="project__description">
                                    <h3 class="project__title"><a href="single-project.html">Culture</a></h3>
                                    <span class="project__category">Gain insight into the unique aspects of Sri Lankan
                                        culture </span>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="flickity-slide">
                        <article class="project project-slide hover-shrink">
                            <a href="#" class="project__url">
                                <figure class="project__img-holder hover-shrink--shrink">
                                    <img src="img/works/3.jpg" class="project__img hover-shrink--zoom" alt="project 3">
                                </figure>
                            </a>
                            <div class="project__description-wrap">
                                <div class="project__description">
                                    <h3 class="project__title"><a href="single-project.html">Heritage</a>
                                    </h3>
                                    <span class="project__category">Understand the roots of Sri Lanka by exploring the
                                        past.
                                    </span>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="flickity-slide">
                        <article class="project project-slide hover-shrink">
                            <a href="#" class="project__url">
                                <figure class="project__img-holder hover-shrink--shrink">
                                    <img src="img/works/4.jpg" class="project__img hover-shrink--zoom" alt="project 4">
                                </figure>
                            </a>
                            <div class="project__description-wrap">
                                <div class="project__description">
                                    <h3 class="project__title"><a href="single-project.html">Language</a></h3>
                                    <span class="project__category">Learn to read, write and speak Sinhala through
                                        engaging online classes</span>
                                </div>
                            </div>
                        </article>
                    </div>
                </div> <!-- end slick-works-slider -->

                <div class="text-center mt-40">
                    <a href="single-project.html" class="btn btn--lg btn--stroke"><span>View Works</span></a>
                </div>

            </section>
            <!-- end works -->

            <!-- Team -->
            {{-- <section class="section-team">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="title-row">
                                <h3 class="section-subtitle section-subtitle--line">Meet Our Team</h3>
                                <h2 class="section-title">A Team Of
                                    Passionate People</h2>
                            </div>
                        </div>
                        <div class="col-lg-6 offset-lg-2">
                            <p class="section-description mt-32">We are passionate about creating and delivering high
                                quality work, meeting the business needs of our clients
                                and ensuring the very best user experience.</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="animate">
                                <div class="animate-container">
                                    <div class="team">
                                        <img src="img/team/team_1.jpg" alt="team 1" class="team__img">
                                        <h4 class="team__name">Carl Robertson</h4>
                                        <span class="team__position">CEO / Founder</span>
                                        <div class="socials socials--rounded mt-16">
                                            <a href="#" class="social social-twitter" aria-label="twitter"
                                                title="twitter" target="_blank"><i class="ui-twitter"></i></a>
                                            <a href="#" class="social social-facebook" aria-label="facebook"
                                                title="facebook" target="_blank"><i class="ui-facebook"></i></a>
                                            <a href="#" class="social social-google-plus" aria-label="linkedin"
                                                title="linkedin" target="_blank"><i class="ui-linkedin"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="animate">
                                <div class="animate-container">
                                    <div class="team">
                                        <img src="img/team/team_2.jpg" alt="team 2" class="team__img">
                                        <h4 class="team__name">Chloe Kent</h4>
                                        <span class="team__position">Designer</span>
                                        <div class="socials socials--rounded mt-16">
                                            <a href="#" class="social social-twitter" aria-label="twitter"
                                                title="twitter" target="_blank"><i class="ui-twitter"></i></a>
                                            <a href="#" class="social social-facebook" aria-label="facebook"
                                                title="facebook" target="_blank"><i class="ui-facebook"></i></a>
                                            <a href="#" class="social social-google-plus" aria-label="linkedin"
                                                title="linkedin" target="_blank"><i class="ui-linkedin"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="animate">
                                <div class="animate-container">
                                    <div class="team">
                                        <img src="img/team/team_3.jpg" alt="team 3" class="team__img">
                                        <h4 class="team__name">Alaina Green</h4>
                                        <span class="team__position">Project Manager</span>
                                        <div class="socials socials--rounded mt-16">
                                            <a href="#" class="social social-twitter" aria-label="twitter"
                                                title="twitter" target="_blank"><i class="ui-twitter"></i></a>
                                            <a href="#" class="social social-facebook" aria-label="facebook"
                                                title="facebook" target="_blank"><i class="ui-facebook"></i></a>
                                            <a href="#" class="social social-google-plus" aria-label="linkedin"
                                                title="linkedin" target="_blank"><i class="ui-linkedin"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section> --}}
            <!-- end team -->

            <!-- Testimonials -->
            {{-- <section class="section-testimonials section-testimonials--large-padding bg-overlay"
                style="background-image: url('img/testimonials/testimonials-min.jpg');">
                <div class="container">

                    <div class="row justify-content-center mb-40">
                        <div class="col-lg-7">
                            <div class="title-row text-center">
                                <h2 class="section-title">Here's What Our Customers Say</h2>
                            </div>
                        </div>
                    </div>

                    <div class="row row-80">
                        <div class="col-lg-6">
                            <div class="animate">
                                <div class="animate-container">
                                    <div class="testimonial mb-md-40">
                                        <img src="img/testimonials/testimonial_1.png" class="testimonial__img"
                                            alt="testimonial_1">
                                        <div class="testimonial__body">
                                            <p class="testimonial__text">“I’am amazed, I should say thank you so much
                                                for
                                                your awesome template. Design is so good and neat
                                                every detail has been taken care these team are,
                                                realy amazing and talented! I will work only with
                                                Radium agency.”</p>
                                            <span class="testimonial__name">John Marshal</span>
                                            <span class="testimonial__company">Entrepreneur</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="animate">
                                <div class="animate-container">
                                    <div class="testimonial">
                                        <img src="img/testimonials/testimonial_2.png" class="testimonial__img"
                                            alt="testimonial_2">
                                        <div class="testimonial__body">
                                            <p class="testimonial__text">“I’am amazed, I should say thank you so much
                                                for
                                                your awesome template. Design is so good and neat
                                                every detail has been taken care these team are,
                                                realy amazing and talented! I will work only with
                                                Radium agency.”</p>
                                            <span class="testimonial__name">Christina Green</span>
                                            <span class="testimonial__company">Entrepreneur</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section> --}}
            <!-- end testimonials -->

            <!-- Clients -->
            {{-- <section style="padding: 70px 0px !important" class="section-clients bg-light angle angle--light angle--top"
                id="clients">
                <div class="container">

                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="title-row text-center">
                                <h2 class="section-title">Our Clients</h2>
                                <p class="section-description">Don't just take our word for it</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4 client-logo">
                            <a href="#">
                                <img src="img/clients/client_logo_1.png" alt="">
                            </a>
                        </div>
                        <div class="col-sm-4 client-logo">
                            <a href="#">
                                <img src="img/clients/client_logo_2.png" alt="">
                            </a>
                        </div>
                        <div class="col-sm-4 client-logo">
                            <a href="#">
                                <img src="img/clients/client_logo_3.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="row clients-second-row">
                        <div class="col-sm-4 client-logo">
                            <a href="#">
                                <img src="img/clients/client_logo_4.png" alt="">
                            </a>
                        </div>
                        <div class="col-sm-4 client-logo">
                            <a href="#">
                                <img src="img/clients/client_logo_5.png" alt="">
                            </a>
                        </div>
                        <div class="col-sm-4 client-logo">
                            <a href="#">
                                <img src="img/clients/client_logo_6.png" alt="">
                            </a>
                        </div>
                    </div>

                </div>
            </section> --}}
            <!-- end clients -->

            <!-- From Blog -->
            {{-- <section class="section-from-blog pb-96" id="blog">
                <div class="container">

                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="title-row text-center">
                                <h2 class="section-title">Latest Thoughts</h2>
                                <p class="section-description">Design is so simple and relevant works.
                                    why it's so complicated.</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="animate">
                                <div class="animate-container">
                                    <article class="entry" itemscope itemtype="http://schema.org/Article">
                                        <div class="entry__header hover-shrink">
                                            <a href="single-post.html" class="entry__img-url hover-shrink--shrink">
                                                <img src="img/blog/blog_preview_1.jpg"
                                                    class="entry__img hover-shrink--zoom" itemprop="image" alt="">
                                            </a>
                                        </div>
                                        <div class="entry__body">
                                            <div class="entry__meta">
                                                <span class="entry__meta-item entry__meta-date" itemprop="datePublished"
                                                    content="2019-11-13">11/13/2019</span>
                                                <span class="entry__meta-item entry__meta-category">
                                                    <span>in </span>
                                                    <a href="#" class="entry__meta-category-url">Business</a>
                                                </span>
                                            </div>
                                            <h4 class="entry__title title-underline">
                                                <a href="single-post.html" itemprop="headline">Business Mistakes to
                                                    Avoid When Starting a Business</a>
                                            </h4>
                                            <div class="entry__meta">
                                                <span class="entry__meta-item entry__meta-author">
                                                    <span>by</span>
                                                    <a href="#" class="entry__meta-author-url">
                                                        <span class="entry__meta-author-name" itemprop="author">Camille
                                                            Alforque</span>
                                                    </a>
                                                </span>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="animate">
                                <div class="animate-container">
                                    <article class="entry" itemscope itemtype="http://schema.org/Article">
                                        <div class="entry__header hover-shrink">
                                            <a href="single-post.html" class="entry__img-url hover-shrink--shrink">
                                                <img src="img/blog/blog_preview_2.jpg"
                                                    class="entry__img hover-shrink--zoom" itemprop="image" alt="">
                                            </a>
                                        </div>
                                        <div class="entry__body">
                                            <div class="entry__meta">
                                                <span class="entry__meta-item entry__meta-date" itemprop="datePublished"
                                                    content="2019-11-13">11/13/2019</span>
                                                <span class="entry__meta-item entry__meta-category">
                                                    <span>in </span>
                                                    <a href="#" class="entry__meta-category-url">Innovation</a>
                                                </span>
                                            </div>
                                            <h4 class="entry__title title-underline">
                                                <a href="single-post.html" itemprop="headline">The Hyper Flexible
                                                    Seamlessly Connected Modern Working</a>
                                            </h4>
                                            <div class="entry__meta">
                                                <span class="entry__meta-item entry__meta-author">
                                                    <span>by</span>
                                                    <a href="#" class="entry__meta-author-url">
                                                        <span class="entry__meta-author-name" itemprop="author">Camille
                                                            Alforque</span>
                                                    </a>
                                                </span>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="animate">
                                <div class="animate-container">
                                    <article class="entry" itemscope itemtype="http://schema.org/Article">
                                        <div class="entry__header hover-shrink">
                                            <a href="single-post.html" class="entry__img-url hover-shrink--shrink">
                                                <img src="img/blog/blog_preview_3.jpg"
                                                    class="entry__img hover-shrink--zoom" itemprop="image" alt="">
                                            </a>
                                        </div>
                                        <div class="entry__body">
                                            <div class="entry__meta">
                                                <span class="entry__meta-item entry__meta-date" itemprop="datePublished"
                                                    content="2019-11-13">11/13/2019</span>
                                                <span class="entry__meta-item entry__meta-category">
                                                    <span>in </span>
                                                    <a href="#" class="entry__meta-category-url">Productivity</a>
                                                </span>
                                            </div>
                                            <h4 class="entry__title title-underline">
                                                <a href="single-post.html" itemprop="headline">Are you a design
                                                    superstar-in-the-making?</a>
                                            </h4>
                                            <div class="entry__meta">
                                                <span class="entry__meta-item entry__meta-author">
                                                    <span>by</span>
                                                    <a href="#" class="entry__meta-author-url">
                                                        <span class="entry__meta-author-name" itemprop="author">Camille
                                                            Alforque</span>
                                                    </a>
                                                </span>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section> --}}
            <!-- end from blog -->

        </div>
        <!-- end content wrap -->

        <!-- Footer -->
        <footer class="footer bg-dark bg-pattern" itemtype="http://schema.org/WPFooter" itemscope>
            <div class="container">
                <div class="footer__widgets">
                    <div class="row">

                        <div class="col-lg-4 col-md-6">
                            <div class="widget widget-about-us">
                                <span class="widget-about-us__text">We’d love to hear from you</span>
                                <a href="mailto:hello@jueveagency.com"
                                    class="widget-about-us__email">info@lyceum.lk</a>
                                <a href="tel:021-5395-6573" class="widget-about-us__phone">+9477 0478054</a>
                                <div class="socials mt-32">
                                    {{-- <a href="#" class="social social-behance" aria-label="behance" title="behance"
                                        target="_blank"><i class="ui-behance"></i></a> --}}
                                    <a href="https://twitter.com/lyceumlife" class="social social-twitter"
                                        aria-label="twitter" title="twitter" target="_blank"><i
                                            class="ui-twitter"></i></a>
                                    <a href="https://www.instagram.com/lyceum_official/"
                                        class="social social-instagram" aria-label="instagram" title="instagram"
                                        target="_blank"><i class="ui-instagram"></i></a>
                                    {{-- <a href="#" class="social social-google-plus" aria-label="linkedin" title="linkedin"
                                        target="_blank"><i class="ui-linkedin"></i></a> --}}
                                    <a href="https://www.facebook.com/lyceuminternationalschools"
                                        class="social social-facebook" aria-label="facebook" title="facebook"
                                        target="_blank"><i class="ui-facebook"></i></a>
                                </div>
                            </div>
                        </div> <!-- end about us -->


                        <div class="col-lg-4 col-md-6">
                            <div class="widget text-center text-md-left">
                                <h3 class="widget-cta__title white mb-32">Got a project in mind?</h3>
                                <a href="#" class="btn btn--lg btn--stroke contact-form-trigger" data-toggle="modal"
                                    data-target="#contact-form-modal">
                                    <span>let us know</span>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="widget widget-address">
                                <address class="widget-address__address"> 3/1, Raymond Road,<br>
                                    Nugegoda,<br>
                                    Sri Lanka.</address>
                                <a target="_blank" href="https://goo.gl/maps/wDt1WSzT7Upp7J6E8"
                                    class="widget-address__url" target="_self">Get Directions</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div> <!-- end container -->

            <div class="footer__bottom">
                <div class="container">
                    <div class="copyright-wrap text-center">
                        <span class="copyright">
                            &copy; 2021 Lyceum International Schools All Rights Reserved. Concept Designed and
                            Developed by Lyceum Web Development Department.
                        </span>
                    </div>
                </div>
            </div> <!-- end footer bottom -->
        </footer> <!-- end footer -->

        <div class="footer-placeholder" id="contact"></div>

        <!-- Contact Form -->
        <div class="modal fade contact-form-modal" id="contact-form-modal" role="dialog"
            aria-label="Contact Form Modal" aria-hidden="true">
            <div class="modal-dialog contact-form-modal__dialog" role="document">
                <div class="modal-content contact-form-modal__content">

                    <button type="button" class="close contact-form-modal__close" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>

                    <div class="modal-body contact-form-modal__body">
                        <form id="contact-form" class="contact-form" action="#">
                            <div class="row row-16">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="name">Name<abbr>*</abbr></label>
                                        <input type="text" name="NAME" id="name" required="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="email">Email<abbr>*</abbr></label>
                                        <input type="email" name="EMAIL" id="email" required="">
                                    </div>
                                </div>
                            </div>

                            <label for="message">Message<abbr>*</abbr></label>
                            <textarea name="MESSAGE" id="message" rows="6"></textarea>
                            <div class="gdpr-checkbox">
                                <label class="gdpr-checkbox__label">
                                    <input class="gdpr-checkbox__input" name="AGREE_TO_TERMS" type="checkbox" value="1"
                                        required="">
                                    <span class="gdpr-checkbox__text">I agree to storage of my email according to <a
                                            href="#" target="_blank">Privacy Policy</a>
                                    </span>
                                </label>
                            </div>
                            <div class="text-center">
                                <input id="contact-form__submit" type="submit" class="btn btn--lg btn--color"
                                    value="Send Message">
                            </div>

                            <div id="contact-form__message" class="contact-form__message" role="alert"></div>

                        </form>
                    </div>
                </div>
            </div>
        </div> <!-- end contact form -->

        <div id="back-to-top">
            <a href="#top"><i class="ui-arrow-up"></i></a>
        </div>

        <div id="back-to-top">
            <a class="btn btn--lg btn--stroke backTop-btn" target="_blank" href="https://lyceum.lk/"></i>Apply Now</a>
        </div>
    </main> <!-- end main wrapper -->

    <!-- jQuery Scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/scripts.min.js"></script>

    <!-- Revolution Slider Addons -->

    <!-- DISTORTION ADD-ON FILES -->
    <link rel='stylesheet' href='revolution-addons/distortion/css/distortion.css' type='text/css' media='all' />
    <script type='text/javascript' src='revolution-addons/distortion/js/pixi.min.js'></script>
    <script type='text/javascript' src='revolution-addons/distortion/js/revolution.addon.distortion.min.js'></script>


    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {

            $('.projects-slider').flickity({
                cellAlign: 'center',
                contain: true,
                wrapAround: true,
                autoPlay: true,
                prevNextButtons: true,
                percentPosition: true,
                imagesLoaded: true,
                lazyLoad: 1,
                pageDots: false,
                selectedAttraction: 0.1,
                friction: 0.6,
                rightToLeft: false,
                arrowShape: 'M 30,50 L 55,75 L 60,70 L 40,50  L 60,30 L 55,25 Z',

            });

            $(function() {
                var logo = $(".lg-logo");
                $(window).scroll(function() {
                    var scroll = $(window).scrollTop();

                    if (scroll >= 250) {
                        if (!logo.hasClass("sm-logo")) {
                            logo.hide();
                            logo.removeClass('lg-logo').addClass("sm-logo").fadeToggle("slow");
                        }
                    } else {
                        if (!logo.hasClass("lg-logo")) {
                            logo.hide();
                            logo.removeClass("sm-logo").addClass('lg-logo').fadeToggle("slow");
                        }
                    }

                });
            });
        });
    </script>

</body>

</html>

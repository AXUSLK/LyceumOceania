<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lyceum Oceania | Develop an interest in Sri Lanka culture through rewarding educational experiences</title>

    @include('layouts.header-links')

</head>

<body data-spy="scroll" data-offset="60" data-target=".nav__holder" data-cookie="on" id="home" itemscope
    itemtype="http://schema.org/WebPage">

    @include('layouts.nav')

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
                                <div class="tp-caption rs-parallaxlevel-3" data-x="center" data-y="center"
                                    data-voffset="[160, 160, 160, 160]" data-hoffset="0"
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
                                                <p class="service__text">You are connect with the highly reputed Lyceum
                                                    International Schools network.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="service">
                                                <i class="service__icon o-strategy-1"></i>
                                                <h4 class="service__title">Excellence in Teaching</h4>
                                                <p class="service__text">Best practices in teaching are utilized to
                                                    develop the skills for success in university, workplace
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
                                                    <a data-toggle="collapse" href="#collapse-2" class="accordion__link"
                                                        aria-expanded="true" aria-controls="collapse-2">
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
                            <a t href="/sri-lanka-culture" class="project__url">
                                <figure class="project__img-holder hover-shrink--shrink">
                                    <img src="img/works/2.jpg" class="project__img hover-shrink--zoom" alt="project 2">
                                </figure>
                            </a>
                            <div class="project__description-wrap">
                                <div class="project__description">
                                    <h3 class="project__title"><a href="/sri-lankan-culture">Culture</a></h3>
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
        @include('layouts.footer')
        <!-- end footer -->

    </main> <!-- end main wrapper -->

    @include('layouts.footer-links')

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

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lyceum Oceania | Develop an interest in Sri Lanka culture through rewarding educational experiences</title>

    @include('layouts.header')

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

    @include('layouts.nav')

    <main class="main-wrap">

        <div class="content-wrap">






            

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

    @include('layouts.footer')

    <script type="text/javascript">
        $(document).ready(function() {

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
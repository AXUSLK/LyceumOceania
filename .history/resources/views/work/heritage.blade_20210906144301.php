<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lyceum Oceania | Develop an interest in Sri Lanka culture through rewarding educational experiences</title>

    @include('layouts.header-links')

    <style type="text/css">


    </style>

</head>


<body data-spy="scroll" data-offset="60" data-target=".nav__holder" data-cookie="on" id="home" itemscope
    itemtype="http://schema.org/WebPage">

    @include('layouts.nav')

    <main class="main-wrap">

        <div class="content-wrap">

            <!-- Project Hero -->
            <div class="project__hero bg-overlay bg-overlay--light">
                <figure class="project__hero-img-holder" style="background-image: url(img/works/details/3.jpg);">
                    <img src="img/works/details/3.jpg" alt="" class="d-none">
                </figure>
                <div class="container">

                    <div class="project__hero-info">
                        <h1 class="project__hero-title">Sri Lankan Nature</h1>
                        <p class="project__hero-description">Learn more about the tropical paradise of Sri Lanka and its
                            natural wonders.</p>
                    </div>
                </div>
            </div> <!-- end project hero -->

            <!-- Project Info -->
            <section class="section-project-info pb-96">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8">
                            <h2 class="project__info-title">Sri Lankan Nature</h2>
                            <p class="project__info-description lead">A place like no other, Sri Lanka's scenic
                                landscapes, green acres of tea estates are breathtakingly beautiful sights. The island's
                                tropical jungles are also rich with species of wildlife, birds, reptiles and insects
                                that share natural habitats. Truly a haven for those who appreciate nature, from diverse
                                habitats alive with flora and fauna to beautiful beaches and waterfalls in the misty
                                mountains, Sri Lanka is undoubtedly a paradise where nature defines beauty.</p>
                        </div>

                    </div>
                </div>
            </section> <!-- end project info -->

            <!-- Project Image Full -->
            <section class="section-project-image-full pt-0">
                <div class="project__image-full">
                    <div class="animate">
                        <div class="animate-container">
                            <img src="img/works//details/3.jpg" alt="">
                        </div>
                    </div>
                </div>
            </section> <!-- end project image full -->

        </div> <!-- end content wrap -->

        <!-- Footer -->
        @include('layouts.footer')
        <!-- end footer -->

    </main> <!-- end main wrapper -->

    @include('layouts.footer-links')

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

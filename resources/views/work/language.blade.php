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

    @include('layouts.nav1')

    <main class="main-wrap">

        <div class="content-wrap">

            <!-- Project Hero -->
            <div class="project__hero bg-overlay bg-overlay--light">
                <figure class="project__hero-img-holder" style="background-image: url(img/works/details/7.jpg);">
                    <img src="img/works/details/7.jpg" alt="" class="d-none">
                </figure>
                <div class="container">

                    <div class="project__hero-info">
                        <h1 class="project__hero-title">Sri Lankan Language</h1>
                        <p class="project__hero-description">Learn to read, write and speak Sinhala through engaging
                            online classes.</p>
                    </div>
                </div>
            </div> <!-- end project hero -->

            <!-- Project Info -->
            <section class="section-project-info pb-96">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8">
                            <h2 class="project__info-title">Sri Lankan Language</h2>
                            <p class="project__info-description lead">One of Sri Lanka's national languages, Sinhala is
                                spoken by about 75% of the population. Lyceum Oceania strongly emphasises helping
                                children living outside Sri Lanka improve their fluency in reading, writing and speaking
                                in Sinhala, helping them connect with their roots and include Sri Lankan culture as part
                                of their identity.</p>
                        </div>

                    </div>
                </div>
            </section> <!-- end project info -->

            <!-- Project Image Full -->
            <section class="section-project-image-full pt-0">
                <div class="project__image-full">
                    <div class="animate">
                        <div class="animate-container">
                            <img src="img/works//details/8.jpg" alt="">
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

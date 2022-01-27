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
                <figure class="project__hero-img-holder" style="background-image: url(img/works/details/1.jpg);">
                    <img src="img/works/details/1.jpg" alt="" class="d-none">
                </figure>
                <div class="container">

                    <div class="project__hero-info">
                        <h1 class="project__hero-title">Sri Lankan Nature</h1>
                        <p class="project__hero-description">TLearn more about the tropical paradise of Sri Lanka and its
                            natural wonders.</p>
                    </div>
                </div>
            </div> <!-- end project hero -->

            <!-- Project Info -->
            <section class="section-project-info pb-96">
                <div class="container">
                    <div class="row">

                        <aside class="col-lg-4">
                            <div class="project__info">
                                <ul class="project__info-list">
                                    <li class="project__info-list-item">
                                        <span class="project__info-list-label">Client</span>
                                        <span class="project__info-list-title">Envato</span>
                                    </li>
                                    <li class="project__info-list-item">
                                        <span class="project__info-list-label">Category</span>
                                        <span class="project__info-list-title">Product Design</span>
                                    </li>
                                    <li class="project__info-list-item">
                                        <span class="project__info-list-label">Duration</span>
                                        <span class="project__info-list-title">4 months</span>
                                    </li>
                                    <li class="project__info-list-item">
                                        <span class="project__info-list-label">Website</span>
                                        <a href="#" class="project__info-list-title">webjulios</a>
                                    </li>
                                    <li class="project__info-list-item">
                                        <span class="project__info-list-label">Share</span>
                                        <div class="socials">
                                            <a href="#" class="social social-behance" aria-label="behance"
                                                title="behance" target="_blank"><i class="ui-behance"></i></a>
                                            <a href="#" class="social social-twitter" aria-label="twitter"
                                                title="twitter" target="_blank"><i class="ui-twitter"></i></a>
                                            <a href="#" class="social social-linkedin" aria-label="linkedin"
                                                title="linkedin" target="_blank"><i class="ui-linkedin"></i></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </aside>

                        <div class="col-lg-8">
                            <h2 class="project__info-title">A better looking approach</h2>
                            <p class="project__info-description lead">The designers decide on committing to the project
                                and finding a solution to the problem. They pool their resources into figuring out. A
                                creative and
                                digital agency that specialises in branded services, digital experiences and campaigns.
                                Our team hand picked to provide the right balance of skills to work.</p>
                            <p class="project__info-description lead">They pool their resources into figuring out. A
                                creative and digital agency that specialises in branded services, digital experiences
                                and campaigns. Our team hand picked to provide the right balance of skills to work. The
                                designers decide on committing to the project and finding a solution to the problem.
                                They pool their resources into
                                figuring out.</p>
                        </div>

                    </div>
                </div>
            </section> <!-- end project info -->

            <!-- Project Image Full -->
            <section class="section-project-image-full pt-0">
                <div class="project__image-full">
                    <div class="animate">
                        <div class="animate-container">
                            <img src="img/works//details/2.jpg" alt="">
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

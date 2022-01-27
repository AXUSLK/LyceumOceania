<footer class="footer bg-dark bg-pattern" itemtype="http://schema.org/WPFooter" itemscope>
    <div class="container">
        <div class="footer__widgets">
            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <div class="widget widget-about-us">
                        <span class="widget-about-us__text">We’d love to hear from you</span>
                        <a href="mailto:hello@jueveagency.com" class="widget-about-us__email">info@lyceum.lk</a>
                        <a href="tel:021-5395-6573" class="widget-about-us__phone">+9477 0478054</a>
                        <div class="socials mt-32">
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
                        <a target="_blank" href="https://goo.gl/maps/wDt1WSzT7Upp7J6E8" class="widget-address__url"
                            target="_self">Get Directions</a>
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
<div class="modal fade contact-form-modal" id="contact-form-modal" role="dialog" aria-label="Contact Form Modal"
    aria-hidden="true">
    <div class="modal-dialog contact-form-modal__dialog" role="document">
        <div class="modal-content contact-form-modal__content">

            <button type="button" class="close contact-form-modal__close" data-dismiss="modal" aria-label="Close">
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
                            <span class="gdpr-checkbox__text">I agree to storage of my email according to <a href="#"
                                    target="_blank">Privacy Policy</a>
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

<script type="text/javascript">
    $(document).ready(function() {
        var message = $('#contact-form__message');
        var url = '/contact-us';

        $('#contact-form__submit').on('click', function(e) {
            e.preventDefault();

            var $this = $(this);

            $.ajax({
                type: "POST",
                url: url,
                dataType: 'json',
                cache: false,
                data: $('#contact-form').serialize(),
                success: function(data) {

                    if (data.info !== 'error') {
                        $this.parents('form').find(
                                'input[type=text],input[type=email],textarea,select')
                            .filter(':visible').val('');
                        message.hide().removeClass('success').removeClass('error').addClass(
                                'success').html(data.msg).fadeIn('slow').delay(5000)
                            .fadeOut('slow');
                    } else {
                        message.hide().removeClass('success').removeClass('error').addClass(
                            'error').html(data.msg).fadeIn('slow').delay(5000).fadeOut(
                            'slow');
                    }
                }
            });
        });

    });
</script>

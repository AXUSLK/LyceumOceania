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

            $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

            var message = $('#contact-form__message');

            $('#contact-form__submit___new').on('click', function(e) {
                e.preventDefault();

                var $this = $(this);
                var url = '/contact-us';
                var ContactUsData = new FormData();

                let name = $('#name').val();
                let email = $('#email').val();
                let co_message = $('#message').val();
                let terms_agree = $('#terms_agree').val();

                ContactUsData.append('name', name);
                ContactUsData.append('email', email);
                ContactUsData.append('co_message', co_message);
                ContactUsData.append('terms_agree', terms_agree);

                $.ajax({
                    url: url,
                    method: 'post',
                    processData: false,
                    contentType: false,
                    cache: false,
                    async: false,
                    dataType: 'json',
                    data: ContactUsData,
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
                    },

                    error: function() {
                        //alert('There was an error');
                    }
                });

            });

        });
    </script>

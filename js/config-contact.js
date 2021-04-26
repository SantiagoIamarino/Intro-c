
function handleLoading() {
    if($('.page-wrapper').hasClass('animsition-loading')) {
        $('.page-wrapper').removeClass('animsition-loading');
    } else {
        $('.page-wrapper').addClass('animsition-loading');
    }
}

(function ($) {
    // USE STRICT
    "use strict";

    try {

        var contactFormWrapper = $('.js-contact-form');

        contactFormWrapper.each(function () {
           var that = $(this);
            that.on('submit', function (e) {
                var url = "https://www.introarquitectura.com.ar/contact-form.php";
                const data = $(this).serialize() + '&contact=yes';
                handleLoading();

                
                $.ajax({
                    type: "POST",
                    url: url,
                    data,
                    success: function (data)
                    {
                        handleLoading();
                        swal ( "Correcto" ,  "Se ha enviado el correo correctamente!" ,  "success" );
                    },
                    statusCode: {
                        404: function() {
                            swal ( "Oops" ,  "Ha ocurrido un error al enviar el mensaje" ,  "error" );
                        }
                    },
                    error: function (jqXHR, textStatus, errorThrown ) {

                        swal ( "Oops" ,  errorThrown  ,  "error" );
                    }
                });
                return false;
            });
        });

    } catch(err) {
        console.log(err)
    }

})(jQuery);
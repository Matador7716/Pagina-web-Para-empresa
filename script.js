$(document).ready(function() {
    // Form submission
    $('#contactForm').on('submit', function(e) {
        e.preventDefault();

        var formData = $(this).serialize();

        $.ajax({
            type: 'POST',
            url: 'php_logic/contact_process.php',
            data: formData,
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    $('#responseMessage').html('<div class="alert alert-success">' + response.message + '</div>');
                    $('#contactForm')[0].reset();
                } else {
                    $('#responseMessage').html('<div class="alert alert-danger">' + response.message + '</div>');
                }
            },
            error: function() {
                $('#responseMessage').html('<div class="alert alert-danger">Ocurrió un error al procesar el mensaje. Por favor, intenta de nuevo.</div>');
            }
        });
    });

    // Smooth scrolling
    $('a.nav-link, a.btn-primary').on('click', function(event) {
        if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;
            $('html, body').animate({
                scrollTop: $(hash).offset().top - 70
            }, 800);
        }
    });

    // Submenu behavior on hover for desktop
    if ($(window).width() > 991) {
        $('.navbar .dropdown').hover(function() {
            $(this).find('.dropdown-menu').first().stop(true, true).delay(250).slideDown();
        }, function() {
            $(this).find('.dropdown-menu').first().stop(true, true).delay(100).slideUp();
        });
    }
});

$(document).ready(function(){
    // Initialize Slick Slider
    $('.main-slider').slick({
        dots: true,
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear',
        autoplay: true,
        autoplaySpeed: 3000,
        arrows: true
    });

    // Smooth scrolling for nav links
    $('a[href^="#"]').on('click', function(event) {
        var target = $(this.getAttribute('href'));
        if( target.length ) {
            event.preventDefault();
            $('html, body').stop().animate({
                scrollTop: target.offset().top - 80
            }, 1000);
        }
    });

    // Hover effect for service cards
    $('.service-card').hover(
        function() { $(this).css('transform', 'translateY(-10px)'); },
        function() { $(this).css('transform', 'translateY(0)'); }
    );
});

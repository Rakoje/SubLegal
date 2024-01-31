$(document).ready(function() {
    // Add smooth scroll to the top when clicking a link with class "scroll-to-top"
    $('.home-desc').on('click', '.scroll-to-top', function(event) {
        event.preventDefault();
        $('.home-desc').animate({ scrollTop: 0 }, 'slow');
    });
});


$(document).ready(function() {
    // Add smooth scroll to the top when clicking a link with class "scroll-to-top"
    $('.home-desc').on('click', '.scroll-to-top', function(event) {
        event.preventDefault();
        $('.home-desc').animate({ scrollTop: 0 }, 'slow');
    });

    $("#login_submit").click(function(){
        $.ajax({
            url: '../controllers/AdminController.php',
            type: 'POST',
            data: {
                action: "login",
                username: $("#in_username").val(),
                password: $("#in_password").val()
            },
            success: function (response) {
                var data = JSON.parse(response);

                if(data.success){
                    window.location.assign('../admin/new_project.php');
                } else {
                    $("#error-message-login").text(data.error)
                }
            }
        })
    });
});

$(window).scroll(function() {
    if ($(this).scrollTop() > 250) {
        $('.navbar').addClass('scrolled');
    } else {
        $('.navbar').removeClass('scrolled');
    }
});
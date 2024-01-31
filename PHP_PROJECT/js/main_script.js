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
                    alert(data.error);
                }
            }
        })
    });
});

// function loginSubmit(){
//     $.ajax({
//         url: '../controllers/AdminController.php',
//         type: 'POST',
//         data: {
//             action: login,
//             username: $("#in_username").value(),
//             password: $("#in_password").value()
//         },
//         success: function (data) {
//             if(data.success){
//                 window.location.assign('new_project.php');
//             } else {
//                 alert(data.err);
//             }
//         },
//         error: function(err){
//             alert('<?php echo tr("Došlo je do neočekivane greške!") ?>');
//         }
//     });
// }


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

    $("#add_project_submit").click(function(){
        event.preventDefault(); // Prevent the default form submission

        // Create FormData object to handle file uploads
        var formData = new FormData($("#project_form")[0]);

        // Convert the image to base64 and add it to formData
        var inputFile = $("#in_picture")[0];
        var file = inputFile.files[0];
        formData.append("action", "add_project");

        if (file) {
            var reader = new FileReader();
            reader.readAsDataURL(file);

            reader.onload = function (e) {
                formData.append("base64_image", e.target.result);

                // Send AJAX request
                $.ajax({
                    url: '../controllers/AdminController.php',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        $("#success-message-add-project").text("Project added successfully")
                        $("#project_form")[0].reset();
                        $("#in_picture").val('');
                    },
                    error: function (error) {
                        $("#error-message-add-project").text("Database Error!")
                    }
                });
            };
        } else {
            // If no file selected, send AJAX request without the image
            $.ajax({
                url: '../controllers/AdminController.php',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function (response) {
                    // Handle success response from the server
                    console.log(response);
                },
                error: function (error) {
                    // Handle error response from the server
                    console.error(error);
                }
            });
        }

        // var formData = new FormData($("#project_form")[0]);
        //
        // $.ajax({
        //     url: '../controllers/AdminController.php',
        //     type: 'POST',
        //     data: {
        //         action: "add_project",
        //         formData: formData
        //     },
        //     success: function (response) {
        //         var data = JSON.parse(response);
        //
        //         if(data.success){
        //             window.location.assign('../admin/new_project.php');
        //         } else {
        //             $("#error-message-login").text(data.error)
        //         }
        //     }
        // })
    });


});

$(window).scroll(function() {
    if ($(this).scrollTop() > 250) {
        $('.navbar').addClass('scrolled');
    } else {
        $('.navbar').removeClass('scrolled');
    }
});

function navigateToSelectedPage() {
    var selectElement = document.getElementById("page_selector");
    var selectedValue = selectElement.value;

    // Check if a valid option is selected
    if (selectedValue) {
        // Navigate to the selected page
        window.location.href = "../under_construction/under_construction.php";
    }
}
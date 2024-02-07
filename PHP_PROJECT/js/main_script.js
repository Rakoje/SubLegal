$(document).ready(function() {
    // Add smooth scroll to the top when clicking a link with class "scroll-to-top"
    $('.home-desc').on('click', '.scroll-to-top', function (event) {
        event.preventDefault();
        $('.home-desc').animate({scrollTop: 0}, 'slow');
    });

    $("#login_submit").click(function () {
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

                if (data.success) {
                    window.location.assign('../admin/new_project.php');
                } else {
                    $("#error-message-login").text(data.error)
                }
            }
        })
    });

    $("#rs_lang").click(function () {
        $.ajax({
            url: '../controllers/GeneralController.php',
            type: 'POST',
            data: {
                language: "eng",
                action: "changeLanguage"
            },
            success: function (response) {
                $("#eng_lang").show();
                $("#rs_lang").hide();
                location.reload();
            },
            error: function (error) {
                $("#error-message-add-project").text("Database Error!")
            }
        });
    })

    $("#eng_lang").click(function () {
        $.ajax({
            url: '../controllers/GeneralController.php',
            type: 'POST',
            data: {
                language: "eng",
                action: "changeLanguage"
            },
            success: function (response) {
                $("#rs_lang").show();
                $("#eng_lang").hide();
                location.reload();
            },
            error: function (error) {
                $("#error-message-add-project").text("Database Error!")
            }
        });
    })

    $("#add_blog_submit").click(function () {
        event.preventDefault(); // Prevent the default form submission

        // Create FormData object to handle file uploads
        var formData = new FormData($("#blog_form")[0]);

        // Convert the image to base64 and add it to formData
        var inputFile = $("#in_picture_b")[0];
        var file = inputFile.files[0];
        formData.append("action", "add_blog");

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
                        $("#success-message-add-blog").text("Blog added successfully")
                        $("#blog_form")[0].reset();
                        $("#in_picture_b").val('');
                    },
                    error: function (error) {
                        $("#error-message-add-blog").text("Database Error!")
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
    });

    $("#add_project_submit").click(function () {
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
document.addEventListener('DOMContentLoaded', function() {
    const targetDiv = document.getElementById('targetDiv');

    if(targetDiv !== null){
        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('show');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        observer.observe(targetDiv);
    }
});
document.addEventListener('DOMContentLoaded', function() {
    const targetDiv = document.getElementById('targetDiv2');

    if(targetDiv !== null){
        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('show');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        observer.observe(targetDiv);
    }
});

function reChange(element) {
    var image = element.querySelector('img');
    image.src = '../assets/apartment_FILL0_wght400_GRAD200_opsz48 belo.png'; // Replace with the path to the new image
}

function reRestore(element) {
    var image = element.querySelector('img');
    image.src = '../assets/apartment_FILL0_wght400_GRAD200_opsz48.png'; // Replace with the path to the original image
}


function coChange(element) {
    var image = element.querySelector('img');
    image.src = '../assets/account_balance_FILL0_wght400_GRAD200_opsz48 belo.png'; // Replace with the path to the new image
}

function coRestore(element) {
    var image = element.querySelector('img');
    image.src = '../assets/account_balance_FILL0_wght400_GRAD200_opsz48.png'; // Replace with the path to the original image
}


function taxChange(element) {
    var image = element.querySelector('img');
    image.src = '../assets/balance_FILL0_wght400_GRAD200_opsz48 belo.png'; // Replace with the path to the new image
}

function taxRestore(element) {
    var image = element.querySelector('img');
    image.src = '../assets/balance_FILL0_wght400_GRAD200_opsz48.png'; // Replace with the path to the original image
}

function imChange(element) {
    var image = element.querySelector('img');
    image.src = '../assets/luggage_FILL0_wght400_GRAD200_opsz48 belo.png'; // Replace with the path to the new image
}

function imRestore(element) {
    var image = element.querySelector('img');
    image.src = '../assets/luggage_FILL0_wght400_GRAD200_opsz48.png'; // Replace with the path to the original image
}

function intChange(element) {
    var image = element.querySelector('img');
    image.src = '../assets/copyright_FILL0_wght400_GRAD200_opsz48 belo.png'; // Replace with the path to the new image
}

function intRestore(element) {
    var image = element.querySelector('img');
    image.src = '../assets/copyright_FILL0_wght400_GRAD200_opsz48.png'; // Replace with the path to the original image
}

function emChange(element) {
    var image = element.querySelector('img');
    image.src = '../assets/badge_FILL0_wght400_GRAD200_opsz48 belo.png'; // Replace with the path to the new image
}

function emRestore(element) {
    var image = element.querySelector('img');
    image.src = '../assets/badge_FILL0_wght400_GRAD200_opsz48.png'; // Replace with the path to the original image
}

function leChange(element) {
    var image = element.querySelector('img');
    image.src = '../assets/gavel_FILL0_wght400_GRAD200_opsz48 belo.png'; // Replace with the path to the new image
}

function leRestore(element) {
    var image = element.querySelector('img');
    image.src = '../assets/gavel_FILL0_wght400_GRAD200_opsz48.png'; // Replace with the path to the original image
}

function deleteBlog(id){
    $.ajax({
        url: '../controllers/AdminController.php',
        type: 'POST',
        data: {
        id: id,
        action: "deleteBlog"},
        success: function (response) {
            alert("Blog deleted succesfully")
            location.reload();
        },
        error: function (error) {
            alert("Error while deleting blog!")
        }
    });
}

function logout(){
    $.ajax({
        url: '../controllers/AdminController.php',
        type: 'POST',
        data: { action: "logout"},
        success: function (response) {
            alert("Logout succesfull")
            location.reload();
        },
        error: function (error) {
            alert("Error while deleting blog!")
        }
    });
}
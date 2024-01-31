<?php include('../helpers/header.php'); ?>
<body>
<?php include('../helpers/navbar.php'); ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title text-center">Login</h5>
                </div>
                <div class="card-body">
                    <form name="login_form" id="login_form">
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" class="form-control" id="in_username" name="in_username" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" id="in_password" name="in_password" required>
                        </div>
                        <br>
                        <div>
                            <button type="button" id="login_submit" class="btn btn-primary btn-block">Proceed</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('../helpers/footer.php');?>
</body>

</html>

<script>
    $(document).ready({
        $("#login_submit").click({
            $.ajax({
                url: '../controllers/AdminController.php',
                type: 'POST',
                data: {
                    action: login,
                    username: $("#in_username").value(),
                    password: $("#in_password").value()
                },
                success: function (data) {
                    if(data.success){
                        window.location.assign('new_project.php');
                    } else {
                        alert(data.err);
                    }
                },
                error: function(err){
                    alert('<?php echo tr("Došlo je do neočekivane greške!") ?>');
                }
            });
        });
    });
</script>
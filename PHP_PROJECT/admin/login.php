<?php include('../helpers/header.php'); ?>
<body>
<?php include('../helpers/navbar.php'); ?>

<div class="container login-margin">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card-login">
                <div class="card-header">
                    <h5 class="card-title text-center pt-1">Login</h5>
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
                        <div class="text-center">
                            <button type="button" id="login_submit" class="btn-hover btn btn-dark btn-block">Proceed</button>
                        </div>
                        <div id="error-message-login"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('../helpers/footer.php');?>
</body>

</html>

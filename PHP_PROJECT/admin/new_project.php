<?php include('../helpers/header.php'); ?>
<body>
<?php include('../helpers/navbar.php'); ?>

<?php
    if(isset($_SESSION['logged']) && $_SESSION['logged'] == true){
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title text-center">New Project</h5>
                </div>
                <div class="card-body">
                    <form name="login_form" id="login_form">
                        <div class="form-group">
                            <label for="username">Name:</label>
                            <input type="text" class="form-control" id="in_name" name="in_name" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Text:</label>
                            <input type="password" class="form-control" id="in_text" name="in_text" required>
                        </div>
                        <br>
                        <div>
                            <button type="button" id="add_project" class="btn btn-primary btn-block">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
}else{
?>
<div id="access_error_div">
    <h3>You do not have the rights to access this page!</h3>
</div>
<?php } ?>
<?php include('../helpers/footer.php');?>
</body>
</html>

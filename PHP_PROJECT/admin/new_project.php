<?php include('../helpers/header.php'); ?>
<body>
<?php include('../helpers/navbar.php'); ?>

<?php
    if(isset($_SESSION['logged']) && $_SESSION['logged']){
?>
        <div class="container new_project-margin">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title text-center">New Project</h5>
                        </div>
                        <div class="card-body">
                            <form name="project_form" id="project_form">
                                <div class="form-group form-field">
                                    <label for="in_date">Date:</label>
                                    <input type="date" class="form-control" id="in_date" name="in_date" required>
                                </div>
                                <div class="form-group form-field">
                                    <label for="in_picture">Picture:</label>
                                    <input type="file" class="form-control-file" id="in_picture" name="in_picture" accept="image/*">
                                </div>

                                <!-- SRB and ENG Sections Side by Side -->
                                <div class="row">
                                    <!-- SRB Section -->
                                    <div class="col-md-6">
                                        <h6>SRB</h6>
                                        <div class="form-group form-field">
                                            <label for="in_title_srb">Title:</label>
                                            <input type="text" class="form-control" id="in_title_srb" name="in_title_srb" required>
                                        </div>
                                        <div class="form-group form-field">
                                            <label for="in_content_srb">Content:</label>
                                            <textarea class="form-control" id="in_content_srb" name="in_content_srb" rows="4" required></textarea>
                                        </div>
                                    </div>

                                    <!-- ENG Section -->
                                    <div class="col-md-6">
                                        <h6>ENG</h6>
                                        <div class="form-group form-field">
                                            <label for="in_title_eng">Title:</label>
                                            <input type="text" class="form-control" id="in_title_eng" name="in_title_eng" required>
                                        </div>
                                        <div class="form-group form-field">
                                            <label for="in_content_eng">Content:</label>
                                            <textarea class="form-control" id="in_content_eng" name="in_content_eng" rows="4" required></textarea>
                                        </div>
                                    </div>
                                </div>

                                <br>
                                <div>
                                    <button type="button" id="add_project_submit" class="btn btn-primary btn-block">Add</button>
                                </div>
                            </form>
                            <div id="error-message-add-project"></div>
                            <div id="success-message-add-project"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php
}else{
    $language = $_SESSION['language'];

    if($language == "rs"){
        $no_rights_label  = "Nemate prava za pristup ovoj stranici!";
    } else {
        $no_rights_label  = "You do not have the rights to access this page!";
    }
?>
<div id="access_error_div">
    <h3><?php echo $no_rights_label?></h3>
</div>
<?php } ?>
<?php include('../helpers/footer.php');?>
</body>
</html>

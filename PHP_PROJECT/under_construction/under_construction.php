<?php include('../helpers/header.php'); ?>
<body>
<?php include('../helpers/navbar.php'); ?>

<?php
    $language = $_SESSION['language'];

    if($language == "rs"){
        $label = "OOPS! SOMETHING WENT WRONG 
<br>TRY AGAIN LATER
                :(";
    } else {
        $label = "UPS SOMETHING WENT WRONG 
<br>TRY AGAIN LATER
                :(";
    }
?>

<div class="row">
    <div class="col-sm-12">
        <div class="home-header d-flex justify-content-center">
            <div class="text-center">
                <h1><?php echo $label; ?></h1>
            </div>
        </div>
    </div>
</div>
<br><br><br><br><br>
</div><?php include('../helpers/footer.php');?>
</body>

</html>

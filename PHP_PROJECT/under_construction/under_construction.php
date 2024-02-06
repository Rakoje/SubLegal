<?php include('../helpers/header.php'); ?>
<body>
<?php include('../helpers/navbar.php'); ?>

<?php
    $language = $_SESSION['language'];

    if($language == "rs"){
        $label = "U IZRADI";
    } else {
        $label = "UNDER CONSTRUCTION";
    }
?>

<div class="row construction-bg">
    <div class="col-sm-12">
        <div class="home-header d-flex justify-content-center">
            <div class="head-home" style="color: white">
                <?php echo $label; ?>
            </div>
        </div>
    </div>
</div>
</div><?php include('../helpers/footer.php');?>
</body>

</html>

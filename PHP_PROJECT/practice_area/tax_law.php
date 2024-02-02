<?php include('../helpers/header.php'); ?>
<body>
<?php include('../helpers/navbar.php'); ?>
<?php
$language = $_SESSION['language'];

if($language == "rs"){
    $title = "TAX LAW";
} else {
    $title = "TAX LAW";
}
?>

<div class="row home-bg">
    <div class="col-sm-12">
        <div class="home-header">
            <div class="bottom-to-top-text head-home">
                <?php echo $title;?>
            </div>
        </div>
    </div>
</div>
</div><?php include('../helpers/footer.php');?>
</body>

</html>

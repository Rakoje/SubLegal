<?php include('../helpers/header.php'); ?>
<body>
<?php include('../helpers/navbar.php'); ?>
<?php
$language = $_SESSION['language'];

if($language == "rs"){
    $title = "EXPERTISE";
} else {
    $title = "EXPERTISE";
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
<div class="row home-about home-desc">
    <h1 class="text-center">OUR EXPERTISE</h1>
    <div class="row text-center cont pb-3">
        <div class="col-sm-3">
            <div class="card card-real-estate">
                <a href="real_estate.php">
                    <img src="../assets/apartment_FILL0_wght400_GRAD200_opsz48.png" class="icons no-hover-img" alt="">
                    <img src="../assets/apartment_FILL0_wght400_GRAD200_opsz48 belo.png" class="icons hover-img" alt="">
                    <h2>Construction & Real Estate</h2>
                    <div>A small river named Duden flows by their place and supplies it with the necessary regelialia.</div>
                </a>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card card-corporate">
                <a href="corporate.php">
                    <img src="../assets/account_balance_FILL0_wght400_GRAD200_opsz48.png" class="icons no-hover-img" alt="">
                    <img src="../assets/account_balance_FILL0_wght400_GRAD200_opsz48 belo.png" class="icons hover-img" alt="">
                    <h2>Corporate & M&A</h2>
                    <div>A small river named Duden flows by their place and supplies it with the necessary regelialia.</div>
                </a>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card card-commercial">
                <a href="commercial.php">
                    <img src="../assets/storefront_FILL0_wght400_GRAD200_opsz48.png" class="icons no-hover-img" alt="">
                    <img src="../assets/storefront_FILL0_wght400_GRAD200_opsz48 belo.png" class="icons hover-img" alt="">
                    <h2>Commercial</h2>
                    <div>A small river named Duden flows by their place and supplies it with the necessary regelialia.</div>
                </a>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card card-tax-law">
                <a href="tax_law.php">
                    <img src="../assets/balance_FILL0_wght400_GRAD200_opsz48.png" class="icons no-hover-img" alt="">
                    <img src="../assets/balance_FILL0_wght400_GRAD200_opsz48 belo.png" class="icons hover-img" alt="">
                    <h2>Tax Law</h2>
                    <div>A small river named Duden flows by their place and supplies it with the necessary regelialia.</div>
                </a>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card card-immigration">
                <a href="immigration.php">
                    <img src="../assets/luggage_FILL0_wght400_GRAD200_opsz48.png" class="icons no-hover-img" alt="">
                    <img src="../assets/luggage_FILL0_wght400_GRAD200_opsz48 belo.png" class="icons hover-img" alt="">
                    <h2>Immigration</h2>
                    <div>A small river named Duden flows by their place and supplies it with the necessary regelialia.</div>
                </a>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card card-intellectual">
                <a href="intellectual.php">
                    <img src="../assets/copyright_FILL0_wght400_GRAD200_opsz48.png" class="icons no-hover-img" alt="">
                    <img src="../assets/copyright_FILL0_wght400_GRAD200_opsz48 belo.png" class="icons hover-img" alt="">
                    <h2>Intellectual Property</h2>
                    <div>A small river named Duden flows by their place and supplies it with the necessary regelialia.</div>
                </a>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card card-employment">
                <a href="employment.php">
                    <img src="../assets/badge_FILL0_wght400_GRAD200_opsz48.png" class="icons no-hover-img" alt="">
                    <img src="../assets/badge_FILL0_wght400_GRAD200_opsz48 belo.png" class="icons hover-img" alt="">
                    <h2>Employment</h2>
                    <div>A small river named Duden flows by their place and supplies it with the necessary regelialia.</div>
                </a>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card card-l-e">
                <a href="litigation_enforcement.php">
                    <img src="../assets/gavel_FILL0_wght400_GRAD200_opsz48.png" class="icons no-hover-img" alt="">
                    <img src="../assets/gavel_FILL0_wght400_GRAD200_opsz48 belo.png" class="icons hover-img" alt="">
                    <h2>Litigation & Enforcement</h2>
                    <div>A small river named Duden flows by their place and supplies it with the necessary regelialia.</div>
                </a>
            </div>
        </div>
    </div>
</div>

<?php include('../helpers/footer.php');?>
</body>

</html>
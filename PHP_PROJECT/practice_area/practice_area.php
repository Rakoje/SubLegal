<?php include('../helpers/header.php'); ?>
<body>
<?php include('../helpers/navbar.php'); ?>
<?php
$language = $_SESSION['language'];

if($language == "rs"){
    $title = "EXPERTISE";
    $our_expertise_title = "OUR EXPERTISE";
    $constr_card_title = "Construction & Real Estate";
    $constr_card_desc = "A small river named Duden flows by their place and supplies it with the necessary regelialia.";
    $corp_card_title = "Corporate & M&A";
    $corp_card_desc = "A small river named Duden flows by their place and supplies it with the necessary regelialia.";
    $comm_card_title = "Commercial";
    $comm_card_desc = "A small river named Duden flows by their place and supplies it with the necessary regelialia.";
    $immigration_card_title = "Immigration";
    $immigration_card_desc = "A small river named Duden flows by their place and supplies it with the necessary regelialia.";
    $tax_card_title = "Tax Law";
    $tax_card_desc = "A small river named Duden flows by their place and supplies it with the necessary regelialia.";
    $int_card_title = "Intellectual Property";
    $int_card_desc = "A small river named Duden flows by their place and supplies it with the necessary regelialia.";
    $emp_card_title = "Employment";
    $emp_card_desc = "A small river named Duden flows by their place and supplies it with the necessary regelialia.";
    $lit_card_title = "Litigation & Enforcement";
    $lit_card_desc = "A small river named Duden flows by their place and supplies it with the necessary regelialia.";

} else {
    $title = "EXPERTISE";
    $our_expertise_title = "OUR EXPERTISE";
    $constr_card_title = "Construction & Real Estate";
    $constr_card_desc = "A small river named Duden flows by their place and supplies it with the necessary regelialia.";
    $corp_card_title = "Corporate & M&A";
    $corp_card_desc = "A small river named Duden flows by their place and supplies it with the necessary regelialia.";
    $comm_card_title = "Commercial";
    $comm_card_desc = "A small river named Duden flows by their place and supplies it with the necessary regelialia.";
    $immigration_card_title = "Immigration";
    $immigration_card_desc = "A small river named Duden flows by their place and supplies it with the necessary regelialia.";
    $tax_card_title = "Tax Law";
    $tax_card_desc = "A small river named Duden flows by their place and supplies it with the necessary regelialia.";
    $int_card_title = "Intellectual Property";
    $int_card_desc = "A small river named Duden flows by their place and supplies it with the necessary regelialia.";
    $emp_card_title = "Employment";
    $emp_card_desc = "A small river named Duden flows by their place and supplies it with the necessary regelialia.";
    $lit_card_title = "Litigation & Enforcement";
    $lit_card_desc = "A small river named Duden flows by their place and supplies it with the necessary regelialia.";
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
    <h1 class="text-center"><?php echo $our_expertise_title;?></h1>
    <div class="row text-center cont pb-3">
        <div class="col-sm-3">
            <div class="card card-real-estate">
                <a href="real_estate.php">
                    <img src="../assets/apartment_FILL0_wght400_GRAD200_opsz48.png" class="icons no-hover-img" alt="">
                    <img src="../assets/apartment_FILL0_wght400_GRAD200_opsz48 belo.png" class="icons hover-img" alt="">
                    <h2><?php echo $constr_card_title;?></h2>
                    <div><?php echo $constr_card_desc;?></div>
                </a>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card card-corporate">
                <a href="corporate.php">
                    <img src="../assets/account_balance_FILL0_wght400_GRAD200_opsz48.png" class="icons no-hover-img" alt="">
                    <img src="../assets/account_balance_FILL0_wght400_GRAD200_opsz48 belo.png" class="icons hover-img" alt="">
                    <h2><?php echo $corp_card_title;?></h2>
                    <div><?php echo $corp_card_desc;?></div>
                </a>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card card-commercial">
                <a href="commercial.php">
                    <img src="../assets/storefront_FILL0_wght400_GRAD200_opsz48.png" class="icons no-hover-img" alt="">
                    <img src="../assets/storefront_FILL0_wght400_GRAD200_opsz48 belo.png" class="icons hover-img" alt="">
                    <h2><?php echo $comm_card_title;?></h2>
                    <div><?php echo $comm_card_desc;?></div>
                </a>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card card-tax-law">
                <a href="tax_law.php">
                    <img src="../assets/balance_FILL0_wght400_GRAD200_opsz48.png" class="icons no-hover-img" alt="">
                    <img src="../assets/balance_FILL0_wght400_GRAD200_opsz48 belo.png" class="icons hover-img" alt="">
                    <h2><?php echo $tax_card_title;?></h2>
                    <div><?php echo $tax_card_desc;?></div>
                </a>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card card-immigration">
                <a href="immigration.php">
                    <img src="../assets/luggage_FILL0_wght400_GRAD200_opsz48.png" class="icons no-hover-img" alt="">
                    <img src="../assets/luggage_FILL0_wght400_GRAD200_opsz48 belo.png" class="icons hover-img" alt="">
                    <h2><?php echo $immigration_card_title;?></h2>
                    <div><?php echo $immigration_card_desc;?></div>
                </a>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card card-intellectual">
                <a href="intellectual.php">
                    <img src="../assets/copyright_FILL0_wght400_GRAD200_opsz48.png" class="icons no-hover-img" alt="">
                    <img src="../assets/copyright_FILL0_wght400_GRAD200_opsz48 belo.png" class="icons hover-img" alt="">
                    <h2><?php echo $int_card_title;?></h2>
                    <div><?php echo $int_card_desc;?></div>
                </a>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card card-employment">
                <a href="employment.php">
                    <img src="../assets/badge_FILL0_wght400_GRAD200_opsz48.png" class="icons no-hover-img" alt="">
                    <img src="../assets/badge_FILL0_wght400_GRAD200_opsz48 belo.png" class="icons hover-img" alt="">
                    <h2><?php echo $emp_card_title;?></h2>
                    <div><?php echo $emp_card_desc;?></div>
                </a>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card card-l-e">
                <a href="litigation_enforcement.php">
                    <img src="../assets/gavel_FILL0_wght400_GRAD200_opsz48.png" class="icons no-hover-img" alt="">
                    <img src="../assets/gavel_FILL0_wght400_GRAD200_opsz48 belo.png" class="icons hover-img" alt="">
                    <h2><?php echo $lit_card_title;?></h2>
                    <div><?php echo $lit_card_desc;?></div>
                </a>
            </div>
        </div>
    </div>
</div>

<?php include('../helpers/footer.php');?>
</body>

</html>
<?php include('../helpers/header.php'); ?>
<body>
<?php include('../helpers/navbar.php'); ?>
<?php
$language = $_SESSION['language'];

if ($language == "rs") {
    $title = "PARNIČNI POSTUPCI I IZVRŠENJE";
    $text = "Kao neizostavan deo uspešne pravne pomoći predstavlja zastupanje klijenata pred domaćim i stranim sudovima i
            drugim institucijama I državnim organima, te sa ponosom ističemo dugogodišnje iskustvo u zastupanju domaćih
            i stranih, kako pravnih tako i fizičkih lica u različitim vrstama postupaka pred navedenim organima. Sa
            posebnom pažnjom I energijom pristupamo svakom pojedinačnom slučaju u cilju uspešnog rešavanja spora, čiji
            ishodi su neretko od vitalne važnosti za stranku u postupku. Smatramo da je pronalaženje načina da se spor
            izbegne i aktivno učešće u pregovorima jednako važno kao i zastupanje pred sudom, kako u parničnom, tako i u
            drugim srodnim vrstama postupaka.
            <br><br>
            Naše bogato iskustvo u pregovorima, arbitraži, parničnim, izvršnim i postupcima za određivanje privremene
            mere pred svim sudovima u Republici Srbiji i Crnoj Gori zasigurno će doprineti vašem poslovanju i pružiti
            dodatnu sigurnost.
            <br><br>
            Pravna usluga obuhvata:";
    $text1 = "Savetovanje i zastupanje u sporovima u vezi sa ugovorima o građenju (FIDIC)";
    $text2 = "Savetovanje i zastupanje u radnim sporovima";
    $text3 = "Savetovanje i zastupanje u privrednim sporovima";
    $text4 = "Savetovanje i zastupanje u sporovima iz oblasti osiguranja";
    $text5 = "Savetovanje i zastupanje u sporovima iz oblasti bankarstva";
    $text6 = "Savetovanje i zastupanje u bračnim sporovima";
    $text7 = "Savetovanje i zastupanje u sporovima podele imovine";
    $text8 = "Savetovanje i zastupanje u upravnim sporovima";
    $text9 = "Savetovanje i zastupanje u sporovima svih vrsta naknade štete";
    $text10 = "Savetovanje i zastupanje u izvršnim postupcima";

    $nepokretnost_label = "Nepokretnosti i izgradnja";
    $korp_label = "Korporativno i privredno pravo, M&A";
    $poresko_label = "Poresko pravo";
    $imigraciono_label = "Imigraciono pravo";
    $int_label = "Intelektualna svojina";
    $radno_label = "Radno pravo";
    $parnica_label = "Parnični i izvršni postupci";
} else {
    $title = "LITIGATION AND EXECUTION PROCEDURES";
    $text = "An essential part of successful legal assistance is representation of clients in front of the domestic 
    and foreign courts and other institutions and State bodies. We are proud to have many years of experience in 
    representing domestic and foreign companies, both legal and individual parties, in various types of procedures
    before the state authorities.
    <br><br>
    We approach each individual case with special attention and energy, successfully providing outcomes which are often
    of a vital importance for the party in procedure. We believe that finding a way to avoid a dispute is also an 
    active participation in negotiations as important as representation in front of the court, both in litigation 
    and in other related types of proceedings.
    <br><br>
    Our extensive experience in negotiations, arbitration, litigation, enforcement and proceedings for determination 
    of a temporary measure before all courts in the Republic of Serbia and Montenegro, will certainly contribute to 
    your business and provide additional security.
    <br><br>
    Legal service includes:
";
    $text1 = "Consulting and representation in disputes related to construction contracts (FIDIC)";
    $text2 = "Consulting and representation in labor disputes";
    $text3 = "Consulting and representation in commercial disputes";
    $text4 = "Consulting and representation in insurance disputes";
    $text5 = "Consulting and representation in banking disputes";
    $text6 = "Consulting and representation in marital disputes";
    $text7 = "Consulting and representation in property division disputes";
    $text8 = "Consulting and representation in administrative disputes";
    $text9 = "Consulting and representation in disputes of all types of damages";
    $text10 = "Consulting and representation in enforcement procedures";

    $nepokretnost_label = "Real estate and construction";
    $korp_label = "Corporate and business law, M&A";
    $poresko_label = "Tax law";
    $imigraciono_label = "Immigration law";
    $int_label = "Intellectual property";
    $radno_label = "Labor law";
    $parnica_label = "Litigation and execution procedures";
}
?>

<div class="row real-estate-bg" style="margin: 0">
    <img src="../assets/Parnični%20postupak%20i%20izvršenje.jpg" alt="" class="l-and-e-img">
    <div class="col-sm-12 tax-box-text">
        <div class="text-center"><h1><?php echo $title; ?></h1></div>
        <br>
        <div>
            <?php echo $text; ?>
            <ul>
                <li><?php echo $text1; ?></li>
                <li><?php echo $text2; ?></li>
                <li><?php echo $text3; ?></li>
                <li><?php echo $text4; ?></li>
                <li><?php echo $text5; ?></li>
                <li><?php echo $text6; ?></li>
                <li><?php echo $text7; ?></li>
                <li><?php echo $text8; ?></li>
                <li><?php echo $text9; ?></li>
                <li><?php echo $text10; ?></li>
            </ul>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-6" onmouseover="reChange(this)" onmouseout="reRestore(this)" id="hover_white">
                <a href="real_estate.php">
                    <img src="../assets/apartment_FILL0_wght400_GRAD200_opsz48.png" class="icons no-hover-img" alt="">
                    <?php echo $nepokretnost_label; ?></a>
            </div>
            <div class="col-sm-6" onmouseover="coChange(this)" onmouseout="coRestore(this)" id="hover_white">
                <a href="corporate.php">
                    <img src="../assets/account_balance_FILL0_wght400_GRAD200_opsz48.png" class="icons no-hover-img" alt="">
                    <?php echo $korp_label; ?></a><br>
            </div>
            <div class="col-sm-6" onmouseover="taxChange(this)" onmouseout="taxRestore(this)" id="hover_white">
                <a href="tax_law.php">
                    <img src="../assets/balance_FILL0_wght400_GRAD200_opsz48.png" class="icons no-hover-img" alt="">
                    <?php echo $poresko_label; ?></a><br>
            </div>
            <div class="col-sm-6" onmouseover="imChange(this)" onmouseout="imRestore(this)" id="hover_white">
                <a href="immigration.php">
                    <img src="../assets/luggage_FILL0_wght400_GRAD200_opsz48.png" class="icons no-hover-img" alt="">
                    <?php echo $imigraciono_label; ?></a><br>
            </div>
            <div class="col-sm-6" onmouseover="intChange(this)" onmouseout="intRestore(this)" id="hover_white">
                <a href="intellectual.php">
                    <img src="../assets/copyright_FILL0_wght400_GRAD200_opsz48.png" class="icons no-hover-img" alt="">
                    <?php echo $int_label; ?></a><br>
            </div>
            <div class="col-sm-6" onmouseover="emChange(this)" onmouseout="emRestore(this)" id="hover_white">
                <a href="employment.php">
                    <img src="../assets/badge_FILL0_wght400_GRAD200_opsz48.png" class="icons no-hover-img" alt="">
                    <?php echo $radno_label; ?></a><br>
            </div>
        </div>
    </div>
</div><?php include('../helpers/footer.php'); ?>
</body>

</html>

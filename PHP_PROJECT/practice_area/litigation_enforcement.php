<?php include('../helpers/header.php'); ?>
<body>
<?php include('../helpers/navbar.php'); ?>
<?php
$language = $_SESSION['language'];

if ($language == "rs") {
    $title = "LITIGATION & ENFORCEMENT";
} else {
    $title = "LITIGATION & ENFORCEMENT";
}
?>

<div class="row real-estate-bg" style="margin: 0">
    <img src="../assets/Parnični%20postupak%20i%20izvršenje.jpg" alt="" class="l-and-e-img">
    <div class="col-sm-12 tax-box-text">
        <div class="text-center"><h1>PARNIČNI POSTUPCI I IZVRŠENJE</h1></div>
        <br>
        <div>
            Kao neizostavan deo uspešne pravne pomoći predstavlja zastupanje klijenata pred domaćim i stranim sudovima i
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
            Pravna usluga obuhvata:
            <ul>
                <li>Savetovanje i zastupanje u sporovima u vezi sa ugovorima o građenju (FIDIC)</li>
                <li>Savetovanje i zastupanje u radnim sporovima</li>
                <li>Savetovanje i zastupanje u privrednim sporovima</li>
                <li>Savetovanje i zastupanje u sporovima iz oblasti osiguranja</li>
                <li>Savetovanje i zastupanje u sporovima iz oblasti bankarstva</li>
                <li>Savetovanje i zastupanje u bračnim sporovima</li>
                <li>Savetovanje i zastupanje u sporovima podele imovine</li>
                <li>Savetovanje i zastupanje u upravnim sporovima</li>
                <li>Savetovanje i zastupanje u sporovima svih vrsta naknade štete</li>
                <li>Savetovanje i zastupanje u izvršnim postupcima</li>
            </ul>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-6" onmouseover="reChange(this)" onmouseout="reRestore(this)"  id="hover_white">
                <a href="real_estate.php">
                    <img src="../assets/apartment_FILL0_wght400_GRAD200_opsz48.png" class="icons no-hover-img"
                         alt="">Nepokretnost i izgradnja</a>
            </div>
            <div class="col-sm-6"  onmouseover="coChange(this)" onmouseout="coRestore(this)"  id="hover_white">
                <a href="corporate.php">
                    <img src="../assets/account_balance_FILL0_wght400_GRAD200_opsz48.png" class="icons no-hover-img"
                         alt="">Korporativno i provredno pravo</a><br>
            </div>
            <div class="col-sm-6"  onmouseover="taxChange(this)" onmouseout="taxRestore(this)"  id="hover_white">
                <a href="tax_law.php" >
                    <img src="../assets/balance_FILL0_wght400_GRAD200_opsz48.png" class="icons no-hover-img" alt="">
                    Poresko pravo</a><br>
            </div>
            <div class="col-sm-6" onmouseover="imChange(this)" onmouseout="imRestore(this)" id="hover_white">
                <a href="immigration.php">
                    <img src="../assets/luggage_FILL0_wght400_GRAD200_opsz48.png" class="icons no-hover-img" alt="">
                    Imigraciono pravo</a><br>
            </div>
            <div class="col-sm-6"  onmouseover="intChange(this)" onmouseout="intRestore(this)"  id="hover_white">
                <a href="intellectual.php">
                    <img src="../assets/copyright_FILL0_wght400_GRAD200_opsz48.png" class="icons no-hover-img"
                         alt="">Intelektualna svojina</a><br>
            </div>
            <div class="col-sm-6"  onmouseover="emChange(this)" onmouseout="emRestore(this)"  id="hover_white">
                <a href="employment.php">
                    <img src="../assets/badge_FILL0_wght400_GRAD200_opsz48.png" class="icons no-hover-img" alt="">
                    Radno pravo</a><br>
            </div>
        </div>
    </div>
</div><?php include('../helpers/footer.php'); ?>
</body>

</html>

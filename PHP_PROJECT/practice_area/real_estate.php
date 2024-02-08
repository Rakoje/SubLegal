<?php include('../helpers/header.php'); ?>
<body>
<?php include('../helpers/navbar.php'); ?>
<?php
$language = $_SESSION['language'];

if ($language == "rs") {
    $title = "NEPOKRETNOSTI I GRADNJA";
    $text = "SubLegal poseduje široko iskustvo u oblasti nekretinina i gradnje u Republici Srbiji i Crnoj Gori, sa
            akcentom na Beograd i crnogorsko primorje. Pružamo celokupnu pravnu uslugu u navedenoj oblasti - od
            pregovora, posredovanja, procene rizika, pa do izrade celokupne dokumetacije kada su u pitanju kupoprodaje,
            investiranje, gradnja, adaptacije, legalizacija, otuđivanje, prenamene i slično, sa posebnim akcentom na
            komunikaciji sa državnim organima koji uređuju oblast nekretnina i izgradnje u regionu Zapadnog balkana.
            Uspešno pružamo uslugu pribavljanja svih vrsta dozvola i druge prateće dokumentacije neophodne za adekvatnu
            realizaciju investicija u građevini.<br><br>
            Pored sveobuhvatnog pravnog dela usluge u građevini, u svom opusu nudimo mogućnost pružanja usluge
            projektnih biroa sa velikim iskustvom u branši, svih vrsta tehničkih asistencija i pronalazaka podizvođača
            kada su u pitanju izvođenje radova, suinvestiranje, nadogradnja, unutrašnje rekonstrukcije, izmene,
            saniranje i adaptacije.<br><br>
            Usluge koje pružamo:";

    $nepokretnost_label = "Nepokretnosti i izgradnja";
    $korp_label = "Korporativno i privredno pravo, M&A";
    $poresko_label = "Poresko pravo";
    $imigraciono_label = "Imigraciono pravo";
    $int_label = "Intelektualna svojina";
    $radno_label = "Radno pravo";
    $parnica_label = "Parnični i izvršni postupci";

    $text1 = "Pronalaženje podizvođača svih vrsta";
    $text2 = "Obezbeđivanje projektnih biroa";
    $text3 = "Komunikacija sa državnim organima";
    $text4 = "Građevinski / FIDIC ugovori";
    $text5 = "Savetovanje za izgradnju i razvoj";
    $text6 = "Upravljanje potraživanjima";
    $text7 = "Građevinske dozvole";
    $text8 = "Zastupanje u postupku legalizacije";
    $text9 = "Savetovanje i zastupanje u sudskim, građevinskim i arbitražnim sporovima";
    $text10 = "Korišćenje i konverzija zemljišta";
    $text11 = "Kupovina nepokretnosti, uključujući due diligence i ugovore o kupoprodaji";
    $text12 = "Lizing nepokretnosti";
    $text13 = "Pomaganje i asistencija u pregovorima";
    $text14 = "Pronalaženje lokacija i objekata za gradnju, lizing i kupoprodaju";
    $text15 = "Posredovanje";
} else {
    $title = "REAL ESTATE AND CONSTRUCTION";
    $text = "SubLegal has extensive experience in the field of real estate and construction in the Republic of Serbia 
    and in Montenegro with a special emphasis on Belgrade and the Montenegrin seaside. We provide the entire legal 
    service in the above-mentioned area - from negotiations, mediation, risk assessment, all over to creation of 
    complete documentation regarding sales, investments, construction, adaptations, legalization, alienation, 
    repurposing, and other related matters, with special emphasis on communication with the State Authorities that 
    regulate the field of real estate and construction in the Western Balkans. We successfully provide the service 
    of obtaining all types of permits and other supporting documents necessary for an adequate implementation of 
    investments in construction.<br><br>
    In addition to the comprehensive legal part of construction services, we offer in our portfolio the possibility 
    of providing the services of project bureaus with extensive experience in the branch. All types of technical 
    assistance and finding subcontractors for the execution of construction works, co-investment, upgrading, internal 
    reconstructions, changes, rehabilitation and adaptations.
    <br><br>
    Services that we provide
";
    $nepokretnost_label = "Real estate and construction";
    $korp_label = "Corporate and business law, M&A";
    $poresko_label = "Tax law";
    $imigraciono_label = "Immigration law";
    $int_label = "Intellectual property";
    $radno_label = "Labor law";
    $parnica_label = "Litigation and execution procedures";

    $text1 = "Finding subcontractors of all types";
    $text2 = "Provision of project offices";
    $text3 = "Communication with state authorities";
    $text4 = "Construction / FIDIC contracts";
    $text5 = "Consulting for construction and development";
    $text6 = "Claims management";
    $text7 = "Construction permits";
    $text8 = "Representation in the legalization procedure";
    $text9 = "Counseling and representation in court, construction and arbitration disputes";
    $text10 = "Land use and conversion";
    $text11 = "Purchase of real estate, including due diligence and sales contracts";
    $text12 = "Real estate leasing";
    $text13 = "Helping and assisting in negotiations";
    $text14 = "Finding locations and facilities for construction, leasing, buying and selling";
    $text15 = "Mediation";
}
?>

<div class="row real-estate-bg" style="margin: 0">
    <img src="../assets/realEstate.jpg" alt="" class="real-estate-img">
    <div class="col-sm-12 real-estate-box-text">
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
                <li><?php echo $text11; ?></li>
                <li><?php echo $text12; ?></li>
                <li><?php echo $text13; ?></li>
                <li><?php echo $text14; ?></li>
                <li><?php echo $text15; ?></li>
            </ul>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-6" onmouseover="coChange(this)" onmouseout="coRestore(this)"  id="hover_white">
                <a href="corporate.php">
                    <img src="../assets/account_balance_FILL0_wght400_GRAD200_opsz48.png" class="icons no-hover-img"
                         alt=""><?php echo $korp_label; ?></a><br>
            </div>
            <div class="col-sm-6"  onmouseover="taxChange(this)" onmouseout="taxRestore(this)"  id="hover_white">
                <a href="tax_law.php" >
                    <img src="../assets/balance_FILL0_wght400_GRAD200_opsz48.png" class="icons no-hover-img" alt="">
                    <?php echo $poresko_label; ?></a><br>
            </div>
            <div class="col-sm-6" onmouseover="imChange(this)" onmouseout="imRestore(this)" id="hover_white">
                <a href="immigration.php">
                    <img src="../assets/luggage_FILL0_wght400_GRAD200_opsz48.png" class="icons no-hover-img" alt="">
                    <?php echo $imigraciono_label; ?></a><br>
            </div>
            <div class="col-sm-6"  onmouseover="intChange(this)" onmouseout="intRestore(this)"  id="hover_white">
                <a href="intellectual.php">
                    <img src="../assets/copyright_FILL0_wght400_GRAD200_opsz48.png" class="icons no-hover-img"
                         alt=""><?php echo $int_label; ?></a><br>
            </div>
            <div class="col-sm-6"  onmouseover="emChange(this)" onmouseout="emRestore(this)"  id="hover_white">
                <a href="employment.php">
                    <img src="../assets/badge_FILL0_wght400_GRAD200_opsz48.png" class="icons no-hover-img" alt="">
                    <?php echo $radno_label; ?></a><br>
            </div>
            <div class="col-sm-6"  onmouseover="leChange(this)" onmouseout="leRestore(this)" id="hover_white">
                <a href="litigation_enforcement.php">
                    <img src="../assets/gavel_FILL0_wght400_GRAD200_opsz48.png" class="icons no-hover-img" alt="">
                    <?php echo $parnica_label; ?></a><br>
            </div>
        </div>
    </div>
</div>
</div><?php include('../helpers/footer.php'); ?>
</body>

</html>

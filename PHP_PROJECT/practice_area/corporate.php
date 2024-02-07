<?php include('../helpers/header.php'); ?>
<body>
<?php include('../helpers/navbar.php'); ?>
<?php
$language = $_SESSION['language'];

if ($language == "rs") {
    $title = "CORPORATE & M&A";
} else {
    $title = "COMMERCIAL, CORPORATE & M&A";
}
?>

<div class="row real-estate-bg" style="margin: 0">
    <img src="../assets/Privredno%20i%20kompanijsko%20pravo,%20M&A.jpg" alt="" class="tax-law-img">
    <div class="col-sm-12 tax-box-text">
        <div class="text-center"><h1>KORPORATIVNO I PRIVREDNO PRAVO, M&A</h1></div>
        <br>
        <div>
            Najprimenjenija grana prava u oblasti poslovanja, prati proces od osnivanja kompanije pa do najsloženijih
            procesa u ravoju. Neophodnost prepletanja više ekspertskih oblasti je nužna za adekvatan konsalting i
            uspešno vođenje kroz pravne procese koji prate pravilan razvoj jedne kompanije, u čemu je SubLegal upravo
            najbolji. Sa značajnim iskustvom u M&A oblasti pružamo zaokruženu uslugu prilikom spajanja i pripajanja, kao
            i svih vrsta akvizicija iz različitih oblasti poslovanja.
            <br><br>
            Pružamo kako pravne, tako i konsultatske usluge kompanijama i grupacijama dugi niz godina koje posluju na
            teritoriji Srbije, Crne Gore i Hrvatske. Od njihovog samog osnivanja, pratimo rast i razvoj kompanija sa
            aktivnim učešćem u tranzicionim i kadrovskim procesima kroz koje prolaze i pružamo im različite vrste usluga
            iz oblasti pravne usluge, finansisjog savetovanja, knjigovodstva i HR sektora. Pružamo uslugu svih vrsta
            procena – „Due diligence” u cilju kupovine ili prodaje kompanija.
            <br><br>
            Naši advokati, knjigovođe, finansiski stručnjaci i HR specijalisti pokrivaju sveobuhvatnu asistenciju u
            poslovanju koja podrazumeva:
            <br>
            Pravne usluge:
            <ul>
                <li>Osnivanje kompanije</li>
                <li>Sve statusne i druge promene kompanije</li>
                <li>Zastupanje pred sudovima i drugim državnim organima</li>
                <li>Priprema dokumentacije za sve vrste radnih odnosa</li>
                <li>Zastupanje u pregovorima sa klijentima</li>
                <li>Poresko savetovanje</li>
                <li>Usaglašavanje sa propisima</li>
                <li>Pružanje svakodnevne pravne podrške</li>
                <li>Priprema opštih akata i davanje pravnih mišljenja u vezi sa primenom svih propisa koji se odnose na
                    poslovanje
                </li>
                <li>Pripremanje i izrada svih vrsta ugovora u poslovanju</li>
                <li>Spajanja, pripajanja i likvidacije</li>
                <li>Dubinska pravna analiza (due dilligence)</li>
            </ul>
            Finansijske usluge i procene:
            <ul>
                <li>Finansijske revizije poslovanja</li>
                <li>Revizije zarada</li>
                <li>Izrada „Payroll”-a po outsourse modelu</li>
                <li>Precene rizika</li>
                <li>Knjigovodstvene usluge</li>
            </ul>
            HR usluga:
            <ul>
                <li>Kadriranje</li>
                <li>Regrutovanje</li>
                <li>Asistencija prilikom zapošljavanja</li>
                <li>“Scouting” zaposlenih</li>
                <li>Izrada karneta za “payroll”</li>
            </ul>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-6" onmouseover="reChange(this)" onmouseout="reRestore(this)"  id="hover_white">
                <a href="real_estate.php">
                    <img src="../assets/apartment_FILL0_wght400_GRAD200_opsz48.png" class="icons no-hover-img"
                         alt="">Nepokretnost i izgradnja</a>
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
            <div class="col-sm-6"  onmouseover="leChange(this)" onmouseout="leRestore(this)" id="hover_white">
                <a href="litigation_enforcement.php">
                    <img src="../assets/gavel_FILL0_wght400_GRAD200_opsz48.png" class="icons no-hover-img" alt="">
                    Parnični i izvršni postupci</a><br></div>
        </div>
    </div>
</div>
<?php include('../helpers/footer.php'); ?>
</body>

</html>

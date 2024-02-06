<?php include('../helpers/header.php'); ?>
<body>
<?php include('../helpers/navbar.php'); ?>
<?php
$language = $_SESSION['language'];

if ($language == "rs") {
    $title = "TAX LAW";
} else {
    $title = "TAX LAW";
}
?>

<div class="row real-estate-bg" style="margin: 0">
    <img src="../assets/Poresko%20pravo.jpg" alt="" class="tax-law-img">
    <div class="col-sm-12 tax-box-text">
        <div class="d-flex"><h1>PORESKO PRAVO</h1></div>
        <br>
        <div>
            Neizostavan deo svakog uspešnog biznisa je jasna poreska strategija i rukovođenje u poreskoj politici.
            Neophodnost konstantnog praćenja čestih promena u ovoj oblasti stvara potrebu za aktivnim učešćem svih
            kompanija, a naročito onih koji svoje poslovanje baziraju na više teritorija različitih država.
            <br><br>
            Našim klijentima pružamo sveobuhvatnu uslugu usklađivanja poreske politike sa ciljem stvaranja dodatnih
            ušteda prilikom oporezivanja kako u slučajevima redovnog poslovanja iz delatnosti , tako i prilikom
            akvizicija iz M&A, raznih vrsta transakcija sticanja i otuđenja imovine i dobara.
            <br><br>
            Sve navedeno naročito podrazumeva:
            <ul>
                <li>
                    Usklađenost sa poreskim propisima
                </li>
                <li>
                    Zastupanje pred poreskim organima
                </li>
                <li>
                    Poresko planiranje
                </li>
                <li>
                    Strukturiranje poreza na transakcije i poreski due diligence
                </li>
                <li>
                    Poreska optimizacija akvizicionih struktura i poreska restrukturiranja nakon akvizicije
                </li>
                <li>
                    Porez na nekretnine, investicije, porez na imovinu, otuđenje imovine i kapitalnih dobitaka i porez
                    na
                    prihod od zakupa
                </li>
                <li>
                    Pitanja poreza na imigraciju i zapošljavanje (porezi na plate, uključujući analizu i optimizaciju
                    poreskih troškova u vezi sa radnom snagom, poreske implikacije planova opcija akcija zaposlenih)
                </li>
                <li>
                    Oporezivanje projekata finansiranja, uključujući oporezivanje opšteg kreditiranja, finansiranja
                    projekata, oporezivanje finansijskih instrumenata i derivata i oporezivanje pružalaca finansijskih
                    usluga
                </li>
                <li>
                    Savetovanje o dvostrukom oporezivanju
                </li>
                <li>
                    Savetovanje o transfernim cenama
                </li>
                <li>
                    Zastupanje u poreskim sporovima, uključujući i upravne sporove
                </li>
                <li>
                    Zastupanje u krivičnom i prekršajnom postupku za sve vrste poreskih prestupa
                </li>
                <li>
                    Porez na dohodak fizičkih lica, uključujući poreze na nasleđe i poklone, poreze na imovinu i
                    poresko
                    strukturiranje ličnog dohotka i poresko strukturiranje ulaganja ličnog dohotka
                </li>
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
                    Imigracija</a><br>
            </div>
            <div class="col-sm-6"  onmouseover="intChange(this)" onmouseout="intRestore(this)"  id="hover_white">
                <a href="intellectual.php">
                    <img src="../assets/copyright_FILL0_wght400_GRAD200_opsz48.png" class="icons no-hover-img"
                         alt="">Intelektualna svojina</a><br>
            </div>
            <div class="col-sm-6"  onmouseover="emChange(this)" onmouseout="emRestore(this)"  id="hover_white">
                <a href="employment.php">
                    <img src="../assets/badge_FILL0_wght400_GRAD200_opsz48.png" class="icons no-hover-img" alt="">
                    Radni odnosi</a><br>
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

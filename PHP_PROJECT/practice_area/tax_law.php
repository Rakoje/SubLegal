<?php include('../helpers/header.php'); ?>
<body>
<?php include('../helpers/navbar.php'); ?>
<?php
$language = $_SESSION['language'];

if ($language == "rs") {
    $title = "PORESKO PRAVO";
    $text = "Neizostavan deo svakog uspešnog biznisa je jasna poreska strategija i rukovođenje u poreskoj politici.
            Neophodnost konstantnog praćenja čestih promena u ovoj oblasti stvara potrebu za aktivnim učešćem svih
            kompanija, a naročito onih koji svoje poslovanje baziraju na više teritorija različitih država.
            <br><br>
            Našim klijentima pružamo sveobuhvatnu uslugu usklađivanja poreske politike sa ciljem stvaranja dodatnih
            ušteda prilikom oporezivanja kako u slučajevima redovnog poslovanja iz delatnosti , tako i prilikom
            akvizicija iz M&A, raznih vrsta transakcija sticanja i otuđenja imovine i dobara.
            <br><br>
            Sve navedeno naročito podrazumeva:";
    $text1 = "Usklađenost sa poreskim propisima";
    $text2 = "Zastupanje pred poreskim organima";
    $text3 = "Poresko planiranje";
    $text4 = "Strukturiranje poreza na transakcije i poreski due diligence";
    $text5 = "Poreska optimizacija akvizicionih struktura i poreska restrukturiranja nakon akvizicije";
    $text6 = "Porez na nekretnine, investicije, porez na imovinu, otuđenje imovine i kapitalnih dobitaka i porez na prihod od zakupa";
    $text7 = "Pitanja poreza na imigraciju i zapošljavanje (porezi na plate, uključujući analizu i optimizaciju poreskih troškova u vezi sa radnom snagom, poreske implikacije planova opcija akcija zaposlenih)";
    $text8 = "Oporezivanje projekata finansiranja, uključujući oporezivanje opšteg kreditiranja, finansiranja projekata, oporezivanje finansijskih instrumenata i derivata i oporezivanje pružalaca finansijskih usluga";
    $text9 = "Savetovanje o dvostrukom oporezivanju";
    $text10 = "Savetovanje o transfernim cenama";
    $text11 = "Zastupanje u poreskim sporovima, uključujući i upravne sporove";
    $text12 = "Zastupanje u krivičnom i prekršajnom postupku za sve vrste poreskih prestupa";
    $text13 = "Porez na dohodak fizičkih lica, uključujući poreze na nasleđe i poklone, poreze na imovinu i poresko strukturiranje ličnog dohotka i poresko strukturiranje ulaganja ličnog dohotka";

    $nepokretnost_label = "Nepokretnosti i izgradnja";
    $korp_label = "Korporativno i privredno pravo, M&A";
    $poresko_label = "Poresko pravo";
    $imigraciono_label = "Imigraciono pravo";
    $int_label = "Intelektualna svojina";
    $radno_label = "Radno pravo";
    $parnica_label = "Parnični i izvršni postupci";
} else {
    $title = "TAX LAW";
    $text = "An indispensable part of any successful business is a clear tax strategy and management In the Tax policy.
     The necessity of constant monitoring of frequent changes in this area creates a need for the active participation
     of all companies, especially those that have their own business based in several territories of different countries.
     <br><br> 
     We provide our clients with a comprehensive Tax Policy compliance service with the aim of creating additional 
     savings during taxation as in cases of regular business operations, as well as during acquisitions from M&A, 
     various types of transactions acquisition and alienation of property and goods.
     <br><br>
    All the above particularly implies:
    ";
    $text1 = "Compliance with Tax regulations";
    $text2 = "Representation before Tax Authorities";
    $text3 = "Tax planning";
    $text4 = "Transaction tax structuring and tax due diligence";
    $text5 = "Tax optimization of acquisition structures and tax restructuring after acquisitions";
    $text6 = "Tax on real estate, investments, property tax, alienation of property and capital gains and rental income tax";
    $text7 = "Immigration and employment tax issues (payroll taxes, including analysis and optimization of tax costs related to labor force, tax implications employee stock option plans)";
    $text8 = "Taxation of financing blog, including taxation of general lending, project financing, taxation of financial instruments and derivatives and taxation of financial service providers";
    $text9 = "Advising on double taxation";
    $text10 = "Consulting on transfer prices";
    $text11 = "Representation in tax disputes, including administrative disputes";
    $text12 = "Representation in criminal and misdemeanor proceedings for all types of tax offenses";
    $text13 = "Personal income tax, including inheritance and gift taxes, taxes on property and tax structuring of personal income and tax structuring of investments of personal income";
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
    <img src="../assets/Poresko%20pravo.jpg" alt="" class="tax-law-img">
    <div class="col-sm-12 tax-box-text">
        <div class="text-center"><h1><?php echo $title; ?></h1></div>
        <br>
        <div>
            <?php echo $text1; ?>
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
            </ul>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-6" onmouseover="reChange(this)" onmouseout="reRestore(this)" id="hover_white">
                <a href="real_estate.php">
                    <img src="../assets/apartment_FILL0_wght400_GRAD200_opsz48.png" class="icons no-hover-img" alt="">
                    <?php echo $nepokretnost_label; ?>
                </a><br>
            </div>
            <div class="col-sm-6" onmouseover="coChange(this)" onmouseout="coRestore(this)" id="hover_white">
                <a href="corporate.php">
                    <img src="../assets/account_balance_FILL0_wght400_GRAD200_opsz48.png" class="icons no-hover-img" alt="">
                    <?php echo $korp_label; ?>
                </a><br>
            </div>

            <div class="col-sm-6" onmouseover="imChange(this)" onmouseout="imRestore(this)" id="hover_white">
                <a href="immigration.php">
                    <img src="../assets/luggage_FILL0_wght400_GRAD200_opsz48.png" class="icons no-hover-img" alt="">
                    <?php echo $imigraciono_label; ?>
                </a><br>
            </div>
            <div class="col-sm-6" onmouseover="intChange(this)" onmouseout="intRestore(this)" id="hover_white">
                <a href="intellectual.php">
                    <img src="../assets/copyright_FILL0_wght400_GRAD200_opsz48.png" class="icons no-hover-img" alt="">
                    <?php echo $int_label; ?>
                </a><br>
            </div>
            <div class="col-sm-6" onmouseover="emChange(this)" onmouseout="emRestore(this)" id="hover_white">
                <a href="employment.php">
                    <img src="../assets/badge_FILL0_wght400_GRAD200_opsz48.png" class="icons no-hover-img" alt="">
                    <?php echo $radno_label; ?>
                </a><br>
            </div>
            <div class="col-sm-6" onmouseover="leChange(this)" onmouseout="leRestore(this)" id="hover_white">
                <a href="litigation_enforcement.php">
                    <img src="../assets/gavel_FILL0_wght400_GRAD200_opsz48.png" class="icons no-hover-img" alt="">
                    <?php echo $parnica_label; ?>
                </a><br>
            </div>
        </div>
    </div>
</div>
<?php include('../helpers/footer.php'); ?>
</body>

</html>

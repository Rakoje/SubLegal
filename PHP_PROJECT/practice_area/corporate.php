<?php include('../helpers/header.php'); ?>
<body>
<?php include('../helpers/navbar.php'); ?>
<?php
$language = $_SESSION['language'];

if ($language == "rs") {
    $title = "KORPORATIVNO I PRIVREDNO PRAVO, M&A";
    $text = "Najprimenjenija grana prava u oblasti poslovanja, prati proces od osnivanja kompanije pa do najsloženijih
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
            <br>";

    $text1 = "Pravne usluge";
    $text2 = "Osnivanje kompanije";
    $text3 = "Sve statusne i druge promene kompanije";
    $text4 = "Zastupanje pred sudovima i drugim državnim organima";
    $text5 = "Priprema dokumentacije za sve vrste radnih odnosa";
    $text6 = "Zastupanje u pregovorima sa klijentima";
    $text7 = "Poresko savetovanje";
    $text8 = "Usaglašavanje sa propisima";
    $text9 = "Pružanje svakodnevne pravne podrške";
    $text10 = "Priprema opštih akata i davanje pravnih mišljenja u vezi sa primenom svih propisa koji se odnose na poslovanje";
    $text11 = "Pripremanje i izrada svih vrsta ugovora u poslovanju";
    $text12 = "Spajanja, pripajanja i likvidacije";
    $text13 = "Dubinska pravna analiza (due diligence)";

    $text14 = "Finansijske usluge i procene";
    $text15 = "Finansijske revizije poslovanja";
    $text16 = "Revizije zarada";
    $text17 = "Izrada „Payroll”-a po outsourse modelu";
    $text18 = "Precene rizika";
    $text19 = "Knjigovodstvene usluge";

    $text20 = "HR usluga";
    $text21 = "Kadriranje";
    $text22 = "Regrutovanje";
    $text23 = "Asistencija prilikom zapošljavanja";
    $text24 = "“Scouting” zaposlenih";
    $text25 = "Izrada karneta za “payroll”";

    $nepokretnost_label = "Nepokretnosti i izgradnja";
    $korp_label = "Korporativno i privredno pravo, M&A";
    $poresko_label = "Poresko pravo";
    $imigraciono_label = "Imigraciono pravo";
    $int_label = "Intelektualna svojina";
    $radno_label = "Radno pravo";
    $parnica_label = "Parnični i izvršni postupci";

} else {
    $title = "CORPORATE AND BUSINESS LAW, M&A";
    $text = "The most applied branch of law in the field of business follows the process since foundation to the most 
    complex processes in development of the companies. The necessity of interweaving more expert areas is crucial for 
    an adequate consulting and successful guidance throughout legal processes that follow the proper development of
    a company, which is exactly what SubLegal is the best at. With significant experience in the M&A field, we provide
    a well-rounded service on mergers and affiliations, as well as all kinds of acquisitions 
    from different areas of business.
    <br><br>
    For many years, we have been providing legal and consulting services to companies and groups operating in Serbia, 
    Montenegro, and Croatia. From their own foundation, we monitor the growth and development of the companies with 
    active participation in transitional and personnel processes they go through and we enable different types of legal 
    services, financial consulting, bookkeeping and HR sector and all kinds of assessments - 'Due diligence' in order 
    to buy or sell business.
    <br><br>
    Our lawyers, accountants, financial experts and HR specialists cover comprehensive assistance in business,
    which includes:
    <br>";
    $text1 = "Legal services";
    $text2 = "Establishment of a company";
    $text3 = "All status and other changes of the company";
    $text4 = "Representation in front of the Courts and other State Bodies";
    $text5 = "Preparation of documentation for all types of employment relationships";
    $text6 = "Representation in negotiations with clients";
    $text7 = "Tax consulting";
    $text8 = "Compliance with regulations";
    $text9 = "Provision of daily legal support";
    $text10 = "Preparation of general acts and giving legal opinions regarding the implementation of all regulations relating to business";
    $text11 = "Preparation and drafting of all types of contracts in business";
    $text12 = "Mergers, acquisitions and liquidations";
    $text13 = "In-depth legal analysis (due diligence)";

    $text14 = "Financial Services and Appraisals";
    $text15 = "Financial audits of operations";
    $text16 = "Salary audits";
    $text17 = "Production of 'Payroll' according to the outsourced model";
    $text18 = "Risk overestimation";
    $text19 = "Accounting services";

    $text20 = "HR service";
    $text21 = "Framing";
    $text22 = "Recruitment";
    $text23 = "Assistance during employment";
    $text24 = "'Scouting' of employees";
    $text25 = "Creation of 'payroll' card";

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
    <img src="../assets/Privredno%20i%20kompanijsko%20pravo,%20M&A.jpg" alt="" class="tax-law-img">
    <div class="col-sm-12 tax-box-text">
        <div class="text-center"><h1><?php echo $title; ?></h1></div>
        <br>
        <div>
            <?php echo $text; ?>
            <?php echo $text1; ?>
            <ul>
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

            <?php echo $text14; ?>
            <ul>
                <li><?php echo $text15; ?></li>
                <li><?php echo $text16; ?></li>
                <li><?php echo $text17; ?></li>
                <li><?php echo $text18; ?></li>
                <li><?php echo $text19; ?></li>
            </ul>

            <?php echo $text20; ?>
            <ul>
                <li><?php echo $text21; ?></li>
                <li><?php echo $text22; ?></li>
                <li><?php echo $text23; ?></li>
                <li><?php echo $text24; ?></li>
                <li><?php echo $text25; ?></li>
            </ul>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-6" onmouseover="reChange(this)" onmouseout="reRestore(this)"  id="hover_white">
                <a href="real_estate.php">
                    <img src="../assets/apartment_FILL0_wght400_GRAD200_opsz48.png" class="icons no-hover-img" alt="">
                    <?php echo $nepokretnost_label; ?>
                </a>
            </div>

            <div class="col-sm-6" onmouseover="taxChange(this)" onmouseout="taxRestore(this)"  id="hover_white">
                <a href="tax_law.php" >
                    <img src="../assets/balance_FILL0_wght400_GRAD200_opsz48.png" class="icons no-hover-img" alt="">
                    <?php echo $poresko_label; ?>
                </a><br>
            </div>

            <div class="col-sm-6" onmouseover="imChange(this)" onmouseout="imRestore(this)" id="hover_white">
                <a href="immigration.php">
                    <img src="../assets/luggage_FILL0_wght400_GRAD200_opsz48.png" class="icons no-hover-img" alt="">
                    <?php echo $imigraciono_label; ?>
                </a><br>
            </div>

            <div class="col-sm-6" onmouseover="intChange(this)" onmouseout="intRestore(this)"  id="hover_white">
                <a href="intellectual.php">
                    <img src="../assets/copyright_FILL0_wght400_GRAD200_opsz48.png" class="icons no-hover-img" alt="">
                    <?php echo $int_label; ?>
                </a><br>
            </div>

            <div class="col-sm-6" onmouseover="emChange(this)" onmouseout="emRestore(this)"  id="hover_white">
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

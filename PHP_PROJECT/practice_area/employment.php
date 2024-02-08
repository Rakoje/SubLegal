<?php include('../helpers/header.php'); ?>
<body>
<?php include('../helpers/navbar.php'); ?>
<?php
$language = $_SESSION['language'];

if ($language == "rs") {
    $title = "RADNO PRAVO";
    $text = "Kao neizostavan segment privrede i korporativnog poslovanja, radni odnosi igraju, prema našem mišljenju,
            najznajčajniju ulogu u postavljanju temelja za uspešno vođenje poslovanja, naročito imajući u vidu
            dinamičnost tržišta radne snage u savremenom svetu i sve veći nedostatak adekvatno kvalifikovanog osoblja.
            <br><br>
            U skladu sa tim je i naš pristup ovoj oblasti vrlo obazriv i široko postavljen, sa velikim predznanjem naših
            advokata o praksi koju prate legislativna rešenja u smislu jako stabilnog statusa zaposlenih i neophodnosti
            pedantnog odnosa na relaciji poslodavac – zapsoleni. S toga izlazimo sa praktičnim rešenjima i primenjivom
            strategijom sa ciljem što jasnijeg i jednostavnijeg utemeljenja radno-pravnih premisa koje imaju za rezultat
            stabilnost i produktivnost unutar kolektiva.
            <br><br>
            Naši klijenti svoje poslovanje baziraju u različitim oblastima, od avioindustrije, građevinarstva, IT-ja,
            nekretnina, telekomunikacija, pa do prehrambene i retail industrije, te pored pravnog stanovišta radnih
            odnosa, prepoznali smo nužnost za pružanjem HR konsultantse usluge po „out source” modelu na koji način
            aktivno doprinosimo stvaranju kolektiva i jačanju ljudskih resursa.
            <br><br>
            Pravna usluga obuhvata:";
    $text1 = "Izrada opštih radno-pravnih akata (kolektivni ugovori, pravilnici o radu i sl)";
    $text2 = "Izrada posebnih radno-pravnih akata (ugovori o radu, sporazumi, rešenja i sl.)";
    $text3 = "Dokumentacija o raskidu";
    $text4 = "Programi podsticaja i beneficija";
    $text5 = "Interne politike i pravilnici zapošljavanja";
    $text6 = "Otpuštanja i restrukturiranja";
    $text7 = "Sprečavanje i rešavanje svih vrsta radnih sporova";
    $text8 = "Vansudska poravnanja";
    $text9 = "Izvršna imenovanja i otpremnine";
    $text10 = "Poslovna imigracija – radne dozvole, boravišne dozvole";
    $text11 = "Lizing zaposlenih";
    $text12 = "Podrška tokom postupaka inspekcije rada";
    $text13 = "Podrška tokom internih disciplinskih postupaka";
    $text14 = "Uzbunjivanje, mobing, savetodavna pitanja o diskriminaciji";
    $text15 = "Zastupanje poslodavca u sudskih i drugim radno-pravnim sporovima";

    $text16 = "HR usluga obuhvata:";
    $text17 = "Kadriranje";
    $text18 = "Regrutovanje";
    $text19 = "Asistencija prilikom zapošljavanja";
    $text20 = "“Scouting” zaposlenih";
    $text21 = "Izrada karneta za “payroll”";

    $nepokretnost_label = "Nepokretnosti i izgradnja";
    $korp_label = "Korporativno i privredno pravo, M&A";
    $poresko_label = "Poresko pravo";
    $imigraciono_label = "Imigraciono pravo";
    $int_label = "Intelektualna svojina";
    $radno_label = "Radno pravo";
    $parnica_label = "Parnični i izvršni postupci";
} else {
    $title = "LABOR LAW";
    $text = "As an indispensable segment of the economy and corporate business, labor relations play, in our opinion,
    the most significant role in laying the foundation for a successful business management, especially considering 
    the dynamism of the labor market in modern world and the growing lack of adequately qualified personnel.
    <br><br>
    Accordingly, our approach to this area is very cautious and broad-based.  Our lawyers’ prior knowledge follows 
    legislative solutions in the sense of strong stable status of employees and the necessity of a meticulous
    relationship between employer and employees. From that we come out with practical and applicable strategy 
    with the aim of establishing labor-legal premises as clearly and simply as possible which result in stability
    and productivity within the collective.
    <br><br>
    Our clients operate in a variety of fields, including aviation, construction, IT, real estate, telecommunications, 
    food and retail industry, and in addition to the legal point of view of labor relations we recognized the need to 
    provide HR consulting services using the 'outsource' model. In this way, we actively contribute to the creation of 
    a collective and strengthen human resources.
    <br><br>
    Legal service include:
    ";

    $text1 = "Drafting labor-legal agreements such as collective agreements and labor regulations.";
    $text2 = "Drafting labor legal acts that are specific to labor (employment contracts, agreements, decisions, etc.).";
    $text3 = "Termination documentation";
    $text4 = "Programs that offer incentives and benefits.";
    $text5 = "Internal employment policies and regulations;";
    $text6 = "The process of redundancy and restructuring;";
    $text7 = "Preventing and resolving all types of labor disputes.";
    $text8 = "Out-of-court settlements;";
    $text9 = "Executive appointments and severance pay;";
    $text10 = "Work and residence permits for business immigration.";
    $text11 = "Recruiting employees;";
    $text12 = "Assistance provided during labor inspection procedures;";
    $text13 = "Assistance during internal disciplinary procedures.";
    $text14 = "Whistle-blowing, mobbing, advisory questions on discrimination;";
    $text15 = "Representing the employer in court and other labor-law disputes.";

    $text16 = "HR service includes:";
    $text17 = "Framing;";
    $text18 = "Recruitment;";
    $text19 = "Assistance during employment;";
    $text20 = "\"Scouting\" of employees;";
    $text21 = "Creating a card for \"payroll\";";

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
    <img src="../assets/Radni%20odnosi.jpg" alt="" class="employ-img">
    <div class="col-sm-12 tax-box-text">
        <div class="text-center"><h1><?php echo $title;?></h1></div>
        <br>
        <div>
            <?php echo $text;?>
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

            <?php echo $text16; ?>
            <ul>
                <li><?php echo $text17; ?></li>
                <li><?php echo $text18; ?></li>
                <li><?php echo $text19; ?></li>
                <li><?php echo $text20; ?></li>
                <li><?php echo $text21; ?></li>
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

            <div class="col-sm-6" onmouseover="coChange(this)" onmouseout="coRestore(this)"  id="hover_white">
                <a href="corporate.php">
                    <img src="../assets/account_balance_FILL0_wght400_GRAD200_opsz48.png" class="icons no-hover-img" alt="">
                    <?php echo $korp_label; ?>
                </a><br>
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

            <div class="col-sm-6" onmouseover="leChange(this)" onmouseout="leRestore(this)" id="hover_white">
                <a href="litigation_enforcement.php">
                    <img src="../assets/gavel_FILL0_wght400_GRAD200_opsz48.png" class="icons no-hover-img" alt="">
                    <?php echo $parnica_label; ?>
                </a><br>
            </div>
        </div>
    </div>
</div>
</div><?php include('../helpers/footer.php'); ?>
</body>

</html>

<?php include('../helpers/header.php'); ?>
<body>
<?php include('../helpers/navbar.php'); ?>
<?php
$language = $_SESSION['language'];

if ($language == "rs") {
    $title = "IMIGRACIONO PRAVO";
    $text = "Svesni toga da postoji toliko raznih aspekata kada porodice ili pojedinci odluče da se presele u drugu
            zemlju, ovoj grani prava pristupamo sa najviše empatije. Proces imigracije često može biti emotivno i teško
            putovanje kako zbog brzo promenljive prirode zakona koji regulišu ovu oblast u Republici Srbiji, tako i zbog
            složenih pravnih pitanja koja se mogu pojaviti u postupcima pred nadležnim organima ili dugog vremena obrade
            zahteva.
            <br><br>
            Bilo da ste pojedinac koji želi da emigrira u Republiku Srbiju ili kompanija koja želi da zaposli radnike
            nerezidente, mi pružamo savete i pravnu pomoć kako bismo vam na najbolji mogući način omogućili da razumete
            složene zahteve i postupke prilikom dobijanja viza, privremenog boravka, odobrenja stalnog nastanjenja i na
            kraju državljanstva.
            <br><br>
            U SubLegal-u, tim za imigraciju ima veliko iskustvo i znanje o imigracionom pravu, stečeno dugogodišnjim
            iskustvom u radu sa vodećim svetskim kompanijama koje su svoje poslovanje odlučile da presele u Republiku
            Srbiju. Pružamo podršku i svakodnevno upravljanje svim vašim potrebama vezanim za imigraciju, radeći sa
            vama kao partner od poverenja.
            <br><br>
            Naša misija je da obezbedimo da ceo proces bude nesmetan i bez stresa jer razumemo koliko je krajnji cilj
            dobijanja vize, boravka ili državljanstva važan za vas, vašu porodicu ili vašu kompaniju.
            Prepoznajemo da je svaki slučaj jedinstven i ponosni smo na personalizovanu i prilagođenu uslugu koju
            pružamo kako bismo zadovoljili vaše specifične potrebe.
            <br><br>
            Pravna usluga obuhvata:";
    $text1 = "Poresko planiranje";
    $text2 = "Savetovanje i zastupanje kompanija prilikom premeštaja zaposlenih u Republiku Srbiju tokom svih faza postupka";
    $text3 = "Pružanje pravnih saveta i zastupanje prilikom aplikacije za sve vrste viza";
    $text4 = "Zastupanje klijenata prilikom aplikacije za odobrenje privremenog boravka";
    $text5 = "Zastupanje klijenata prilikom aplikacije za odobrenje stalnog nastanjenja u Republici Srbiji";
    $text6 = "Zastupanje pred nadležnim organima prilikom aplikacije za Radne dozvole";
    $text7 = "Podrška u svim fazama postupka prilikom sticanja Državljanstva Republike Srbije i Crne Gore";

    $nepokretnost_label = "Nepokretnosti i izgradnja";
    $korp_label = "Korporativno i privredno pravo, M&A";
    $poresko_label = "Poresko pravo";
    $imigraciono_label = "Imigraciono pravo";
    $int_label = "Intelektualna svojina";
    $radno_label = "Radno pravo";
    $parnica_label = "Parnični i izvršni postupci";

} else {
    $title = "IMMIGRATION LAW";
    $text = "We are aware that there are so many different aspects when families or individuals decide to move to 
    another country, and because of that we approach this branch of law with the utmost empathy. The Immigration process
    can often be an emotional and difficult journey because of the rapidly changing nature of the laws that regulate 
    this area in the Republic of Serbia, as well as because of the complex legal issues that may arise in proceedings 
    before competent authorities or long request processing time.
    <br><br>
    Whether you are an individual who wants to immigrate to the Republic of Serbia or a company that wants to hire 
    non-resident workers, we provide advice and legal assistance to help you the best possible way to enable you to 
    understand the complex requirements and procedures involved obtaining visas, temporary residence, approval of 
    permanent residence and finally citizenship.
    <br><br>
    At SubLegal, the immigration team has extensive experience and knowledge of immigration law, gained throughout  
    many years of experience in working with leading world companies which decided to move their business to the 
    Republic of Serbia. We provide support and day-to-day management of all your immigration needs, working with you 
    as a trusted partner.
    <br><br>
    Our mission is to ensure that the entire process goes smoothly and stress-free because we understand how important 
    the ultimate goal of obtaining a visa, residency or citizenship is to you, your family or your company.
    We recognize that each case is unique, and we pride ourselves in personalized and customized service that we provide
    to meet your specific needs.
    <br><br>
    Legal service includes:
";
    $text1 = "Tax planning";
    $text2 = "Advising and representing companies when transferring employees to the Republic of
Serbia during all stages of the procedure";
    $text3 = "Providing legal advice and representation when applying for all types of visas";
    $text4 = "Representation of clients during applications for approval of temporary residence";
    $text5 = "Representation of clients during the application for approval of permanent residence in
Republic of Serbia";
    $text6 = "Representation before the competent authorities when applying for Work Permits";
    $text7 = "Support in all stages of the procedure when acquiring the Citizenship of the Republic
of Serbia and Montenegro";
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
    <img src="../assets/Imigracija.jpg" alt="" class="tax-law-img">
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
            </ul>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-6" onmouseover="reChange(this)" onmouseout="reRestore(this)" id="hover_white">
                <a href="real_estate.php">
                    <img src="../assets/apartment_FILL0_wght400_GRAD200_opsz48.png" class="icons no-hover-img" alt="">
                    <?php echo $nepokretnost_label; ?>
                </a>
            </div>

            <div class="col-sm-6" onmouseover="coChange(this)" onmouseout="coRestore(this)" id="hover_white">
                <a href="corporate.php">
                    <img src="../assets/account_balance_FILL0_wght400_GRAD200_opsz48.png" class="icons no-hover-img" alt="">
                    <?php echo $korp_label; ?>
                </a><br>
            </div>

            <div class="col-sm-6" onmouseover="taxChange(this)" onmouseout="taxRestore(this)" id="hover_white">
                <a href="tax_law.php">
                    <img src="../assets/balance_FILL0_wght400_GRAD200_opsz48.png" class="icons no-hover-img" alt="">
                    <?php echo $poresko_label; ?>
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

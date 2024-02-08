<?php include('../helpers/header.php'); ?>
<body>
<?php include('../helpers/navbar.php'); ?>
<?php
$language = $_SESSION['language'];

if ($language == "rs") {
    $title = "INTELEKTUALNA SVOJINA";
    $text = "Iako relativno nova grana prava, pravo intelektualne svojine ima poseban fokus u
            našoj advokatskoj kancelariji. Ekspanziju prava intelektualne svojine prepoznali smo
            na početku karijere i trudimo se da klijentima prenesemo njen značaj. Danas je taj
            značaj u svakom slučaju veći nego ikada imajući u vidu napredak tehnologije.
            Posebno ističemo to da je jako bitan faktor ekonomskog razvoja za kompanije i
            stvaranja brenda, iz kog razloga je neophodno na vreme zaštiti je.
            <br><br>
            Svojim klijentima savetujemo da intelektualnu svojinu treba štititi kao i bilo koji drugi
            oblik svojine, kako preventivno tako i blagovremenim odgovorima na njenu povredu
            od strane trećih lica ili eventualno svojih zaposlenih. Ona u moderno doba predstavlja
            mehanizam za finansijski razvoj biznisa, te njena neovlašćena upotreba od strane
            konkurencije može da stvori njenu prednost na tržištu i da nanese, umesto ogromne koristi,
            nenadoknadivu štetu njenom nosiocu.
            <br><br>
            Pravna usluga obuhvata:";
    $text1 = "Pokretanje postupka registracije svih prava intelektualne svojine pred nadležnim organima uprave, kako domaćim tako i međunarodnim";
    $text2 = "Pokretanje i vođenje sporova u vezi sa povredom prava intelektualne svojine";
    $text3 = "Davanje pravnih saveta u vezi sa zaštitom prava intelektualne svojine";
    $text4 = "Izrada ugovora koji za cilj imaju adekvatnu i sveobuhvatnu zaštitu ovih prava";

    $nepokretnost_label = "Nepokretnosti i izgradnja";
    $korp_label = "Korporativno i privredno pravo, M&A";
    $poresko_label = "Poresko pravo";
    $imigraciono_label = "Imigraciono pravo";
    $int_label = "Intelektualna svojina";
    $radno_label = "Radno pravo";
    $parnica_label = "Parnični i izvršni postupci";

} else {
    $title = "INTELLECTUAL PROPERTY";
    $text = "Although a relatively new branch of law, intellectual property law has a special focus in our law office. 
    We recognized the expansion of intellectual property rights at the beginning of our career, and we try to convey 
    its importance to the clients. In any case, today, that importance is bigger than ever given the progress of technology.
    We especially emphasize that it is a very important factor in the economic development of the company and the 
    creation of a brand, for which reason it is necessary to protect it at the time.
    <br><br>
    We advise our clients that intellectual property should be protected like any other form of property, both 
    preventively and timely responses to its violation by third parties or possibly by their own employees.  
    In modern times, it represents a mechanism for financial business development.  Its unauthorized use by the 
    competition can create an advantage in the market and inflict and instead of an enormous benefit, create 
    irreparable damage to its bearer. 
    <br><br>
    Legal service includes:
    ";
    $text1 = "Initiation of the procedure of registration of all intellectual property rights before the authorities and administrative bodies, both domestic and foreign;";
    $text2 = "Initiating and managing disputes related to infringement of intellectual property rights.";
    $text3 = "Providing legal advice regarding the protection of intellectual property rights;";
    $text4 = "Drafting of contracts aimed at adequate and comprehensive protection of these rights;";

    $nepokretnost_label = "Real estate and construction";
    $korp_label = "Corporate and business law, M&A";
    $poresko_label = "Tax law";
    $imigraciono_label = "Immigration law";
    $int_label = "Intellectual property";
    $radno_label = "Labor law";
    $parnica_label = "Litigation and execution procedures";

}
?>

<div class="row" style="margin: 0">
    <img src="../assets/Intelektualna%20svojina.jpg" alt="" class="intellectual-img">
    <div class="col-sm-12 intellectual-box-text">
        <div class="text-center"><h1><?php echo $title; ?></h1></div>
        <br>
        <div>
            <?php echo $text; ?>
            <ul>
                <li><?php echo $text1; ?></li>
                <li><?php echo $text2; ?></li>
                <li><?php echo $text3; ?></li>
                <li><?php echo $text4; ?></li>
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

            <div class="col-sm-6" onmouseover="imChange(this)" onmouseout="imRestore(this)" id="hover_white">
                <a href="immigration.php">
                    <img src="../assets/luggage_FILL0_wght400_GRAD200_opsz48.png" class="icons no-hover-img" alt="">
                    <?php echo $imigraciono_label; ?>
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

<?php include('../helpers/header.php'); ?>
<body>
<?php include('../helpers/navbar.php'); ?>
<?php
$language = $_SESSION['language'];

if ($language == "rs") {
    $title = "INTELLECTUAL PROPERTY";
} else {
    $title = "INTELLECTUAL PROPERTY";
}
?>

<div class="row" style="margin: 0">
    <img src="../assets/Intelektualna%20svojina.jpg" alt="" class="intellectual-img">
    <div class="col-sm-12 intellectual-box-text">
        <div class="text-center"><h1>INTELEKTUALNA SVOJINA</h1></div>
        <br>
        <div>
            Iako relativno nova grana prava, pravo intelektualne svojine ima poseban fokus u našoj advokatskoj
            kancelariji.
            Ekspanziju prava intelektualne svojine prepoznali smo na početku karijere i trudimo se da klijentima
            prenesemo
            njen značaj. Danas je taj značaj u svakom slučaju veći nego ikada imajući u vidu napredak tehnologije.
            Posebno
            ističemo to da je jako bitan faktor ekonomskog razvoja za kompanije , rasta poslovanja i konkurentnosti, kao
            i
            pokretačku snaga inovacije, te je potrebno na vreme zaustaviti zloupotrebe i zaštiti svoju intelektualnu
            svojinu.
            <br><br>
            Svojim klijentima savetujemo da intelektualnu svojinu treba štititi kao i bilo koji drugi oblik svojine,
            kako
            preventivno tako i blagovremenim odgovorima na njenu povredu od strane trećih lica ili eventualno svojih
            zaposlenih. Ona u moderno doba predstavlja mehanizam za finansijski razvoj biznisa, te njena neovlašćena
            upotreba od strane konkurencije može da stvori njenu prednost na tržištu i da nanese, umesto ogromne
            koristi,
            nenadoknadivu štetu njenom nosiocu.
            <br><br>
            Pravna usluga obuhvata:
            <br><br>
            <ul>
                <li>Pokretanje postupka registracije svih prava intelektualne svojine pred nadležnim organima uprave, kako
                domaćim tako i međunarodnim</li>
                <li>Pokretanje i vođenje sporova u vezi sa povredom prava intelektualne svojine</li>
                <li>Davanje pravnih saveta u vezi sa zaštitom prava intelektualne svojine</li>
                <li>Izrada ugovora koji za cilj imaju adekvatnu i sveobuhvatnu zaštitu ovih prava</li>
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

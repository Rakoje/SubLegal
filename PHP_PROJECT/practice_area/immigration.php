<?php include('../helpers/header.php'); ?>
<body>
<?php include('../helpers/navbar.php'); ?>
<?php
$language = $_SESSION['language'];

if ($language == "rs") {
    $title = "IMMIGRATION";
} else {
    $title = "IMMIGRATION";
}
?>

<div class="row real-estate-bg" style="margin: 0">
    <img src="../assets/Imigracija.jpg" alt="" class="tax-law-img">
    <div class="col-sm-12 tax-box-text">
        <div class="text-center"><h1>IMIGRACIONO PRAVO</h1></div>
        <br>
        <div>
            Svesni toga da postoji toliko raznih aspekata kada porodice ili pojedinci odluče da se presele u drugu
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
            Pravna usluga obuhvata:
            <ul>
                <li>Poresko planiranje</li>
                <li>Savetovanje i zastupanje kompanija prilikom premeštaja zaposlenih u Republiku Srbiju tokom svih faza
                    postupka</li>
                <li>Pružanje pravnih saveta i zastupanje prilikom aplikacije za sve vrste viza</li>
                <li>Zastupanje klijenata prilikom aplikacije za odobrenje privremenog boravka</li>
                <li>Zastupanje klijenata prilikom aplikacije za odobrenje stalnog nastanjenja u Republici Srbiji</li>
                <li>Zastupanje pred nadležnim organima prilikom aplikacije za Radne dozvole</li>
                <li>Podrška u svim fazama postupka prilikom sticanja Državljanstva Republike Srbije</li>
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

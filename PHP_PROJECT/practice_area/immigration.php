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
        <div class="d-flex"><h1>IMIGRACIJA</h1></div>
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
        <div>
            <a href="expertise.php" style="text-decoration: none"> - OSTALE USLUGE </a>
        </div>
    </div>
</div>
<?php include('../helpers/footer.php'); ?>
</body>

</html>

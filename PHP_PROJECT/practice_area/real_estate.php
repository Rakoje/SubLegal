<?php include('../helpers/header.php'); ?>
<body>
<?php include('../helpers/navbar.php'); ?>
<?php
$language = $_SESSION['language'];

if ($language == "rs") {
    $title = "NEPOKRETNOSTI I GRADNJA";
} else {
    $title = "CONSTRUCTION & REAL ESTATE";
}
?>

<div class="row real-estate-bg" style="margin: 0">
    <img src="../assets/realEstate.jpg" alt="" class="real-estate-img">
    <div class="col-sm-12 real-estate-box-text">
        <div class="d-flex"><h1>NEPOKRETNOST I GRADNJA</h1></div>
        <br>
        <div>
            SubLegal poseduje široko iskustvo u oblasti nekretinina i gradnje u Republici Srbiji i Crnoj Gori, sa
            akcentom na Beograd i crnogorsko primorje. Pružamo celokupnu pravnu uslugu u navedenoj oblasti - od
            pregovora, posredovanja, procene rizika, pa do izrade celokupne dokumetacije kada su u pitanju kupoprodaje,
            investiranje, gradnja, adaptacije, legalizacija, otuđivanje, prenamene i slično, sa posebnim akcentom na
            komunikaciji sa državnim organima koji uređuju oblast nekretnina i izgradnje u regionu Zapadnog balkana.
            Uspešno pružamo uslugu pribavljanja svih vrsta dozvola i druge prateće dokumentacije neophodne za adekvatnu
            realizaciju investicija u građevini.<br><br>
            Pored sveobuhvatnog pravnog dela usluge u građevini, u svom opusu nudimo mogućnost pružanja usluge
            projektnih biroa sa velikim iskustvom u branši, svih vrsta tehničkih asistencija i pronalazaka podizvođača
            kada su u pitanju izvođenje radova, suinvestiranje, nadogradnja, unutrašnje rekonstrukcije, izmene,
            saniranje i adaptacije.<br><br>
            Usluge koje pružamo:
            <ul>
                <li>Pronalaženje podizvođača svih vrsta</li>
                <li>Obezbeđivanje projektnih biroa</li>
                <li>Komunikacija sa državnim organima</li>
                <li>Građevinski / FIDIC ugovori</li>
                <li>Savetovanje za izgradnju i razvoj</li>
                <li>Upravljanje potraživanjima</li>
                <li>Građevinske dozvole</li>
                <li>Zastupanje u postupku legalizacije</li>
                <li>Savetovanje i zastupanje u sudskim, građevinskim Iiarbitražnim sporovima</li>
                <li>Korišćenje i konverzija zemljišta</li>
                <li>Kupovina nepokretnosti, uključujući due diligence i ugovore o kupoprodaji</li>
                <li>Lizing nepokretnosti</li>
                <li>Pomaganje i asistencija u pregovorima</li>
                <li>Pronalaženje lokacija i objekata za gradnju, lizing i kupoprodaju</li>
                <li>Posredovanje</li>
            </ul>
        </div>
        <br>
        <div>
            <a href="expertise.php#dalje" style="text-decoration: none"> - OSTALE USLUGE </a>
        </div>
    </div>
</div>
</div><?php include('../helpers/footer.php'); ?>
</body>

</html>

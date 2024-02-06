<?php include('../helpers/header.php'); ?>
<body>
<?php include('../helpers/navbar.php'); ?>
<?php
$language = $_SESSION['language'];

if ($language == "rs") {
    $title = "EMPLOYMENT";
} else {
    $title = "EMPLOYMENT";
}
?>

<div class="row real-estate-bg" style="margin: 0">
    <img src="../assets/Radni%20odnosi.jpg" alt="" class="employ-img">
    <div class="col-sm-12 tax-box-text">
        <div class="d-flex"><h1>RADNI ODNOSI</h1></div>
        <br>
        <div>
            Kao neizostavan segment privrede i korporativnog poslovanja, radni odnosi igraju, prema našem mišljenju,
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
            Pravna usluga obuhvata:
            <ul>
                <li>Izrada opštih radno-pravnih akata (kolektivni ugovori, pravilnici o radu i sl)</li>
                <li>Izrada posebnih radno-pravnih akata (ugovori o radu, sporazumi, rešenja i sl.)</li>
                <li>Dokumentacija o raskidu</li>
                <li>Programi podsticaja i beneficija</li>
                <li>Interne politike i pravilnici zapošljavanja</li>
                <li>Otpuštanja i restrukturiranja</li>
                <li>Sprečavanje i rešavanje svih vrsta radnih sporova</li>
                <li>Vansudska poravnanja</li>
                <li>Izvršna imenovanja i otpremnine</li>
                <li>Poslovna imigracija – radne dozvole, boravišne dozvole</li>
                <li>Lizing zaposlenih</li>
                <li>Podrška tokom postupaka inspekcije rada</li>
                <li>Podrška tokom internih disciplinskih postupaka</li>
                <li>Uzbunjivanje, mobing, savetodavna pitanja o diskriminaciji</li>
                <li>Zastupanje poslodavca u sudskih i drugim radno-pravnim sporovima</li>
            </ul>
            HR usluga obuhvata:
            <ul>
                <li>Kadriranje</li>
                <li>Regrutovanje</li>
                <li>Asistencija prilikom zapošljavanja</li>
                <li>“Scouting” zaposlenih</li>
                <li>Izrada karneta za “payroll”</li>
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
</div><?php include('../helpers/footer.php'); ?>
</body>

</html>

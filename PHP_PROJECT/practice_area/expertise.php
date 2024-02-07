<?php include('../helpers/header.php'); ?>
<body>
<?php include('../helpers/navbar.php'); ?>
<?php
$language = $_SESSION['language'];

if ($language == "rs") {
    $title = "EXPERTISE";
} else {
    $title = "EXPERTISE";
}
?>

<div class="row expertise-bg" style="margin: 0">
    <div class="col-sm-12 home-box-text">
        <div class="text-center"><h1>EKSPERTIZA</h1></div>
        <br>
        <div>
            Pružamo idealnu kombinaciju striktnog znanja i opuštenog pristupa.
        </div>
        <br>
        <div>
            <a href="#dalje" style="text-decoration: none"> - DALJE</a>
        </div>
    </div>
</div>
<div class="row home-about home-desc" id="dalje">
    <h1 class="text-center">NAŠE USLUGE</h1>
    <div class="col-sm-12">
        <div class="row text-center d-flex justify-content-center" style="padding: 10px">
            <div class="col-sm-3">
                <div class="card card-real-estate" id="hover_white">
                    <a href="real_estate.php">
                        <img src="../assets/apartment_FILL0_wght400_GRAD200_opsz48.png" class="icons no-hover-img"
                             alt="">
                        <img src="../assets/apartment_FILL0_wght400_GRAD200_opsz48 belo.png" class="icons hover-img"
                             alt="">
                        <h2>Nepokretnosti i izgradnja</h2>
                        <div class="limited-text">
                            SubLegal poseduje široko iskustvo u oblasti nekretinina i gradnje u Republici Srbiji i Crnoj
                            Gori, sa akcentom na Beograd i crnogorsko primorje. Pružamo celokupnu pravnu uslugu u
                            navedenoj
                            oblasti - od pregovora, posredovanja, procene rizika, pa do izrade celokupne dokumetacije
                            kada
                            su u pitanju kupoprodaje, investiranje, gradnja, adaptacije, legalizacija, otuđivanje,
                            prenamene
                            i slično, sa posebnim akcentom na komunikaciji sa državnim organima koji uređuju oblast
                            nekretnina i izgradnje u regionu Zapadnog balkana. Uspešno pružamo uslugu pribavljanja svih
                            vrsta dozvola i druge prateće dokumentacije neophodne za adekvatnu realizaciju investicija u
                            građevini.
                            Pored sveobuhvatnog pravnog dela usluge u građevini, u svom opusu nudimo mogućnost pružanja
                            usluge projektnih biroa sa velikim iskustvom u branši, svih vrsta tehničkih asistencija i
                            pronalazaka podizvođača kada su u pitanju izvođenje radova, suinvestiranje, nadogradnja,
                            unutrašnje rekonstrukcije, izmene, saniranje i adaptacije.

                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card card-corporate" id="hover_white">
                    <a href="corporate.php">
                        <img src="../assets/account_balance_FILL0_wght400_GRAD200_opsz48.png" class="icons no-hover-img"
                             alt="">
                        <img src="../assets/account_balance_FILL0_wght400_GRAD200_opsz48 belo.png"
                             class="icons hover-img"
                             alt="">
                        <h2>Korporativno i privredno pravo, M&A</h2>
                        <div class="limited-text">
                            Najprimenjenija grana prava u oblasti poslovanja, prati proces od osnivanja kompanije pa do
                            najsloženijih procesa u ravoju. Neophodnost prepletanja više ekspertskih oblasti je nužna za
                            adekvatan konsalting i uspešno vođenje kroz pravne procese koji prate pravilan razvoj jedne
                            kompanije, u čemu je SubLegal upravo najbolji. Sa značajnim iskustvom u M&A oblasti pružamo
                            zaokruženu uslugu prilikom spajanja i pripajanja, kao i svih vrsta akvizicija iz različitih
                            oblasti poslovanja.
                            Pružamo kako pravne, tako i konsultatske usluge kompanijama i grupacijama dugi niz godina
                            koje
                            posluju na teritoriji Srbije, Crne Gore i Hrvatske. Od njihovog samog osnivanja, pratimo
                            rast i
                            razvoj kompanija sa aktivnim učešćem u tranzicionim i kadrovskim procesima kroz koje prolaze
                            i
                            pružamo im različite vrste usluga iz oblasti pravne usluge, finansisjog savetovanja,
                            knjigovodstva i HR sektora. Pružamo uslugu svih vrsta procena – „Due diligence” u cilju
                            kupovine
                            ili prodaje kompanija.
                            Naši advokati, knjigovođe, finansiski stručnjaci i HR specijalisti pokrivaju sveobuhvatnu
                            asistenciju u poslovanju koja podrazumeva:

                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card card-tax-law" id="hover_white">
                    <a href="tax_law.php">
                        <img src="../assets/balance_FILL0_wght400_GRAD200_opsz48.png" class="icons no-hover-img" alt="">
                        <img src="../assets/balance_FILL0_wght400_GRAD200_opsz48 belo.png" class="icons hover-img"
                             alt="">
                        <h2>Poresko pravo</h2>
                        <div class="limited-text">
                            Neizostavan deo svakog uspešnog biznisa je jasna poreska strategija i rukovođenje u poreskoj
                            politici. Neophodnost konstantnog praćenja čestih promena u ovoj oblasti stvara potrebu za
                            aktivnim učešćem svih kompanija, a naročito onih koji svoje poslovanje baziraju na više
                            teritorija različitih država.
                            Našim klijentima pružamo sveobuhvatnu uslugu usklađivanja poreske politike sa ciljem
                            stvaranja
                            dodatnih ušteda prilikom oporezivanja kako u slučajevima redovnog poslovanja iz delatnosti ,
                            tako i prilikom akvizicija iz M&A, raznih vrsta transakcija sticanja i otuđenja imovine i
                            dobara.

                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card card-immigration" id="hover_white">
                    <a href="immigration.php">
                        <img src="../assets/luggage_FILL0_wght400_GRAD200_opsz48.png" class="icons no-hover-img" alt="">
                        <img src="../assets/luggage_FILL0_wght400_GRAD200_opsz48 belo.png" class="icons hover-img"
                             alt="">
                        <h2>Imigraciono pravo</h2>
                        <div class="limited-text">
                            Svesni toga da postoji toliko raznih aspekata kada porodice ili pojedinci odluče da se
                            presele u
                            drugu zemlju, ovoj grani prava pristupamo sa najviše empatije. Proces imigracije često može
                            biti
                            emotivno i teško putovanje kako zbog brzo promenljive prirode zakona koji regulišu ovu
                            oblast u
                            Republici Srbiji, tako i zbog složenih pravnih pitanja koja se mogu pojaviti u postupcima
                            pred
                            nadležnim organima ili dugog vremena obrade zahteva.
                            Bilo da ste pojedinac koji želi da emigrira u Republiku Srbiju ili kompanija koja želi da
                            zaposli radnike nerezidente, mi pružamo savete i pravnu pomoć kako bismo vam na najbolji
                            mogući
                            način omogućili da razumete složene zahteve i postupke prilikom dobijanja viza, privremenog
                            boravka, odobrenja stalnog nastanjenja i na kraju državljanstva.
                            U SubLegal-u, tim za imigraciju ima veliko iskustvo i znanje o imigracionom pravu, stečeno
                            dugogodišnjim iskustvom u radu sa vodećim svetskim kompanijama koje su svoje poslovanje
                            odlučile da presele u Republiku Srbiju. Pružamo podršku i svakodnevno upravljanje svim vašim
                            potrebama vezanim za imigraciju, radeći sa vama kao partner od poverenja.
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 pb-3">
        <div class="row d-flex justify-content-center text-center animated-div" id="targetDiv2">
            <div class="col-sm-3" id="hover_white">
                <div class="card card-intellectual">
                    <a href="intellectual.php">
                        <img src="../assets/copyright_FILL0_wght400_GRAD200_opsz48.png" class="icons no-hover-img"
                             alt="">
                        <img src="../assets/copyright_FILL0_wght400_GRAD200_opsz48 belo.png" class="icons hover-img"
                             alt="">
                        <h2>Intelektualna svojina</h2>
                        <div class="limited-text">
                            Iako relativno nova grana prava, pravo intelektualne svojine ima poseban fokus u našoj
                            advokatskoj kancelariji. Ekspanziju prava intelektualne svojine prepoznali smo na početku
                            karijere i trudimo se da klijentima prenesemo njen značaj. Danas je taj značaj u svakom
                            slučaju
                            veći nego ikada imajući u vidu napredak tehnologije. Posebno ističemo to da je jako bitan
                            faktor
                            ekonomskog razvoja za kompanije , rasta poslovanja i konkurentnosti, kao i pokretačku snaga
                            inovacije, te je potrebno na vreme zaustaviti zloupotrebe i zaštiti svoju intelektualnu
                            svojinu.
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card card-employment" id="hover_white">
                    <a href="employment.php">
                        <img src="../assets/badge_FILL0_wght400_GRAD200_opsz48.png" class="icons no-hover-img" alt="">
                        <img src="../assets/badge_FILL0_wght400_GRAD200_opsz48 belo.png" class="icons hover-img" alt="">
                        <h2>Radno pravo</h2>
                        <div class="limited-text">Kao neizostavan segment privrede i korporativnog poslovanja, radni
                            odnosi
                            igraju, prema našem mišljenju, najznajčajniju ulogu u postavljanju temelja za uspešno
                            vođenje
                            poslovanja, naročito imajući u vidu dinamičnost tržišta radne snage u savremenom svetu i sve
                            veći nedostatak adekvatno kvalifikovanog osoblja.
                            U skladu sa tim je i naš pristup ovoj oblasti vrlo obazriv i široko postavljen, sa velikim
                            predznanjem naših advokata o praksi koju prate legislativna rešenja u smislu jako stabilnog
                            statusa zaposlenih i neophodnosti pedantnog odnosa na relaciji poslodavac – zapsoleni. S
                            toga
                            izlazimo sa praktičnim rešenjima i primenjivom strategijom sa ciljem što jasnijeg i
                            jednostavnijeg utemeljenja radno-pravnih premisa koje imaju za rezultat stabilnost i
                            produktivnost unutar kolektiva.
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card card-l-e" id="hover_white">
                    <a href="litigation_enforcement.php">
                        <img src="../assets/gavel_FILL0_wght400_GRAD200_opsz48.png" class="icons no-hover-img" alt="">
                        <img src="../assets/gavel_FILL0_wght400_GRAD200_opsz48 belo.png" class="icons hover-img" alt="">
                        <h2>Parnični i izvršni postupci</h2>
                        <div class="limited-text">Kao neizostavan deo uspešne pravne pomoći predstavlja zastupanje
                            klijenata
                            pred domaćim i stranim sudovima i drugim institucijama I državnim organima, te sa ponosom
                            ističemo dugogodišnje iskustvo u zastupanju domaćih i stranih, kako pravnih tako i fizičkih
                            lica u različitim vrstama postupaka pred navedenim organima. Sa posebnom pažnjom I energijom
                            pristupamo svakom pojedinačnom slučaju u cilju uspešnog rešavanja spora, čiji ishodi su
                            neretko
                            od vitalne važnosti za stranku u postupku. Smatramo da je pronalaženje načina da se spor
                            izbegne
                            i aktivno učešće u pregovorima jednako važno kao i zastupanje pred sudom, kako u parničnom,
                            tako
                            i u drugim srodnim vrstama postupaka.
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('../helpers/footer.php'); ?>
</body>

</html>
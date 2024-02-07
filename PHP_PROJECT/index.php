<?php include('helpers/header.php'); ?>
<body>
<?php include('helpers/navbar.php'); ?>

<?php
$language = $_SESSION['language'];

if ($language == "rs") {
    $fight_label = "BORIMO SE ZA VAŠU PRAVDU";
    $who_are_we_label = "KO SMO MI?";
    $home_text_label = "SUBLEGAL je advokatska kancelarija specijalizovana u sferi privredno – 
    poslovnog prava sa sedištem u Beogradu, Republika Srbija. Pružamo različite konsultantske 
    usluge domaćim i stranim privrednim društvima koja posluju ili planiraju poslovanje na 
    teritoriji Republike Srbije, Crne Gore, Hrvatske i Severne Makedonije, a koje pored pravnih, 
    obuhvataju i širok opseg, finansijskih, knjigovodstvenih i HR usluga na najvišem nivou. ";
} else {
    $fight_label = "WE FIGHT FOR YOUR JUSTICE";
    $who_are_we_label = "WHO ARE WE?";
    $home_text_label = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eget ultricies augue, ut imperdiet nulla. Donec nisi
            neque, hendrerit eu magna a, lobortis molestie ligula. Fusce faucibus non erat vitae pellentesque. Cras eu pretium
            lacus. Ut vitae justo vitae felis molestie tempus. Nullam ac tincidunt velit, in porta metus. Proin at erat vel mauris
            sollicitudin efficitur vitae id nisi. Vestibulum id lectus imperdiet, congue nulla non, porta tellus. Donec scelerisque
            finibus tellus, et blandit justo accumsan eget. Fusce laoreet arcu sem, a efficitur justo tempus id. Maecenas in enim id
            nulla interdum interdum non sit amet nisi. Praesent pellentesque pretium placerat. Integer fermentum, risus in
            vestibulum luctus, metus lacus volutpat ligula, et hendrerit leo felis vel lacus. Sed vel nunc tincidunt, bibendum erat
            quis, mattis mauris. Suspendisse vitae mauris ornare, cursus massa at, facilisis enim.";
}
?>

<div class="row home-bg" style="margin: 0">
    <div class="col-sm-12 home-box-text">
        <div class="text-center"><h1 style="font-size: 30px">DOBRODOŠLI NA MESTO GDE BIZNIS SUSREĆE PRAVO</h1></div>
        <br>
        <div>SUBLEGAL je advokatska kancelarija specijalizovana u sferi privredno – poslovnog prava sa sedištem u
            Beogradu, Republika Srbija. Pružamo različite konsultantske usluge domaćim i stranim privrednim društvima
            koja posluju ili planiraju poslovanje na teritoriji Republike Srbije, Crne Gore, Hrvatske i Severne
            Makedonije, a koje pored pravnih, obuhvataju i širok opseg, finansijskih, knjigovodstvenih i HR usluga na
            najvišem nivou.
        </div>
        <br>
        <div>
            <a href="#targetDiv" style="text-decoration: none"> - PO ČEMU SE RAZLIKUJEMO</a>
        </div>
    </div>
</div>
<div class="row who-are-we">
    <div class="col-sm-12 distinct-box-text animated-div" id="targetDiv">
        <div class="text-center"><h1 style="font-size: 30px">PO ČEMU SE RAZLIKUJEMO?</h1></div>
        <br>
        <div>Pružamo sveobuhvatan obim pravne usluge, usmeren ka praktičnim rešenjima. Naše sveto pismo je temeljan
            pristup problematici i sagledavanje iste iz više uglova – upravo to nam omogućava naš tim sačinjen od
            stručnjaka iz različitih oblasti, kako savremena pravna usluga i treba da izgleda. Klijentima dajemo
            mogućnost pružanja usluge po principu “ključ u ruke” iz svih oblasti naše ekspertize. Takođe, već u ranim
            fazama svakog projekta možemo da uočimo i predočimo potencijalne rizike i sporne situacije. Osnovni cilj je
            rešavanje problema u poslovanju, ali pre svega stvaranje novih prilika i mogućnosti za klijente.
        </div>
        <br>
        <div>
            <a href="#dalje" style="text-decoration: none"> - NAŠE USLUGE</a>
        </div>
    </div>
</div>
<div class="row home-about home-desc" id="dalje">
    <h1 class="text-center">NAŠE USLUGE</h1>
    <div class="col-sm-12">
        <div class="row text-center d-flex justify-content-center" style="padding: 10px">
            <div class="col-sm-3">
                <div class="card card-real-estate" id="hover_white">
                    <a href="practice_area/real_estate.php">
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
                    <a href="practice_area/corporate.php">
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
                    <a href="practice_area/tax_law.php">
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
                    <a href="practice_area/immigration.php">
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
            <div class="col-sm-3">
                <div class="card card-intellectual" id="hover_white">
                    <a href="practice_area/intellectual.php">
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
                    <a href="practice_area/employment.php">
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
                    <a href="practice_area/litigation_enforcement.php">
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
<div class="row home-about home-desc">
    <div class="row d-flex justify-content-center">
        <h1 class="text-center">TIM</h1>
        <div class="col-sm-6 smt">
            <br>
            <img src="../assets/subara.jpg" alt="" class="person-img img-fluid">
            <div class="founder-text-box">
                <h3>ALEKSANDAR ŠUBARIĆ</h3>
                <p>advokat
                    <a href='mailto:aleksandar@sublegal.rs' style='text-decoration: none'>
                        <img src="assets/footer mail.png" alt=""></a>
                    <a href='https://www.linkedin.com/in/aleksandar-%C5%A1ubari%C4%87-64320422a?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app'
                       style='text-decoration: none; color:black'><img src="assets/linkedin-01.png" alt=""></a>

                </p>
                <a href="about/about.php#subara" style="text-decoration: none; text-align: right">DETALJI</a>
            </div>
        </div>
        <div class="col-sm-6 smt">
            <br>
            <img src="../assets/subo.jpg" alt="" class="person-img img-fluid">
            <div class="founder-text-box">
                <h3>NIKOLA SUBOTIĆ</h3>
                <p>advokat
                    <a href='mailto:nikola@sublegal.rs' style='text-decoration: none'><img src="assets/footer mail.png"></a>
                    <a href='https://www.linkedin.com/in/nikola-suboti%C4%87-4518922a9?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app'
                       style='text-decoration: none; color:black'><img src="assets/linkedin-01.png"></a>
                </p>
                <a href="about/about.php#subo" style="text-decoration: none; text-align: right">DETALJI</a>
            </div>
        </div>
    </div>
</div>
<?php include('helpers/footer.php'); ?>
</body>
</html>
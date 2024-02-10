<?php include('helpers/header.php'); ?>
<body>
<?php include('helpers/navbar.php'); ?>

<?php
$language = $_SESSION['language'];

if ($language == "rs") {
    $welcome_label = "MESTO GDE BIZNIS SUSREĆE PRAVO";
    $welcome_text = "SUBLEGAL je advokatska kancelarija specijalizovana u sferi privredno – poslovnog prava sa sedištem u
            Beogradu, Republika Srbija. Pružamo različite konsultantske usluge domaćim i stranim privrednim društvima
            koja posluju ili planiraju poslovanje na teritoriji Republike Srbije, Crne Gore, Hrvatske i Severne
            Makedonije, a koje pored pravnih, obuhvataju i širok opseg, finansijskih, knjigovodstvenih i HR usluga na
            najvišem nivou.";
    $diff_label = " - PO ČEMU SE RAZLIKUJEMO";
    $diff_label2 = "PO ČEMU SE RAZLIKUJEMO? ";
    $diff_text = "Pružamo sveobuhvatan obim pravne usluge, usmeren ka praktičnim rešenjima. Naše sveto pismo je temeljan
            pristup problematici i sagledavanje iste iz više uglova – upravo to nam omogućava naš tim sačinjen od
            stručnjaka iz različitih oblasti, kako savremena pravna usluga i treba da izgleda. Klijentima dajemo
            mogućnost pružanja usluge po principu “ključ u ruke” iz svih oblasti naše ekspertize. Takođe, već u ranim
            fazama svakog projekta možemo da uočimo i predočimo potencijalne rizike i sporne situacije. Osnovni cilj je
            rešavanje problema u poslovanju, ali pre svega stvaranje novih prilika i mogućnosti za klijente.";
    $usl_label = " - NAŠE USLUGE ";
    $usl_label2 = "NAŠE USLUGE";

    $nepokretnost_label = "Nepokretnosti i izgradnja";
    $nepokretnost_text = "SubLegal poseduje široko iskustvo u oblasti nekretinina i gradnje u Republici Srbiji i Crnoj
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
                            unutrašnje rekonstrukcije, izmene, saniranje i adaptacije.";

    $korp_label = "Korporativno i privredno pravo, M&A";
    $korp_text = "Najprimenjenija grana prava u oblasti poslovanja, prati proces od osnivanja kompanije pa do
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
                            asistenciju u poslovanju koja podrazumeva:";

    $poresko_label = "Poresko pravo";
    $poresko_text = "Neizostavan deo svakog uspešnog biznisa je jasna poreska strategija i rukovođenje u poreskoj
                            politici. Neophodnost konstantnog praćenja čestih promena u ovoj oblasti stvara potrebu za
                            aktivnim učešćem svih kompanija, a naročito onih koji svoje poslovanje baziraju na više
                            teritorija različitih država.
                            Našim klijentima pružamo sveobuhvatnu uslugu usklađivanja poreske politike sa ciljem
                            stvaranja
                            dodatnih ušteda prilikom oporezivanja kako u slučajevima redovnog poslovanja iz delatnosti ,
                            tako i prilikom akvizicija iz M&A, raznih vrsta transakcija sticanja i otuđenja imovine i
                            dobara.";

    $imigraciono_label = "Imigraciono pravo";
    $imigraciono_text = "Svesni toga da postoji toliko raznih aspekata kada porodice ili pojedinci odluče da se
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
                            potrebama vezanim za imigraciju, radeći sa vama kao partner od poverenja.";

    $int_label = "Intelektualna svojina";
    $int_text = "Iako relativno nova grana prava, pravo intelektualne svojine ima poseban fokus u našoj
                            advokatskoj kancelariji. Ekspanziju prava intelektualne svojine prepoznali smo na početku
                            karijere i trudimo se da klijentima prenesemo njen značaj. Danas je taj značaj u svakom
                            slučaju
                            veći nego ikada imajući u vidu napredak tehnologije. Posebno ističemo to da je jako bitan
                            faktor
                            ekonomskog razvoja za kompanije , rasta poslovanja i konkurentnosti, kao i pokretačku snaga
                            inovacije, te je potrebno na vreme zaustaviti zloupotrebe i zaštiti svoju intelektualnu
                            svojinu.";

    $radno_label = "Radno pravo";
    $radno_text = "Kao neizostavan segment privrede i korporativnog poslovanja, radni
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
                            produktivnost unutar kolektiva.";

    $parnica_label = "Parnični i izvršni postupci";
    $parnica_text = "Kao neizostavan deo uspešne pravne pomoći predstavlja zastupanje
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
                            i u drugim srodnim vrstama postupaka.";
    $tim_label = "";
    $advokat_label = "Osnivač/Advokat";
    $detalji_label = "DETALJI";
} else {
    $welcome_label = "WHERE BUSINESS MEETS LAW";
    $welcome_text = "SUBLEGAL is a law firm specialized in the field of economics and business law with headquarters
     in  Belgrade, Republic of Serbia. We provide various consulting services to domestic and foreign companies, 
     operating or planning to operate on the territory of the Republic of Serbia, Montenegro, Croatia 
     and North Macedonia, which in addition to legal, also include a wide range of financial, accounting 
     and HR services at the highest level.";
    $diff_label = " - WHAT SETS US APART";
    $diff_label2 = "WHAT SETS US APART? ";
    $diff_text = "We provide a comprehensive range of legal services, focused on practical solutions. 
        Our Holy scripture is a thorough approach to the problem, looking at it from multiple, different angles.
        It is exactly what our team, made up of experts from different fields, enables us to do, what a modern legal
        services, as it should be. We provide our Clients with the 'turnkey' services from all areas of our expertise.
        Already, in the early stages of each project, we can see and present potential and controversial risk situations.
        The main goal is to solve problems in business, but above all, to create new opportunities 
        and possibilites for Clients.
    ";
    $usl_label = " - OUR SERVICES / EXPERTISE ";
    $usl_label2 = " OUR SERVICES / EXPERTISE";

    $nepokretnost_label = "Real estate and construction";
    $nepokretnost_text = "SubLegal has extensive experience in the field of real estate and construction in the
        Republic of Serbia and in Montenegro with a special emphasis on Belgrade and the Montenegrin seaside. We provide 
        the entire legal service in the above-mentioned area - from negotiations, mediation, risk assessment, all over to
        creation of complete documentation regarding sales, investments, construction, adaptations, legalization, alienation,
        repurposing, and other related matters, with special emphasis on communication with the State Authorities
        that regulate the field of real estate and construction in the Western Balkans. We successfully provide
        the service of obtaining all types of permits and other supporting documents necessary for an adequate
        implementation of investments in construction. 
        <br/>
        In addition to the comprehensive legal part of construction services, we offer in our portfolio the possibility
        of providing the services of project bureaus with extensive experience in the branch. All types of technical
        assistance and finding subcontractors for the execution of construction works, co-investment, upgrading, 
        internal reconstructions, changes, rehabilitation and adaptations.
";

    $korp_label = "Corporate and business law, M&A";
    $korp_text = "The most applied branch of law in the field of business follows the process since foundatio
    n to the most complex processes in development of the companies. The necessity of interweaving more expert areas 
    is crucial for an adequate consulting and successful guidance throughout legal processes that follow the proper 
    development of a company, which is exactly what SubLegal is the best at. With significant experience in the M&A field,
    we provide a well-rounded service on mergers and affiliations, as well as all kinds of acquisitions from different 
    areas of business.
    <br/>
    For many years, we have been providing legal and consulting services to companies and groups operating in Serbia,
    Montenegro, and Croatia. From their own foundation, we monitor the growth and development of the companies with 
    active participation in transitional and personnel processes they go through and we enable different types of legal
    services, financial consulting, bookkeeping and HR sector and all kinds of assessments - 'Due diligence' in order 
    to buy or sell business.
    <br/>
    Our lawyers, accountants, financial experts and HR specialists cover comprehensive assistance in business, 
    which includes:
";

    $poresko_label = "Tax law";
    $poresko_text = "An indispensable part of any successful business is a clear tax strategy and management In the Tax
     policy. The necessity of constant monitoring of frequent changes in this area creates a need for the active 
     participation of all companies, especially those that have their own business based in several territories of 
     different countries. We provide our clients with a comprehensive Tax Policy compliance service with the aim of
     creating additional savings during taxation as in cases of regular business operations, as well as during
     acquisitions from M&A, various types of transactions acquisition and alienation of property and goods.";

    $imigraciono_label = "Immigration law";
    $imigraciono_text = "We are aware that there are so many different aspects when families or individuals decide
        to move to another country, and because of that we approach this branch of law with the utmost empathy.
        The Immigration process can often be an emotional and difficult journey because of the rapidly changing nature
        of the laws that regulate this area in the Republic of Serbia, as well as because of the complex legal issues
        that may arise in proceedings before competent authorities or long request processing time.
        <br/>
        Whether you are an individual who wants to immigrate to the Republic of Serbia or a company that wants to hire 
        non-resident workers, we provide advice and legal assistance to help you the best possible way to enable you to 
        understand the complex requirements and procedures involved obtaining visas, temporary residence, approval of 
        permanent residence and finally citizenship.
        <br/>
        At SubLegal, the immigration team has extensive experience and knowledge of immigration law, gained throughout  
        many years of experience in working with leading world companies which decided to move their business to the 
        Republic of Serbia. We provide support and day-to-day management of all your immigration needs, working with you
        as a trusted partner.
        <br/>
        Our mission is to ensure that the entire process goes smoothly and stress-free because we understand how 
        important the ultimate goal of obtaining a visa, residency or citizenship is to you, your family or your company.
        <br/>
        We recognize that each case is unique, and we pride ourselves in personalized and customized service that we 
        provide to meet your specific needs.
        ";

    $int_label = "Intellectual property";
    $int_text = "Although a relatively new branch of law, intellectual property law has a special focus in
        our law office. We recognized the expansion of intellectual property rights at the beginning of our career, 
        and we try to convey its importance to the clients. In any case, today, that importance is bigger than ever 
        given the progress of technology.
        <br/>
        We especially emphasize that it is a very important factor in the economic development of the company and the 
        creation of a brand, for which reason it is necessary to protect it at the time.
        <br/>
        We advise our clients that intellectual property should be protected like any other form of property, 
        both preventively and timely responses to its violation by third parties or possibly by their own employees.  
        In modern times, it represents a mechanism for financial business development.  Its unauthorized use by the 
        competition can create an advantage in the market and inflict and instead of an enormous benefit, create 
        irreparable damage to its bearer.
        ";

    $radno_label = "Labor law";
    $radno_text = "As an indispensable segment of the economy and corporate business, labor relations play,
        in our opinion, the most significant role in laying the foundation for a successful business management,
        especially considering the dynamism of the labor market in modern world and the growing lack of adequately 
        qualified personnel.
     <br/>
        Accordingly, our approach to this area is very cautious and broad-based.  Our lawyers’ prior knowledge follows
        legislative solutions in the sense of strong stable status of employees and the necessity of a meticulous 
        relationship between employer and employees. From that we come out with practical and applicable strategy with
        the aim of establishing labor-legal premises as clearly and simply as possible which result in stability and 
        productivity within the collective.
     <br/>
        Our clients operate in a variety of fields, including aviation, construction, IT, real estate, 
        telecommunications, food and retail industry, and in addition to the legal point of view of labor relations 
        we recognized the need to provide HR consulting services using the 'outsource' model. In this way, we actively 
        contribute to the creation of a collective and strengthen human resources.
";

    $parnica_label = "Litigation and execution procedures";
    $parnica_text = "An essential part of successful legal assistance is representation of clients in front of 
    the domestic and foreign courts and other institutions and State bodies. We are proud to have many years of 
    experience in representing domestic and foreign companies, both legal and individual parties, in various types of 
    procedures before the state authorities.
    <br/>
    We approach each individual case with special attention and energy, successfully providing outcomes which are often 
    of a vital importance for the party in procedure. We believe that finding a way to avoid a dispute is also an 
    active participation in negotiations as important as representation in front of the court, both in litigation and 
    in other related types of proceedings.
    <br/>
    Our extensive experience in negotiations, arbitration, litigation, enforcement and proceedings for determination 
    of a temporary measure before all courts in the Republic of Serbia and Montenegro, will certainly contribute to 
    your business and provide additional security.
    ";
    $tim_label = "";
    $advokat_label = "Founder/Attorney at law";
    $detalji_label = "DETAILS";
}
?>

<div class="row home-bg" style="margin: 0">
    <div class="col-sm-12 home-box-text">
        <div class="text-center"><h1 style="font-size: 30px"><?php echo $welcome_label ?></h1></div>
        <br>
        <div><?php echo $welcome_text ?>
        </div>
        <br>
        <div>
            <a href="#targetDiv" style="text-decoration: none"><?php echo $diff_label ?></a>
        </div>
    </div>
</div>
<div class="row who-are-we">
    <div class="col-sm-12 distinct-box-text animated-div" id="targetDiv">
        <div class="text-center"><h1 style="font-size: 30px"><?php echo $diff_label2 ?></h1></div>
        <br>
        <div><?php echo $diff_text ?>
        </div>
        <br>
        <div>
            <a href="#dalje" style="text-decoration: none"><?php echo $usl_label ?></a>
        </div>
    </div>
</div>
<div class="row home-about home-desc" id="dalje">
    <h1 class="text-center"><?php echo $usl_label2 ?></h1>
    <div class="col-sm-12">
        <div class="row text-center d-flex justify-content-center" style="padding: 10px">
            <div class="col-sm-3">
                <div class="card card-real-estate" id="hover_white">
                    <a href="practice_area/real_estate.php">
                        <img src="../assets/apartment_FILL0_wght400_GRAD200_opsz48.png" class="icons no-hover-img"
                             alt="">
                        <img src="../assets/apartment_FILL0_wght400_GRAD200_opsz48 belo.png" class="icons hover-img"
                             alt="">
                        <h2><?php echo $nepokretnost_label ?></h2>
                        <div class="limited-text">
                            <?php echo $nepokretnost_text ?>
                        </div>
                    </a>
                    <br>
                    <div class="d-flex justify-content-end">
                        <a href="practice_area/real_estate.php" style="color: #4147c0">see more...</a>
                    </div>
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
                        <h2><?php echo $korp_label ?></h2>
                        <div class="limited-text">
                            <?php echo $korp_text ?>
                        </div>
                    </a>
                    <br>
                    <div class="d-flex justify-content-end">
                        <a href="practice_area/corporate.php" style="color: #4147c0">see more...</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card card-tax-law" id="hover_white">
                    <a href="practice_area/tax_law.php">
                        <img src="../assets/balance_FILL0_wght400_GRAD200_opsz48.png" class="icons no-hover-img" alt="">
                        <img src="../assets/balance_FILL0_wght400_GRAD200_opsz48 belo.png" class="icons hover-img"
                             alt="">
                        <h2><?php echo $poresko_label ?></h2>
                        <div class="limited-text">
                            <?php echo $poresko_text ?>
                        </div>
                    </a>
                    <br>
                    <div class="d-flex justify-content-end">
                        <a href="practice_area/tax_law.php" style="color: #4147c0">see more...</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card card-immigration" id="hover_white">
                    <a href="practice_area/immigration.php">
                        <img src="../assets/luggage_FILL0_wght400_GRAD200_opsz48.png" class="icons no-hover-img" alt="">
                        <img src="../assets/luggage_FILL0_wght400_GRAD200_opsz48 belo.png" class="icons hover-img"
                             alt="">
                        <h2><?php echo $imigraciono_label ?></h2>
                        <div class="limited-text">
                            <?php echo $imigraciono_text ?>
                        </div>
                        <br>
                        <div class="d-flex justify-content-end">
                            <a href="practice_area/immigration.php" style="color: #4147c0">see more...</a>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 pb-3">
        <div class="row d-flex justify-content-center text-center"  style="padding: 10px">
            <div class="col-sm-3">
                <div class="card card-intellectual" id="hover_white">
                    <a href="practice_area/intellectual.php">
                        <img src="../assets/copyright_FILL0_wght400_GRAD200_opsz48.png" class="icons no-hover-img"
                             alt="">
                        <img src="../assets/copyright_FILL0_wght400_GRAD200_opsz48 belo.png" class="icons hover-img"
                             alt="">
                        <h2><?php echo $int_label ?></h2>
                        <div class="limited-text">
                            <?php echo $int_text ?>
                        </div>
                    </a>
                    <br>
                    <div class="d-flex justify-content-end">
                        <a href="practice_area/intellectual.php" style="color: #4147c0">see more...</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card card-employment" id="hover_white">
                    <a href="practice_area/employment.php">
                        <img src="../assets/badge_FILL0_wght400_GRAD200_opsz48.png" class="icons no-hover-img" alt="">
                        <img src="../assets/badge_FILL0_wght400_GRAD200_opsz48 belo.png" class="icons hover-img" alt="">
                        <h2><?php echo $radno_label ?></h2>
                        <div class="limited-text"><?php echo $radno_text ?>
                        </div>
                    </a>
                    <br>
                    <div class="d-flex justify-content-end">
                        <a href="practice_area/employment.php" style="color: #4147c0">see more...</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card card-l-e" id="hover_white">
                    <a href="practice_area/litigation_enforcement.php">
                        <img src="../assets/gavel_FILL0_wght400_GRAD200_opsz48.png" class="icons no-hover-img" alt="">
                        <img src="../assets/gavel_FILL0_wght400_GRAD200_opsz48 belo.png" class="icons hover-img" alt="">
                        <h2><?php echo $parnica_label ?></h2>
                        <div class="limited-text"><?php echo $parnica_text ?>
                        </div>
                    </a>
                    <br>
                    <div class="d-flex justify-content-end">
                        <a href="practice_area/litigation_enforcement.php" style="color: #4147c0">see more...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row home-about home-desc">
    <div class="row d-flex justify-content-center animated-div" id="targetDiv2">
        <h1 class="text-center"><?php echo $tim_label ?></h1>
        <div class="col-sm-6 smt">
            <br>
            <img src="../assets/subara.jpg" alt="" class="person-img img-fluid">
            <div class="founder-text-box">
                <h3>ALEKSANDAR ŠUBARIĆ</h3>
                <p><?php echo $advokat_label ?>
                    <a href='mailto:aleksandar@sublegal.rs' style='text-decoration: none'>
                        <img src="assets/footer mail.png" alt=""></a>
                    <a href='https://www.linkedin.com/in/aleksandar-%C5%A1ubari%C4%87-64320422a?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app'
                       style='text-decoration: none; color:black'><img src="assets/linkedin-01.png" alt=""></a>

                </p>
                <a href="about/about.php#subara"
                   style="text-decoration: none; text-align: right"><?php echo $detalji_label ?></a>
            </div>
        </div>
        <div class="col-sm-6 smt">
            <br>
            <img src="../assets/subo.jpg" alt="" class="person-img img-fluid">
            <div class="founder-text-box">
                <h3>NIKOLA SUBOTIĆ</h3>
                <p><?php echo $advokat_label ?>
                    <a href='mailto:nikola@sublegal.rs' style='text-decoration: none'><img src="assets/footer mail.png"></a>
                    <a href='https://www.linkedin.com/in/nikola-suboti%C4%87-4518922a9?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app'
                       style='text-decoration: none; color:black'><img src="assets/linkedin-01.png"></a>
                </p>
                <a href="about/about.php#subo"
                   style="text-decoration: none; text-align: right"><?php echo $detalji_label ?></a>
            </div>
        </div>
    </div>
</div>
<?php include('helpers/footer.php'); ?>
</body>
</html>
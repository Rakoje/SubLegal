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
        <div class="d-flex"><h1>DOBRODOŠLI</h1></div>
        <br>
        <div>SUBLEGAL je advokatska kancelarija specijalizovana u sferi privredno – poslovnog prava sa sedištem u
            Beogradu, Republika Srbija. Pružamo različite konsultantske usluge domaćim i stranim privrednim društvima
            koja posluju ili planiraju poslovanje na teritoriji Republike Srbije, Crne Gore, Hrvatske i Severne
            Makedonije, a koje pored pravnih, obuhvataju i širok opseg, finansijskih, knjigovodstvenih i HR usluga na
            najvišem nivou.
        </div>
        <br>
        <div>
            <a href="about/about.php" style="text-decoration: none"> - NAŠ TIM</a>
        </div>
    </div>
</div>
<div class="row who-are-we">
    <div class="col-sm-12 distinct-box-text animated-div" id="targetDiv">
        <div class="d-flex"><h1>PO ČEMU SE RAZLIKUJEMO?</h1></div>
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
            <a href="practice_area/expertise.php" style="text-decoration: none"> - NAŠE USLUGE</a>
        </div>
    </div>
</div>
<div class="row home-about home-desc animated-div" id="targetDiv2">
    <h1 class="text-center">UPOZNAJTE OSNIVAČE</h1>
    <div class="row d-flex justify-content-center">
        <div class="col-sm-6 smt">
            <br>
            <img src="../assets/subara.jpg" alt="" class="person-img img-fluid">
            <div class="founder-text-box">
                <h3>ALEKSANDAR ŠUBARIĆ</h3>
                <p>advokat</p>
            </div>
        </div>
        <div class="col-sm-6 smt">
            <br>
            <img src="../assets/subara.jpg" alt="" class="person-img img-fluid">
            <div class="founder-text-box">
                <h3>NIKOLA SUBOTIĆ</h3>
                <p>advokat</p>
            </div>
        </div>
    </div>
</div>
<?php include('helpers/footer.php'); ?>
</body>
</html>
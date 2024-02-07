<?php include('../helpers/header.php'); ?>
<body>
<?php include('../helpers/navbar.php'); ?>

<?php
$language = $_SESSION['language'];

if ($language == "rs") {
    $title_label = "O NAMA";
    $founders_label = "TIM";
    $attorney_of_law_label = "osnivač/advokat";
    $subo_text = "Nikola je  jedan od osnivača SubLegal advokatske kancelarije i konsultantske kuće i poseduje višegodišnje iskustvo 
    u zastupanju klijenata kako u Republici Srbiji tako i u Crnoj Gori.
<br><br><br>Redovno savetuje klijente u oblasti korporativnog, privrednog kao i poreskog prava.  
Posebno je prepoznat po svom pragmatičnom pristupu problemima odnosno rešenjima sa 
akcentom na postupcima koji se tiču nepokretnosti, složenim građevinskim sporovima, 
privrednim sporovima i imigracionim postupcima. 
<br><br><br>Diplomirao je na Pravnom fakultetu Univerziteta u Beogradu i član je advokatske komore Beograda. 
<br><br>
<a href='mailto:nikola@sublegal.rs' style='text-decoration: none'><img src=\"../assets/footer mail.png\"></a> 
<a href='https://www.linkedin.com/in/nikola-suboti%C4%87-4518922a9?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app' style='text-decoration: none; color:black'><img src=\"../assets/linkedin-01.png\"></a>
";
    $subara_text = "Dugogodišnji je advokat i jedan je od osnivača SubLegal advokatske kancelarije i konsultantske kuće. 
<br><br><br>Sa akcentom na korporativno i privredno pravo svoju karijeru je gradio kroz
satupanje domaćih i stranih kompanija i grupacija koje posluju na teritoriji Zapadnog
Balkana. Sa posebnom pažnjom usmerenom na razvoj poslovanja, učestvovao je u
mnogim projektima koji se tiču različitih branši kao što su građevinarstvo, nekretnine,
distribucija, avioindustrija, transport, retail i prehrambena industrija. Vodeći je
konsultant u oblasti M&amp;A.<br><br><br>Diplomirao je na Pravnom fakultetu Univerziteta u Beogradu i član je advokatske komore Beograda.
<br><br>
<a href='mailto:aleksandar@sublegal.rs' style='text-decoration: none'><img src=\"../assets/footer mail.png\"></a> 
<a href='https://www.linkedin.com/in/aleksandar-%C5%A1ubari%C4%87-64320422a?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app' style='text-decoration: none; color:black'><img src=\"../assets/linkedin-01.png\"></a>
";
    $our_team_label = "NAŠ TIM";
    $our_team_desc = "Izaberite ekspertizu koja Vas zanima kako biste upoznali Vašeg kontakta:";
    $choose_label = "Izaberite ekspertizu:";
    $construction_label = "Nepokretnost i gradnja";
    $corp_label = "Korporativno i privredno pravo, M&A";
    $tax_label = "Poresko pravo";
    $immigration_label = "Imigracija";
    $int_label = "Intelektualna svojina";
    $employ_label = "Radni odnosi";
    $litigation_label = "Parnični i izvršni postupci";
} else {
    $title_label = "ABOUT";
    $founders_label = "FOUNDERS";
    $attorney_of_law_label = "founder/attorney of law";
    $subo_text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eget ultricies augue, ut imperdiet nulla. Donec nisi
            neque, hendrerit eu magna a, lobortis molestie ligula. Fusce faucibus non erat vitae pellentesque. Cras eu pretium
            lacus. Ut vitae justo vitae felis molestie tempus. Nullam ac tincidunt velit, in porta metus. Proin at erat vel mauris
            sollicitudin efficitur vitae id nisi. Vestibulum id lectus imperdiet, congue nulla non, porta tellus. Donec scelerisque
            finibus tellus, et blandit justo accumsan eget. Fusce laoreet arcu sem, a efficitur justo tempus id. Maecenas in enim id
            nulla interdum interdum non sit amet nisi. Praesent pellentesque pretium placerat. Integer fermentum, risus in
            vestibulum luctus, metus lacus volutpat ligula, et hendrerit leo felis vel lacus. Sed vel nunc tincidunt, bibendum erat
            quis, mattis mauris. Suspendisse vitae mauris ornare, cursus massa at, facilisis enim.";
    $subara_text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eget ultricies augue, ut imperdiet nulla. Donec nisi
            neque, hendrerit eu magna a, lobortis molestie ligula. Fusce faucibus non erat vitae pellentesque. Cras eu pretium
            lacus. Ut vitae justo vitae felis molestie tempus. Nullam ac tincidunt velit, in porta metus. Proin at erat vel mauris
            sollicitudin efficitur vitae id nisi. Vestibulum id lectus imperdiet, congue nulla non, porta tellus. Donec scelerisque
            finibus tellus, et blandit justo accumsan eget. Fusce laoreet arcu sem, a efficitur justo tempus id. Maecenas in enim id
            nulla interdum interdum non sit amet nisi. Praesent pellentesque pretium placerat. Integer fermentum, risus in
            vestibulum luctus, metus lacus volutpat ligula, et hendrerit leo felis vel lacus. Sed vel nunc tincidunt, bibendum erat
            quis, mattis mauris. Suspendisse vitae mauris ornare, cursus massa at, facilisis enim.";
    $our_team_label = "OUR TEAM";
    $our_team_desc = "Choose Your desired expertise to get the know Your contact:";
    $choose_label = "Choose expertise:";
    $construction_label = "Construction & Real Estate";
    $corp_label = "Corporate & M&A";
    $tax_label = "Tax Law";
    $immigration_label = "Immigration";
    $int_label = "Intellectual Property";
    $employ_label = "Employment";
    $litigation_label = "Litigation & Enforcement";
}
?>
<div class="row about-bg" style="margin: 0">
    <div class="col-sm-12 home-box-text">
        <div class="text-center"><h1>O NAMA</h1></div>
        <br>
        <div>Uz duboko ukorenjene vrednosti integriteta, transparentnosti i odanosti pravdi, članovi
            SubLegal tima posvećeni su ostvarivanju prava i pravde za naše klijente.
        </div>
        <br>
        <div>
            <a href="#targetDiv" style="text-decoration: none"> - NAŠ TIM</a>
        </div>
    </div>
</div>
<div class="row home-about" id="targetDiv">
    <div class="col-sm-12 home-desc">
        <h1 class="text-center"><b><?php echo $founders_label; ?></b></h1>
        <br>
        <br>
    </div>
    <div class="col-sm-4 text-center"">
        <img src="../assets/subara.jpg" alt=""
             class="person-img img-fluid">
    </div>
    <div class="col-sm-8 person-text" id="subara">
        <h2>ALEKSANDAR ŠUBARIĆ</h2> <span><?php echo $attorney_of_law_label; ?></span>
        <hr>
        <p><?php echo $subara_text; ?></p>
    </div>
    <div class="col-sm-4 text-center"><img src="../assets/subo.jpg" alt="" class="person-img img-fluid"></div>
    <div class="col-sm-8 person-text" id="subo">
        <h2>NIKOLA SUBOTIĆ</h2> <span><?php echo $attorney_of_law_label; ?></span>
        <hr>
        <p><?php echo $subo_text; ?></p>
    </div>
</div>
<div class="row home-about">
    <div class="col-sm-12 home-desc text-center animated-div" id="targetDiv2">
        <h1 class="text-center"><b><?php echo $our_team_label; ?></b></h1>
        <?php echo $our_team_desc; ?>
    </div>
    <div class="col-sm-4 text-center"></div>
    <div class="col-sm-4 text-center p-4">
        <select class="form-select pointer-option" id="page_selector" aria-label="example"
                onchange="navigateToSelectedPage()">
            <option selected disabled><?php echo $choose_label; ?></option>
            <option value="1"><?php echo $construction_label; ?></option>
            <option value="2"><?php echo $corp_label; ?></option>
            <option value="4"><?php echo $tax_label; ?></option>
            <option value="5"><?php echo $immigration_label; ?></option>
            <option value="6"><?php echo $int_label; ?></option>
            <option value="7"><?php echo $employ_label; ?></option>
            <option value="8"><?php echo $litigation_label; ?></option>
        </select>
    </div>
    <div class="col-sm-4 text-center"></div>
</div>

<?php include('../helpers/footer.php'); ?>
</body>

</html>
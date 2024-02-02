<?php include('../helpers/header.php'); ?>
<body>
<?php include('../helpers/navbar.php'); ?>

<?php
$language = $_SESSION['language'];

if($language == "rs"){
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
    $comm_label = "Commercial";
    $tax_label = "Tax Law";
    $immigration_label = "Immigration";
    $int_label = "Intellectual Property";
    $employ_label = "Employment";
    $litigation_label = "Litigation & Enforcement";
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
    $comm_label = "Commercial";
    $tax_label = "Tax Law";
    $immigration_label = "Immigration";
    $int_label = "Intellectual Property";
    $employ_label = "Employment";
    $litigation_label = "Litigation & Enforcement";
}
?>
<div class="row home-bg">
    <div class="col-sm-12">
        <div class="home-header">
            <div class="bottom-to-top-text head-home">
                <?php echo $title_label; ?>
            </div>
        </div>
    </div>
</div>
<div class="row home-about">
    <div class="col-sm-12 home-desc">
        <h1 class="text-center"><b><?php echo $founders_label; ?></b></h1>
        <br>
        <br>
    </div>
    <div class="col-sm-4 text-center"><img src="../assets/person_2.jpg" alt="" class="person-img"></div>
    <div class="col-sm-8 person-text">
        <h2>NIKOLA SUBOTIC</h2> <span><?php echo $attorney_of_law_label; ?></span>
        <hr>
        <p><?php echo $subo_text; ?></p>
    </div>
    <div class="col-sm-4 text-center"><img src="../assets/person_2.jpg" alt="" class="person-img"></div>
    <div class="col-sm-8 person-text">
        <h2>ALEKSANDAR SUBARIC</h2> <span><?php echo $attorney_of_law_label; ?></span>
        <hr>
        <p><?php echo $subara_text; ?></p>
    </div>
</div>
<div class="row home-about">
    <div class="col-sm-12 home-desc text-center">
        <h1 class="text-center"><b><?php echo $our_team_label; ?></b></h1>
        <?php echo $our_team_desc; ?>
    </div>
    <div class="col-sm-4 text-center"></div>
    <div class="col-sm-4 text-center p-4">
        <select class="form-select pointer-option" id="page_selector" aria-label="example" onchange="navigateToSelectedPage()">
            <option selected disabled><?php echo $choose_label; ?></option>
            <option value="1"><?php echo $construction_label; ?></option>
            <option value="2"><?php echo $corp_label; ?></option>
            <option value="3"><?php echo $comm_label; ?></option>
            <option value="4"><?php echo $tax_label; ?></option>
            <option value="5"><?php echo $immigration_label; ?></option>
            <option value="6"><?php echo $int_label; ?></option>
            <option value="7"><?php echo $employ_label; ?></option>
            <option value="8"><?php echo $litigation_label; ?></option>
        </select>
    </div>
    <div class="col-sm-4 text-center"></div>
</div>

<?php include('../helpers/footer.php');?>
</body>

</html>
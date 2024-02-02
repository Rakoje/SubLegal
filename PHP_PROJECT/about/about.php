<?php include('../helpers/header.php'); ?>
<body>
<?php include('../helpers/navbar.php'); ?>
<div class="row home-bg">
    <div class="col-sm-12">
        <div class="home-header">
            <div class="bottom-to-top-text head-home">
                ABOUT US
            </div>
        </div>
    </div>
</div>
<div class="row home-about">
    <div class="col-sm-12 home-desc">
        <h1 class="text-center"><b>FOUNDERS</b></h1>
        <br>
        <br>
    </div>
    <div class="col-sm-4 text-center"><img src="../assets/person_2.jpg" alt="" class="person-img"></div>
    <div class="col-sm-8 person-text">
        <h2>NIKOLA SUBOTIC</h2> <span>founder/attorney of law</span>
        <hr>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eget ultricies augue, ut imperdiet nulla. Donec nisi
            neque, hendrerit eu magna a, lobortis molestie ligula. Fusce faucibus non erat vitae pellentesque. Cras eu pretium
            lacus. Ut vitae justo vitae felis molestie tempus. Nullam ac tincidunt velit, in porta metus. Proin at erat vel mauris
            sollicitudin efficitur vitae id nisi. Vestibulum id lectus imperdiet, congue nulla non, porta tellus. Donec scelerisque
            finibus tellus, et blandit justo accumsan eget. Fusce laoreet arcu sem, a efficitur justo tempus id. Maecenas in enim id
            nulla interdum interdum non sit amet nisi. Praesent pellentesque pretium placerat. Integer fermentum, risus in
            vestibulum luctus, metus lacus volutpat ligula, et hendrerit leo felis vel lacus. Sed vel nunc tincidunt, bibendum erat
            quis, mattis mauris. Suspendisse vitae mauris ornare, cursus massa at, facilisis enim.</p>
    </div>
    <div class="col-sm-4 text-center"><img src="../assets/person_2.jpg" alt="" class="person-img"></div>
    <div class="col-sm-8 person-text">
        <h2>ALEKSANDAR SUBARIC</h2> <span>founder/attorney of law</span>
        <hr>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eget ultricies augue, ut imperdiet nulla. Donec nisi
            neque, hendrerit eu magna a, lobortis molestie ligula. Fusce faucibus non erat vitae pellentesque. Cras eu pretium
            lacus. Ut vitae justo vitae felis molestie tempus. Nullam ac tincidunt velit, in porta metus. Proin at erat vel mauris
            sollicitudin efficitur vitae id nisi. Vestibulum id lectus imperdiet, congue nulla non, porta tellus. Donec scelerisque
            finibus tellus, et blandit justo accumsan eget. Fusce laoreet arcu sem, a efficitur justo tempus id. Maecenas in enim id
            nulla interdum interdum non sit amet nisi. Praesent pellentesque pretium placerat. Integer fermentum, risus in
            vestibulum luctus, metus lacus volutpat ligula, et hendrerit leo felis vel lacus. Sed vel nunc tincidunt, bibendum erat
            quis, mattis mauris. Suspendisse vitae mauris ornare, cursus massa at, facilisis enim.</p>
    </div>
</div>
<div class="row home-about">
    <div class="col-sm-12 home-desc text-center">
        <h1 class="text-center"><b>OUR TEAM</b></h1>
        Choose Your desired expertise to get the know Your contact:
    </div>
    <div class="col-sm-4 text-center"></div>
    <div class="col-sm-4 text-center p-4">
        <select class="form-select pointer-option" id="page_selector" aria-label="example" onchange="navigateToSelectedPage()">
            <option selected disabled>Choose expertise:</option>
            <option value="1">Construction & Real Estate</option>
            <option value="2">Corporate & M&A</option>
            <option value="3">Commercial</option>
            <option value="4">Tax Law</option>
            <option value="5">Immigration</option>
            <option value="6">Intellectual Property</option>
            <option value="7">Employment</option>
            <option value="8">Litigation & Enforcement</option>
        </select>
    </div>
    <div class="col-sm-4 text-center"></div>
</div>

<?php include('../helpers/footer.php');?>
</body>

</html>
<?php

$language = $_SESSION['language'];
if($language == "rs"){
    $quick_links_label = "Navigacija";
    $home_label = "Početna";
    $about_label = "Naš tim";
    $expertise_label = "Ekspertiza";
    $projects_label = "Projekti";
    $contact_label = "Kontakt";
    $questions_label = "Imate pitanja?";
    $address_label = "Zmaj Jovina 3, 11102 Belgrade";
    $copyright_label = " Copyrights SubLegal 2024. Sva prava zadržana.";
} else {
    $quick_links_label = "Quick links";
    $home_label = "Home";
    $about_label = "About";
    $expertise_label = "Expertise";
    $projects_label = "Projects";
    $contact_label = "Contact";
    $questions_label = "Have questions?";
    $address_label = "Zmaj Jovina 3, 11102 Belgrade";
    $copyright_label = " Copyrights SubLegal 2024. All rights reserved";
}
?>

<footer class="w-100 py-4 flex-shrink-0">
    <div class="container py-4">
        <div class="row gy-4 gx-5">
            <div class="col-lg-6 col-md-6">
                <div class="text-center">
                    <img src="../assets/SS 3.png" alt="" class="footer-logo">
                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                <h4 class="text-white mb-3"><?php echo $quick_links_label ?></h4>
                <ul class="list-unstyled text-muted">
                    <li><a href="../index.php"><?php echo $home_label ?></a></li>
                    <li><a href="../about/about.php"><?php echo $about_label ?></a></li>
                    <li><a href="../practice_area/expertise.php"><?php echo $expertise_label ?></a></li>
                    <li><a href="../projects/projects.php"><?php echo $projects_label ?></a></li>
                    <li><a href="../contact/contact.php"><?php echo $contact_label ?></a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-6">
                <h4 class="text-white mb-3"><?php echo $questions_label ?></h4>
                <ul class="list-unstyled text-muted">
                    <li><img src="../assets/footer%20address%20w.png"><a href="https://maps.app.goo.gl/kFwjXo4EyHMxNSvM9" target="_blank">
                            &nbsp;<?php echo $address_label ?>
                        </a>
                    </li>
                    <li><img src="../assets/footer%20mail%20w.png"><a href="mailto:office@sublegal.rs">&nbsp; office@sublegal.rs</a></li>
                    <li><img src="../assets/footer%20call%20w.png"><a href="tel: +381601560256">&nbsp; +381 60 156 0256</a></li>
                    <li><img src="../assets/footer%20call%20w.png"><a href="tel: +381649355007">&nbsp; +381 64 935 5007</a></li>
                </ul>
            </div>
            <div class="col-sm-12 text-center">
                <p class="small mb-0">&copy; <?php echo $copyright_label ?></p>
                <br>
                <p class="small mb-0">Website:
                    <a href="mailto:andrija.rakojevic.8@gmail.com">Andrija Rakojević</a> &
                    <a href="mailto:terzic.dusan@yahoo.com">Dušan Terzić</a></p>
            </div>
            <!--<div class="col-lg-4 col-md-6">
                <h5 class="text-white mb-3">Newsletter</h5>
                <p class="small text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                <form action="#">
                    <div class="input-group mb-3">
                        <input class="form-control" type="text" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-primary" id="button-addon2" type="button"><i class="fas fa-paper-plane"></i></button>
                    </div>
                </form>
            </div>-->
        </div>
    </div>
</footer>
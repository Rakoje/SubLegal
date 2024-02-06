<?php include('../helpers/header.php'); ?>
<body>
<?php include('../helpers/navbar.php'); ?>

<?php

$language = $_SESSION['language'];

if ($language == "rs") {
    $contact_title_label = "CONTACT";
    $visit_us_label = "LOKACIJA";
    $contact_description_label = "Naša kancelarija se nalazi u srcu Beograda, nedaleko od Trga Republike.";
    $address_label = "Zmaj Jovina 3, 11102 Belgrade";
    $inquiries_label = "UPITI";
    $inquiries_description_label = "Naši advokati su uvek spremni da preuzmu vaše pozive, nemojte se ustručavati da bilo šta pitate.";
    $message_us_label = "MEJL";
    $send_mail_label = "Pošaljite nam brzu i-mejl u vezi Vaših pitanjima, mi ćemo Vam se javiti u najkraćem roku.";
    $contact_us_label = "KONTAKTIRAJTE NAS";
} else {
    $contact_title_label = "CONTACT";
    $visit_us_label = "VISIT US";
    $contact_description_label = "Our office is located in the heart of Belgrade, not far from the Republic Square.";
    $address_label = "Zmaj Jovina 3, 11102 Belgrade";
    $inquiries_label = "INQUIRIES";
    $inquiries_description_label = "Our attorneys are always ready to take your calls, don't hesitate to ask anything";
    $message_us_label = "MESSAGE US";
    $send_mail_label = "Send us a quick e-mail regarding all of Your questions, we will get back to You in no time.";
    $contact_us_label = "FEEL FREE TO CONTACT US";
}

?>

<div class="row contact-bg" style="margin: 0">
    <div class="col-sm-12 home-box-text">
        <div class="d-flex"><h1>KONTAKT</h1></div>
        <br>
        <div> Vaši pravni izazovi su naša strast. U SubLegal-u, posvećeni smo pružanju vrhunskih pravnih usluga uz
            pažljivu pažnju prema individualnim potrebama naših klijenata. Bez obzira da li se suočavate sa pitanjima
            poslovnog prava, imovinskih transakcija ili radnih odnosa, naš tim stručnjaka je
            spreman da vam pruži jasne i efikasne pravne savete.
        </div>
        <br>
        <div>
            <a href="#info" style="text-decoration: none"> - INFORMACIJE</a>
        </div>
    </div>
</div>
<div class="row home-about text-center px-5 py-3" id="info">
    <div class="col-sm-4">
        <div class="card-contact">
            <img src="../assets/contact%20address.png" class="icons no-hover-img" alt="">
            <h2><?php echo $visit_us_label; ?></h2>
            <div><?php echo $contact_description_label; ?></div>
            <br>
            <div><a class="contact-href" href="https://maps.app.goo.gl/kFwjXo4EyHMxNSvM9" target="_blank">
                    <b><?php echo $address_label; ?></b></a></div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card-contact">
            <img src="../assets/contact%20phone.png" class="icons no-hover-img" alt="">
            <h2><?php echo $inquiries_label; ?></h2>
            <div><?php echo $inquiries_description_label; ?></div>
            <br>
            <div><b><a class="contact-href" href="tel: +381601560256">+381 60 156 0256</a></b></div>
            <div><b><a class="contact-href" href="tel: +381649355007">+381 64 935 5007</a></b></div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card-contact">
            <img src="../assets/contact%20mail.png" class="icons no-hover-img" alt="">
            <h2><?php echo $message_us_label; ?></h2>
            <div><?php echo $send_mail_label; ?></div>
            <br>
            <div><b><a class="contact-href" href="mailto:office@sublegal.rs">office@sublegal.rs</a></b></div>
        </div>
    </div>
</div>
<div class="row home-about">
    <div class="col-sm-12 home-desc pb-3">
        <h1><?php echo $contact_us_label; ?></h1>
    </div>
    <div class="col-sm-12 text-center py-3 map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2830.2202084319406!2d20.4574575!3d44.8170783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a7ab2d941769f%3A0x8ce63e9d7a820808!2sZmaj%20Jovina%203%2C%20Beograd%2011102!5e0!3m2!1sen!2srs!4v1706732882222!5m2!1sen!2srs"
                style="border:0;" allowfullscreen="" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>

<?php include('../helpers/footer.php'); ?>
</body>

</html>
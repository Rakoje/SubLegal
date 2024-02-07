<?php include('../helpers/header.php'); ?>
<body>
<?php include('../helpers/navbar.php'); ?>
<?php
include('../db.php');
$res = $pdo->query("
        SELECT image, content_eng, title_eng, content_srb, title_srb, DATE_FORMAT(date, '%d.%m.%Y') date FROM project
        ORDER BY date DESC
        LIMIT 5 ")->fetchAll();

$language = $_SESSION['language'];

if ($language == "rs") {
    $latest_label = "LATEST PROJECTS";
    $latest_link = "https://" . $res[0]['content_srb'];
} else {
    $latest_label = "LATEST PROJECTS";
    $latest_link = "https://" . $res[0]['content_eng'];
}

?>
<div class="row project-bg" style="margin: 0">
    <div class="col-sm-12 home-box-text">
        <div class="text-center"><h1 style="font-size: 25px">POSLEDNJI PROJEKAT</h1></div>
        <div class="row ">
            <div class="col-sm-12">
                <!-- Project Cards -->
                <?php
                if ($language == "rs") { ?>
                    <a href="<?php echo $latest_link ?>" style="text-decoration: none; color:black">
                        <div class="m-3 project-card">
                            <img src="<?php echo $res[0]['image']; ?>" class="card-img-top" alt="Project Image">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $res[0]['title_srb'] ?></h5>
                                <a href="<?php echo $latest_link; ?>" style="text-decoration: none"
                                   class="card-text"><?php echo $res[0]['content_srb'] ?></a>
                            </div>
                        </div>
                    </a>
                <?php } else { ?>
                    <a href="<?php echo $latest_link ?>" style="text-decoration: none; color:black">
                        <div class="card m-3 project-card">
                            <img src="<?php echo $res[0]['image']; ?>" class="card-img-top" alt="Project Image">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $res[0]['title_eng'] ?></h5>
                                <a href="<?php echo $latest_link; ?>" style="text-decoration: none"
                                   class="card-text"><?php echo $res[0]['content_eng'] ?></a>
                            </div>
                        </div>
                    </a>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<div class="container" id="dalje">

</div>
<?php include('../helpers/footer.php'); ?>
</body>

</html>
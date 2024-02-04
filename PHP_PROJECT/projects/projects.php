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

if($language == "rs"){
    $latest_label = "LATEST PROJECTS";
} else {
    $latest_label = "LATEST PROJECTS";
}
?>
<div class="row home-bg">
    <div class="col-sm-12">
        <div class="home-header">
            <div class="bottom-to-top-text head-home">
                PROJECTS
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row ">
        <div class="col-sm-12">
            <h1 class="home-desc text-center"><b>LATEST PROJECTS</b></h1>
        <!-- Project Cards -->
            <?php foreach($res as $row){
                if($language == "rs"){ ?>
                <div class="card m-3 project-card">
                    <img src="<?php echo $row['image']; ?>" class="card-img-top" alt="Project Image">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['title_srb'] ?></h5>
                        <p class="card-text"><small class="text-muted"><?php echo $row['date'] ?></small></p>
                        <p class="card-text"><?php echo $row['content_srb'] ?></p>
                    </div>
                </div>
            <?php } else { ?>
                <div class="card m-3 project-card">
                    <img src="<?php echo $row['image']; ?>" class="card-img-top" alt="Project Image">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['title_eng'] ?></h5>
                        <p class="card-text"><small class="text-muted"><?php echo $row['date'] ?></small></p>
                        <p class="card-text"><?php echo $row['content_eng'] ?></p>
                    </div>
                </div>
            <?php }
            } ?>
    </div>
    </div>
</div>
<?php include('../helpers/footer.php');?>
</body>

</html>
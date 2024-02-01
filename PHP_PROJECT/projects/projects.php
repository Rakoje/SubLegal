<?php include('../helpers/header.php'); ?>
<body>
<?php include('../helpers/navbar.php'); ?>
<?php
include('../db.php');
$res = $pdo->query("
        SELECT image, content_eng, title_eng, DATE_FORMAT(date, '%d.%m.%Y') date FROM project
        ORDER BY date DESC
        LIMIT 5 ")->fetchAll();
?>
<div class="row home-bg">
    <div class="col-sm-12">
        <div class="home-header">
            <div class="bottom-to-top-text head-home">
                LATEST PROJECTS
            </div>
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="row">
        <!-- Project Cards -->
            <?php foreach($res as $row){?>
                <div class="card mb-3 project-card">
                    <img src="<?php echo $row['image']; ?>" class="card-img-top" alt="Project Image">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['title_eng'] ?></h5>
                        <p class="card-text"><?php echo $row['content_eng'] ?></p>
                        <p class="card-text"><small class="text-muted"><?php echo $row['date'] ?></small></p>
                    </div>
                </div>
            <?php } ?>
    </div>
</div>
<?php include('../helpers/footer.php');?>
</body>

</html>
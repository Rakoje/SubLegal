<?php include('../helpers/header.php'); ?>
<body>
<?php include('../helpers/navbar.php'); ?>
<?php
include('../db.php');
$res = $pdo->query("
        SELECT image, content_eng, title_eng, content_srb, title_srb, DATE_FORMAT(date, '%d.%m.%Y') date FROM project
        ORDER BY date DESC
        LIMIT 5 ")->fetchAll();

$res_b = $pdo->query("
        SELECT id, image, content_eng, title_eng, content_srb, title_srb, DATE_FORMAT(date, '%d.%m.%Y') date FROM blog
        ORDER BY date DESC ")->fetchAll();

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
                        <div class=" m-3 project-card">
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
                        <div class=" m-3 project-card">
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
    <div class = "row">
        <div class="col-sm-12 home-desc">
            <h1 class="text-center"><b><?php echo "BLOG"; ?></b></h1>
        </div>
    </div>
    <?php
    $i = 0;
    $closed = false;
    $open = false;
    foreach($res_b as $row){
    ?>
    <?php if($i%2 == 0){
        $open = true;
        //svaki red ima 2 bloga -> promijeniti ovo i col-sm ako treba vise ili manje?>
    <div class = "row">
    <?php } ?>
        <div class="col-sm-6">
            <!-- Blog Cards -->
            <?php
            if ($language == "rs") { ?>
                    <div class="m-3 blog-card">
                        <img src="<?php echo $row['image']; ?>" class="card-img-top" alt="Project Image">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['title_srb'] ?></h5>
                            <p class="card-text"><?php echo $row['content_srb'] ?></p>
                            <?php if(isset($_SESSION['logged']) && $_SESSION['logged']){ ?>
                                <div>
                                    <button class="btn btn-danger" onClick="deleteBlog('<?php echo $row['id'];?>')">DELETE</button>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
            <?php } else { ?>
                    <div class="m-3 blog-card">
                        <img src="<?php echo $row['image']; ?>" class="card-img-top" alt="Project Image">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['title_eng'] ?></h5>
                            <p class="card-text"><?php echo $row['content_eng'] ?></p>
                            <?php if(isset($_SESSION['logged']) && $_SESSION['logged']){ ?>
                                <button class="btn btn-danger" onClick="deleteBlog('<?php echo $row['id'];?>')">DELETE</button>
                            <?php } ?>
                        </div>
                    </div>
            <?php } ?>
        </div>
    <?php
        $i++;
        if($i%2 == 0){
            $closed = true;?>
    </div>
    <?php } ?>
<?php }
    if($closed == false and $open == true){ ?>
    </div>
    <?php }?>
</div>
<?php include('../helpers/footer.php'); ?>
</body>

</html>
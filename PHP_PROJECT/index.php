<?php include('helpers/header.php'); ?>
<body>
<?php include('helpers/navbar.php'); ?>

<?php
    $language = $_SESSION['language'];

    if($language == "rs"){
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

<div class="row home-bg">
    <div class="col-sm-12">
        <div class="home-header">
            <div class="bottom-to-top-text head-home">
                <?php echo $fight_label; ?>
                <!--<div class="subhead-home">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium facere officiis in quo,
                    corporis quasi.
                </div>-->
            </div>
        </div>
    </div>
</div>
<div class="row home-about">
    <div class="col-sm-12 home-desc">
        <h1><?php echo $who_are_we_label; ?></h1>
        <p class="p-3"> <?php echo $home_text_label; ?></p>
    </div>
</div>
<?php include('helpers/footer.php'); ?>
</body>
</html>
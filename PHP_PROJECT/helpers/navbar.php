<?php
$admin_href = "../admin/login.php";
$admin_name = "ADMIN";
$language = $_SESSION['language'];
if(isset($_SESSION['logged']) && $_SESSION['logged']){
    $admin_href = "../admin/new_project.php";
    if($language == "rs") {
        $admin_name = "NOVI PROJEKAT";
    } else {
        $admin_name = "NEW PROJECT";
    }
}


if($language == "rs"){
    $home_label = "POČETNA";
    $about_label = "O NAMA";
    $expertise_label = "EKSPERTIZA";
    $projects_label = "PROJEKTI";
    $contact_label = "KONTAKT";
} else {
    $home_label = "HOME";
    $about_label = "ABOUT";
    $expertise_label = "EXPERTISE";
    $projects_label = "PROJECTS";
    $contact_label = "CONTACT";
}
?>

<nav class="navbar navbar-expand-lg navbar-light p-3 py-3 text-center">
    <div class="container-fluid">
        <a class="navbar-brand pl-5" href="../index.php"><img src="../assets/SS 1.png" height="160px" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class=" collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto ">
                <li class="nav-item">
                    <a class="nav-link mx-2" href="../index.php"><div class="x-s"><?php echo $home_label ?></div></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="../about/about.php"><?php echo $about_label ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="../practice_area/expertise.php"><?php echo $expertise_label ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="../projects/projects.php"><?php echo $projects_label ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="../contact/contact.php"><?php echo $contact_label ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="<?php echo $admin_href;?>"><?php echo $admin_name; ?></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link mx-2" style="<?php if($language == "rs"){ echo 'display:none';} ?>" id="rs_lang" href="#">RS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" style="<?php if($language == "eng"){ echo 'display:none';} ?>" id="eng_lang" href="#">ENG</a>
                </li>
                <!--<li class="nav-item dropdown">
                    <a class="nav-link mx-2 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Company
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Blog</a></li>
                        <li><a class="dropdown-item" href="#">About Us</a></li>
                        <li><a class="dropdown-item" href="#">Contact us</a></li>
                    </ul>
                </li>-->
            </ul>
        </div>
    </div>
</nav>
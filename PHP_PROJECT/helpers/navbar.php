<?php
$admin_href = "../admin/login.php";
$admin_name = "ADMIN";
if(isset($_SESSION['logged']) && $_SESSION['logged']){
    $admin_href = "../admin/new_project.php";
    $admin_name = "NEW PROJECT";
}

?>

<nav class="navbar navbar-expand-lg navbar-light p-3 py-3">
    <div class="container-fluid">
        <a class="navbar-brand pl-5" href="../index.php"><img src="../assets/SS 1.png" height="160px" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class=" collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto ">
                <li class="nav-item">
                    <a class="nav-link mx-2" href="../index.php"><div>HOME</div></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" aria-current="page" href="../about/about.php">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="../practice_area/practice_area.php">EXPERTISE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="../projects/projects.php">PROJECTS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="../contact/contact.php">CONTACT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="<?php echo $admin_href;?>"><?php echo $admin_name; ?></a>
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
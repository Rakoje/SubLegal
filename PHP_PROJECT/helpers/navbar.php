<?php
$admin_href = "../admin/login.php";

if(isset($_SESSION['logged']) && $_SESSION['logged']) $admin_href = "../admin/new_project.php";
?>

<nav class="navbar navbar-expand-lg navbar-light p-3 py-3">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="../assets/SS 7.png" height="60px" alt=""><img src="../assets/text logo.png" height="60px" alt=""></a>
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
                    <a class="nav-link mx-2" href="../practice_area/practice_area.php">PRACTICE AREA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="../contact/contact.php">PROJECTS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="../contact/contact.php">CONTACT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="<?php echo $admin_href;?>">ADMIN</a>
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
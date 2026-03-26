<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <title>King George Inter College</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" />
</head>

<body style="padding-top: 90px;">

<?php
$page = basename($_SERVER['PHP_SELF']);
?>

<!-- navbar start -->
<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">

    <div class="container-fluid">

        <a class="navbar-brand" href="index.php">
            <img src="assets/img/logo_kgic.png" alt="logo" height="60" width="80">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav mx-auto fw-bold gap-2 gap-lg-4 text-center">

                <!-- Home -->
                <li class="nav-item">
                    <a class="nav-link <?php if($page=='index.php'){echo 'active';} ?>" href="index.php">Home</a>
                </li>

                <!-- About Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown <?php 
                    if($page=='about_kgic.php' || 
                       $page=='md.php' || 
                       $page=='principal.php' || 
                       $page=='barabanki.php' || 
                       $page=='chinhat.php' || 
                       $page=='deva_branch.php'){echo 'active';} 
                    ?>" href="#" role="button" data-bs-toggle="dropdown">
                        About Us
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="about_kgic.php">About KGIC</a></li>
                        <li><a class="dropdown-item" href="md.php">Founder Desk</a></li>
                        <li><a class="dropdown-item" href="principal.php">Chair Person Desk</a></li>
                    </ul>
                </li>

                <!-- Academic -->
                <li class="nav-item">
                    <a class="nav-link <?php if($page=='acdamices.php'){echo 'active';} ?>" href="acdamices.php">Academic</a>
                </li>

                <!-- Gallery -->
                <li class="nav-item">
                    <a class="nav-link <?php if($page=='galleey.php'){echo 'active';} ?>" href="galleey.php">Gallery</a>
                </li>

                <!-- Contact -->
                <li class="nav-item">
                    <a class="nav-link <?php if($page=='contact.php'){echo 'active';} ?>" href="contact.php">Contact Us</a>
                </li>

            </ul>

            <div class="d-flex">
                <a href="assets/img/props.pdf" download class="btn btn-primary">
                    Prospectus
                </a>
            </div>

        </div>
    </div>
</nav>
<!-- navbar end -->

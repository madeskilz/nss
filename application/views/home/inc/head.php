<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?= base_url("assets/img/favicon.png") ?>" />
    <title><?= ($title) ? $title : "Welcome Home" ?> | NorthSouth Security</title>
    <link href="<?= base_url("assets/css/plugins/plugins.css") ?>" rel="stylesheet">
    <link href="<?= base_url("assets/css/style.css") ?>" rel="stylesheet">
    <style>
        .img-full {
            width: 100%;
        }
    </style>
</head>

<body>
    <div id="preloader">
        <div id="preloader-inner"></div>
    </div>
    <header class="header header-sticky header-transparent header-light">
        <div class="top-bar navbar">
            <div class="container">
                <ul class="navbar-nav nav flex-row mr-auto">
                    <li class="nav-item"><a href="mailto:info@northsouthsecurity.net"><i class="icon ion-ios-mail mr-2"></i> info@northsouthsecurity.net</a></li>
                </ul>
                <ul class="navbar-nav flex-row nav ml-auto">
                    <?php if ($this->session->userdata("logged_in") == true) { ?>
                        <li class="nav-item">
                            <a href="<?= base_url("admin") ?>" class="nav-link"><i class="icon ion-ios-person mr-2"></i> <?=$this->session->userdata("username")?></a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url("logout") ?>" class="nav-link"><i class="icon ion-ios-lock mr-2"></i> Logout</a>
                        </li>
                    <?php } else { ?>
                        <li class="nav-item">
                            <a href="<?= base_url("login") ?>" class="nav-link"><i class="icon ion-ios-lock mr-2"></i> Login</a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg yamm">
            <div class="container">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="<?= base_url() ?>">
                    <img src="<?= base_url("assets/img/logo.png") ?>" class="img-fluid logo-dark" alt="">
                    <img src="<?= base_url("assets/img/logo-white.png") ?>" class="img-logo logo-light" alt="">
                </a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item <?= ($active === "home") ? "active" : "" ?>">
                            <a href="<?= base_url() ?>" class=" nav-link">Home</a>
                        </li>
                        <li class="nav-item <?= ($active === "about") ? "active" : "" ?>">
                            <a href="<?= base_url("about") ?>" class="nav-link">About</a>
                        </li>
                        <li class=" dropdown nav-item <?= ($active === "services") ? "active" : "" ?>">
                            <a href="#!" class="dropdown-toggle nav-link" data-toggle="dropdown">Services</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#!">Private Security</a></li>
                                <li><a class="dropdown-item" href="#!">Manned Security</a></li>
                                <li><a class="dropdown-item" href="#!">Cyber Security</a></li>
                                <li><a class="dropdown-item" href="#!">Forensic Analysis</a></li>
                                <li><a class="dropdown-item" href="#!">Personal Security</a></li>
                                <li><a class="dropdown-item" href="#!">Surveillance</a></li>
                                <li><a class="dropdown-item" href="#!">Antivirus Solutions</a></li>
                                <li><a class="dropdown-item" href="#!">Security Training & Consultations</a></li>
                            </ul>
                        </li>
                        <!-- <li class="nav-item <?= ($active === "gallery") ? "active" : "" ?>">
                            <a href="<?= base_url("gallery") ?>" class="nav-link">Gallery </a>
                        </li> -->
                        <li class="dropdown nav-item <?= ($active === "products") ? "active" : "" ?>">
                            <a href="#!" class="dropdown-toggle nav-link" data-toggle="dropdown">Products</a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="#!" class="dropdown-item">Trackers</a></li>
                                <li><a href="#!" class="dropdown-item">Alarm Systems</a></li>
                                <li><a href="#!" class="dropdown-item">Stun Guns</a></li>
                                <li><a href="#!" class="dropdown-item">CCTV</a></li>
                            </ul>
                        </li>
                        <li class="nav-item <?= ($active === "support") ? "active" : "" ?>">
                            <a href="<?= base_url("support") ?>" class="nav-link">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
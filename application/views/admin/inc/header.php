<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?= ($title) ? $title : "Portal" ?> | Administration :: NorthSouth Security</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="North South Security Admin Panel">
    <meta name="msapplication-tap-highlight" content="no">
    <link href="<?= base_url("adminassets/css/main.css") ?>" rel="stylesheet">
    <link rel="icon" href="<?= base_url("assets/img/favicon.png") ?>" />
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo-src">
                    <img src="<?= base_url("assets/img/logo-cms.png") ?>" style="width:90%" />
                </div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>
            <div class="app-header__content">
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <i class="fa fa-user fa-2x"></i>
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <a href="#" tabindex="0" class="dropdown-item">Profile</a>
                                            <div tabindex="-1" class="dropdown-divider"></div>
                                            <a href="<?= base_url("logout") ?>" tabindex="0" class="dropdown-item">Logout</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                        <?= "Admin" ?>
                                    </div>
                                </div>
                                <!-- <div class="widget-content-right header-user-info ml-3">
                                    <button type="button" class="btn-shadow p-1 btn btn-primary btn-sm show-toastr-example">
                                        <i class="fa text-white fa-calendar pr-1 pl-1"></i>
                                    </button>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="app-main">
            <div class="app-sidebar sidebar-shadow">
                <div class="app-header__logo">
                    <div class="logo-src"></div>
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="app-header__menu">
                    <span>
                        <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                        </button>
                    </span>
                </div>
                <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu">
                            <li class="app-sidebar__heading"></li>
                            <li>
                                <a href="<?= base_url("admin") ?>" class="<?= ($active == "home") ? "mm-active" : "" ?>">
                                    <i class="metismenu-icon pe-7s-note2"></i>
                                    Dashboard
                                </a>
                            </li>
                            <li>
                                <a href="#" class="<?= ($active == "about") ? "mm-active" : "" ?>">
                                    <i class="metismenu-icon pe-7s-bookmarks"></i>
                                    About
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul class="<?= ($active == "about") ? "mm-collapse mm-show" : "" ?>">
                                    <li>
                                        <a href="<?= base_url("admin/contact") ?>" class="<?= ($active == "about" && $sub_active == "contact") ? "mm-active" : "" ?>">
                                            <i class="metismenu-icon"></i>
                                            Contact
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url("admin/about") ?>" class="<?= ($active == "about" && $sub_active == "about") ? "mm-active" : "" ?>">
                                            <i class="metismenu-icon">
                                            </i>About Us
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url("admin/values") ?>" class="<?= ($active == "about" && $sub_active == "values") ? "mm-active" : "" ?>">
                                            <i class="metismenu-icon">
                                            </i>Our Values
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="<?= ($active == "services") ? "mm-active" : "" ?>">
                                    <i class="metismenu-icon pe-7s-magic-wand"></i>
                                    Service
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul class="<?= ($active == "services") ? "mm-collapse mm-show" : "" ?>">
                                    <li>
                                        <a href="<?= base_url("admin/services") ?>" class="<?= ($active == "services" && $sub_active == "all") ? "mm-active" : "" ?>">
                                            <i class="metismenu-icon"></i>
                                            All Services
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url("admin/add_service") ?>" class="<?= ($active == "services" && $sub_active == "add") ? "mm-active" : "" ?>">
                                            <i class="metismenu-icon">
                                            </i>Add New Service
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="<?= ($active == "products") ? "mm-active" : "" ?>">
                                    <i class="metismenu-icon pe-7s-paint-bucket"></i>
                                    Products
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul class="<?= ($active == "products") ? "mm-collapse mm-show" : "" ?>">
                                    <li>
                                        <a href="<?= base_url("admin/products") ?>" class="<?= ($active == "products" && $sub_active == "all") ? "mm-active" : "" ?>">
                                            <i class="metismenu-icon"></i>
                                            All Products
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url("admin/add_product") ?>" class="<?= ($active == "products" && $sub_active == "add") ? "mm-active" : "" ?>">
                                            <i class="metismenu-icon">
                                            </i>Add New Product
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="<?= ($active == "settings") ? "mm-active" : "" ?>">
                                    <i class="metismenu-icon pe-7s-settings"></i>
                                    Settings
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul class="<?= ($active == "settings") ? "mm-collapse mm-show" : "" ?>">
                                    <li>
                                        <a href="<?= base_url("admin/settings") ?>" class="<?= ($active == "settings" && $sub_active == "all") ? "mm-active" : "" ?>">
                                            <i class="metismenu-icon"></i>
                                            General Settings
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="<?= base_url("logout") ?>">
                                    <i class="metismenu-icon pe-7s-lock"></i>
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="app-main__outer">
                <div class="app-main__inner">
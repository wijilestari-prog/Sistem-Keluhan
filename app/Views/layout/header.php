<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?= base_url().'assets/images/logo-lampungcerdas.png' ?>">

        <!-- Vector Map css -->
        <link rel="stylesheet" href="<?= base_url(). 'assets/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css' ?>">

        <!-- Datatables css -->
        <link href="<?= base_url(). 'assets/vendor/datatables.net-bs5/css/dataTables.bootstrap5.min.css'?>" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(). 'assets/vendor/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css'?>" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(). 'assets/vendor/datatables.net-fixedcolumns-bs5/css/fixedColumns.bootstrap5.min.css'?>" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(). 'assets/vendor/datatables.net-fixedheader-bs5/css/fixedHeader.bootstrap5.min.css'?>" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(). 'assets/vendor/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css'?>" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(). 'assets/vendor/datatables.net-select-bs5/css/select.bootstrap5.min.css'?>" rel="stylesheet" type="text/css" />

        <!-- Daterangepicker css -->
        <link rel="stylesheet" href="<?= base_url(). 'assets/vendor/daterangepicker/daterangepicker.css' ?>">

        <title><?= $title ?> | Lampung Cerdas</title>

        <!-- Theme Config Js -->
        <script src="<?= base_url(). 'assets/js/config.js' ?>"></script>

        <!-- App css -->
        <link href="<?= base_url(). 'assets/css/app.min.css' ?>" rel="stylesheet" type="text/css" id="app-style" />

        <!-- Icons css -->
        <link href="<?= base_url(). 'assets/css/icons.min.css' ?>" rel="stylesheet" type="text/css" />
        
    </head>

    <body>
        <!-- Begin page -->
        <div class="wrapper">

            
            <!-- ========== Topbar Start ========== -->
            <div class="navbar-custom">
                <div class="topbar container-fluid">
                    <div class="d-flex align-items-center gap-1">

                        <!-- Topbar Brand Logo -->
                        <div class="logo-topbar">
                            <!-- Logo light -->
                            <a href="index.html" class="logo-light">
                                <span class="logo-lg">
                                    <img src="<?= base_url(). 'assets/images/logo.png' ?>" alt="logo">
                                </span>
                                <span class="logo-sm">
                                    <img src="<?= base_url(). 'assets/images/logo-sm.png' ?>" alt="small logo">
                                </span>
                            </a>

                            <!-- Logo Dark -->
                            <a href="index.html" class="logo-dark">
                                <span class="logo-lg">
                                    <img src="<?= base_url(). 'assets/images/logo-dark.png' ?>" alt="dark logo">
                                </span>
                                <span class="logo-sm">
                                    <img src="<?= base_url(). 'assets/images/logo-sm.png' ?>" alt="small logo">
                                </span>
                            </a>
                        </div>

                        <!-- Sidebar Menu Toggle Button -->
                        <button class="button-toggle-menu">
                            <i class="ri-menu-line"></i>
                        </button>

                        <!-- Horizontal Menu Toggle Button -->
                        <button class="navbar-toggle" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </button>

                            </div>
                        </li>

                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg py-0">

                            </div>
                        </li>

                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg py-0">
                                <div class="p-2 border-top-0 border-start-0 border-end-0 border-dashed border">
                                    <div class="row align-items-center">
                                    </div>
                                </div>

                                <div style="max-height: 300px;" data-simplebar>


                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-success-subtle">
                                            <i class="mdi mdi-heart text-success"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>

                            <a class="nav-link dropdown-toggle arrow-none nav-user" data-bs-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                <span class="account-user-avatar">
                                    <img src="<?= base_url(). 'assets/images/users/avatar-1.jpg' ?>" alt="user-image" width="32" class="rounded-circle">
                                </span>
                                <span class="d-lg-block d-none">
                                    <h5 class="my-0 fw-normal">Thomson <i
                                            class="ri-arrow-down-s-line d-none d-sm-inline-block align-middle"></i></h5>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated profile-dropdown">

                                <!-- item-->
                                <a href="/logout" class="dropdown-item">
                                    <i class="ri-logout-box-line fs-18 align-middle me-1"></i>
                                    <span>Logout</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- ========== Topbar End ========== -->

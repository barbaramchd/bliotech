<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$page_title;?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
          href="<?= base_url(); ?>/assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/plugins/summernote/summernote-bs4.min.css">

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">

            <!-- Navbar Search -->
            <li class="nav-item">
                <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                    <i class="fas fa-search"></i>
                </a>
                <div class="navbar-search-block">
                    <form class="form-inline">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                   aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="<?= base_url(); ?>" class="brand-link">
            <!-- TODO: Blio needs a bit more space on the right -->
            <span class="brand-text font-weight-light">Blio Tech</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="info">
                    <!-- TODO: Add some nice styles ;) -->
                    <small><a class="d-block">Welcome,</a></small>
                    <a class="d-block"><?= $user->first_name; ?> <?= $user->last_name; ?></a>
                    <small><a class="d-block"><?= $user->company; ?></a></small>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->

                    <?php if (($isManager == false) and ($isAdmin == false) and ($user->company != "")) {?>
                        <li class="nav-header"><?= strtoupper($user->company);?></li>
                    <?php } else { ?>
                        <li class="nav-header">COMPANY</li>
                    <?php } ?>

                    <!-- Dashboard link -->
                    <li class="nav-item">
                        <a href="<?= base_url("dashboard/home"); ?>" class="nav-link <?=$current_menu=="Dashboard"?"active":"";?>">
                            <i class="fas fa-tachometer-alt"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>

                    <?php if (($isAdmin == true) or ($isManager == true)) { ?>
                        <!-- Add New Unit Link -->
                        <li class="nav-item">
                            <a href="<?= base_url("dashboard/units"); ?>" class="nav-link <?=$current_menu=="Units"?"active":"";?>">
                                <i class="fas fa-store-alt"></i>
                                <p>Units</p>
                            </a>
                        </li>

                        <!-- Add New Account Link -->
                        <li class="nav-item">
                            <a href="<?= base_url("dashboard/accounts"); ?>" class="nav-link <?=$current_menu=="Accounts"?"active":"";?>">
                                <i class="fas fa-users"></i>
                                <p>Accounts</p>
                            </a>
                        </li>
                    <?php } ?>

                    <li class="nav-header">ACCOUNT INFO</li>
                    <!-- Settings Link -->
                    <li class="nav-item">
                        <a href="<?= base_url("dashboard/settings"); ?>" class="nav-link <?=$current_menu=="Settings"?"active":"";?>">
                            <i class="fas fa-cog"></i>
                            <p>Settings</p>
                        </a>
                    </li>

                    <!-- Logout Link -->
                    <li class="nav-item">
                        <a href="<?= base_url("auth/logout"); ?>" class="nav-link">
                            <i class="fas fa-sign-out-alt"></i>
                            <p>Logout</p>
                        </a>
                    </li>

                    <!-- Test Link
                    <li class="nav-item">
                        <a href="<?= base_url("dashboard/unit"); ?>" class="nav-link <?=$current_menu=="Units"?"active":"";?>">
                            <i class="fas fa-sign-out-alt"></i>
                            <p>Test</p>
                        </a>
                    </li>-->
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1><?=$page_header;?></h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><?= $isAdmin?"Admin":($isManager?"Manager":"Employee");?></li>
                            <li class="breadcrumb-item"><?=$current_menu;?></li>
                            <li class="breadcrumb-item active"><?=$page_header;?></li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <div class="container-fluid">
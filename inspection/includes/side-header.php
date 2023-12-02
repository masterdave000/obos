<?php 
require __DIR__ . "/../../config/constants.php";
require __DIR__ . "/../../login-check.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $title ?></title>

    <!-- Custom fonts for this template-->
    <link href="./../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="./../../assets/css/style.css" rel="stylesheet">
    <link href="./../../assets/css/sb-admin-2.min.css" rel="stylesheet">

    <?php 
    
    if ($title === 'Manage Admin') {
        echo '<link href="./../../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">';
    }
    ?>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="./">
                <div class="sidebar-brand-icon rotate-n-15" style="width: 50px; height: 50px">
                    <img style="width: 100%; height: 100%" src="./../../assets/img/lgu_logozz.png">
                </div>
                <div class="sidebar-brand-text mx-3">OBOS</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="./">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Navigation
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Navigation</h6>
                        <!-- <a class="collapse-item" href="register.html">Register</a> -->
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <a class="collapse-item" href="<?php echo SITEURL?>inspection/admin/">Admin</a>
                        <a class="collapse-item" href="<?php echo SITEURL?>inspection/admin/">Location</a>
                        <a class="collapse-item" href="<?php echo SITEURL?>inspection/admin/">Owner</a>
                        <a class="collapse-item" href="<?php echo SITEURL?>inspection/category/">Category</a>
                        <a class="collapse-item" href="<?php echo SITEURL?>inspection/admin/">Equipment List</a>
                        <a class="collapse-item" href="<?php echo SITEURL?>inspection/admin/">Business List</a>
                        <a class="collapse-item" href="<?php echo SITEURL?>inspection/admin/">Inspector</a>
                        <div class="collapse-divider"></div>
                        <!-- <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="<?php echo SITEURL?>inspection/404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a> -->
                    </div>
                </div>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title><?= $pages; ?> | <?= strtoupper(Session::get('name')); ?></title>
    <link href="../Assets/img/logo-2.png" rel="shortcut icon">
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="DataTables/dataTables.min.css" />
    <style type="text/css">
        header {
            background-color: #3D3D3D;
            color: #fff;
            padding: 10px;
            text-align: right;
        }
        footer {
            padding: 10px;
            color: #fff;
            font-size: 12px;
            background-color: #3D3D3D;
        }
        .navbar-inverse{
            background-color: rgba(0, 0, 0, 1);
        }
        .navbar-brand img{
            opacity: 1;
            animation-name: sparkle;
            animation-duration: 1.5s;
            animation-iteration-count: 100;
            animation-delay: 0.5s;
            animation-fill-mode: forwards;
            animation-timing-function: ease-in;
        }
        .user-settings-wrapper .nav > li > a{
            background-image: url('<?= $foto; ?>');
           
        }
        .user-settings-wrapper .nav > li > a:hover, .user-settings-wrapper .nav > li > a:focus {
            text-decoration: none;
            background-color: rgb(0, 64, 156)!important;
        }
        @keyframes sparkle{
            from{opacity: 1;}
            to{opacity: 0.5;}
        }
        .menu-top-active {
            background-color: rgba(0, 64, 156, 0.5);
        }
        .menu-section .nav > li > a:hover,.menu-section .nav > li > a:focus {
            background-color: rgba(0, 64, 156, 0.8)!important;
        }
        .page-head-line {
            font-weight: 900;
            padding-bottom: 20px;
            border-bottom: 2px solid rgba(0, 64, 156, 0.7);
            text-transform: uppercase;
            color: rgba(0, 64, 156, 0.7);
            font-size: 20px;
            margin-bottom: 40px;
        }
        .badge-danger{
            background-color: rgb(220, 53, 69);
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <strong>Email: </strong>info@aliensyndrome.com
                    &nbsp;&nbsp;
                    <strong>Support: </strong>+90-897-678-44
                </div>

            </div>
        </div>
    </header>
    <!-- HEADER END-->

    <div class="navbar navbar-inverse set-radius-zero">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">
                    <img src="assets/img/logo-2.jpg">
                </a>

            </div>

            <div class="left-div">
                <div class="user-settings-wrapper">
                    <ul class="nav">
                        <li>
                            <a class="dropdown-toggle" href="" aria-expanded="false">
                                <span class="glyphicon glyphicon-user" style="font-size: 25px;"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a class="<?php if ($pages=='Dashboard') { echo 'menu-top-active'; } ?>" href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                            <li><a class="<?php if ($pages=='Inventory' || $pages=='Set Inventory') { echo 'menu-top-active'; } ?>" href="inventory.php"><i class="fa fa-cloud"></i> INVENTORY</a></li>
                            <li><a class="<?php if ($pages=='Sales' || $pages=='Sales') { echo 'menu-top-active'; } ?>" href="ui.html"><i class="fa fa-money"></i> SALES</a></li>
                            <li><a href="forms.html"><i class="fa fa-group"></i> CUSTOMER</a></li>
                            <li><a href="login.html"><i class="fa fa-envelope"></i> <sup><span class="badge badge-pill badge-danger">2</span></sup></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- MENU SECTION END-->
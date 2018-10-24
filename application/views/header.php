<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>SIM PKL - SMKN 6 JEMBER</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?php echo base_url()?>assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="<?php echo base_url()?>assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url()?>assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url()?>assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="azure" data-image="<?php echo base_url()?>assets/img/sidebar-smk.jpg">
    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                   SIM PKL
                </a>
                <center><h6>Sistem Informasi PKL</h6></center>
            </div>

            <ul class="nav">
                <li class="<?php if ($class=='home'){ echo 'active';}else{echo '';};?>">
                    <a href="<?php echo base_url()?>index.php/Home">
                        <i class="pe-7s-home"></i>
                        <p>Home</p>
                    </a>
                </li>
                <li class="<?php if ($class=='pendamping'){ echo 'active';}else{echo '';};?>">
                    <a href="<?php echo base_url()?>index.php/Pendamping">
                        <i class="pe-7s-user"></i>
                        <p>Pendamping</p>
                    </a>
                </li>
                <li class="<?php if ($class=='dudi'){ echo 'active';}else{echo '';};?>">
                    <a href="<?php echo base_url()?>index.php/Dudi">
                        <i class="pe-7s-portfolio"></i>
                        <p>DUDI</p>
                    </a>
                </li>
                <li class="<?php if ($class=='siswa'){ echo 'active';}else{echo '';};?>">
                    <a href="<?php echo base_url()?>index.php/Siswa">
                        <i class="pe-7s-users"></i>
                        <p>SISWA</p>
                    </a>
                </li>
                <!--<li class="<?php //if ($class=='laporan'){ echo 'active';}else{echo '';};?>">
                    <a href="<?php echo base_url()?>index.php/Laporan">
                        <i class="pe-7s-note2"></i>
                        <p>Laporan</p>
                    </a>
                </li>-->
                <li>
                    <a href="#">
                        <i class="pe-7s-key"></i>
                        <p>Setting Akun</p>
                    </a>
                </li>
                <li class="nav-item active active-pro">
                        <a class="nav-link active" href="#">
                            <i class="pe-7s-user"></i>
                            <p>PEGAWAI</p>
                        </a>
                    </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">SMK Negeri 6 Jember</a>
                </div>
                <div class="collapse navbar-collapse">
                    

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="<?php echo base_url()?>index.php/Login/Logout">
                                Log out
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

<!DOCTYPE html>
<html>
<head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title>OEE CSAS</title>
      <link rel="shortcut icon" href="<?php echo base_url('assets/img/oee.png');?>" type="image/x-icon">
      <link rel="icon" href="<?php echo base_url('assets/img/oee.png');?>" type="image/x-icon">

      <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets1/css/bootstrap.min.css');?>">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets1/font-awesome/4.5.0/css/font-awesome.min.css');?>">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets1/font-awesome1/css/fontawesome.min.css');?>">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets1/font-awesome2/css/fontawesome.min.css');?>">

      <!-- dataTables -->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets1/css/dataTables.bootstrap.min.css');?>">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets1/css/responsive.bootstrap.min.css');?>">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets1/css/dataTables.bootstrap.min.css');?>">
      <!-- dataTables -->

      <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets1/css/fonts.googleapis.com.css');?>">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets1/css/ace.min.css');?>" class="ace-main-stylesheet" id="main-ace-style" />

      <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets1/css/ace-skins.min.css');?>" class="ace-main-stylesheet" id="main-ace-style" />
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets1/css/ace-rtl.min.css');?>" class="ace-main-stylesheet" id="main-ace-style" />
      
      <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets1/css/jquery.dataTables.css');?>"> -->

      <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets1/css/dataTables.bootstrap.min.css');?>">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets1/css/buttons.bootstrap.min.css');?>">
      <!-- <script type="text/javascript" src="<?php echo base_url('assets1/js/jquery.js');?>"></script>
      <script type="text/javascript" src="<?php echo base_url('assets1/js/jquery.dataTables.js');?>"></script> -->
      
      <script type="text/javascript" src="<?php echo base_url('assets1/js/ace-extra.min.js');?>"></script>
      <script type="text/javascript" src="<?php echo base_url('assets1/js/jquery-2.1.4.min.js');?>"></script>
      
      <script type="text/javascript" src="<?php echo base_url('assets1/js/pdfmake.min.js');?>"></script>

      <script type="text/javascript" src="<?php echo base_url('assets1/js/vfs_fonts.js');?>"></script>

      <script type="text/javascript" src="<?php echo base_url('assets2/js/jquery-3.5.1.js');?>"></script>

      <script type="text/javascript" src="<?php echo base_url('assets2/js/jquery.min.js');?>"></script>
      <script type="text/javascript" src="<?php echo base_url('assets2/js/loader.js');?>"></script>
      
</head>
      <body class="no-skin">
            <div id="navbar" class="navbar navbar-default          ace-save-state" style="background-color: #34495E">
                  <div class="navbar-container ace-save-state" id="navbar-container">
                        <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
                              <span class="sr-only">Toggle sidebar</span>

                              <span class="icon-bar"></span>

                              <span class="icon-bar"></span>

                              <span class="icon-bar"></span>
                        </button>

                        <div class="navbar-header pull-left">
                              <a class="navbar-brand">
                                    <small>
                                          <i class="fa fa-server"></i>
                                          OEE CSAS
                                    </small>
                              </a>
                        </div>

                        <div class="navbar-buttons navbar-header pull-right" role="navigation">
                              <ul class="nav ace-nav">
                                    <li class="dropdown-modal" style="background-color: #1B4F72">
                                          <a data-toggle="dropdown" href="#" class="dropdown-toggle" style="background-color: #24284F">
                                                <img class="nav-user-photo" src="<?= base_url('assets/img/profile/') . $user['image']; ?>">
                                                <span class="user-info">
                                                      <small>Selamat datang,</small>
                                                      <?= $user['name']; ?>
                                                </span>

                                                <i class="ace-icon fa fa-caret-down"></i>
                                          </a>

                                          <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                                                <li>
                                                      <a href="<?php echo site_url ('admin/profile') ?>">
                                                            <i class="ace-icon fa fa-user"></i>
                                                            My Profile
                                                      </a>
                                                </li>

                                                <li class="divider"></li>
                                                <li>
                                                      <a href="<?= base_url('menu'); ?>">
                                                            <i class="ace-icon fa fa-random"></i>
                                                            Ganti Menu
                                                      </a>
                                                </li>
                                                <li>
                                                      <a href="" data-toggle="modal" data-target="#logout">
                                                            <i class="ace-icon fa fa-power-off"></i>
                                                            Logout
                                                      </a>
                                                </li>
                                          </ul>
                                    </li>
                              </ul>

                        </div>
                  </div><!-- /.navbar-container -->
            </div>
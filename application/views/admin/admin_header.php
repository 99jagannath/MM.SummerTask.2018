<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Pannel</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url('asests/')?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?= base_url('asests/')?>vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?= base_url('asests/')?>dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?= base_url('asests/')?>vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?= base_url('asests/')?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url('admin/jaga')?>" style="text-align: center;">Admin Pannel</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right" style="float: left;">
               
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                         <li><a href="<?php echo base_url('redirect/User_Profile')?>"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="<?php echo base_url('redirect/Update_Profile')?>"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url('login/logout')?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                               <?= form_open('admin/search',['class'=>'form-inline my-2 my-lg-0','role'=>'search'])  ?>
  
                               <div class="col-lg-10"> <input class="form-control mr-sm-2" type="text" placeholder="Search" name="query" required></div>
                                <div class="col-lg-2"><button class="btn btn-secondary my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button></div>
                                <?= form_close();?>
                                 <?= form_error('query',"<p class='navbar-text text-danger'>",'</p>') ?>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="<?php echo base_url('admin/jaga')?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-edit fa-fw"></i> Posts<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url('admin/store_article');?>">Add Article</a><!-- flot.html  -->
                                </li>
                                <li>
                                    <a href="<?php echo base_url('admin/articlelist');?>">Article List</a><!-- morris.html  -->
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        <li>
                            <a href="<?php echo base_url('redirect/test');?>"><i class="fa fa-bar-chart-o fa-fw"></i>TestS</a><!-- forms.html  -->
                        </li>
                        <li>
                            <a href="<?php echo base_url('redirect/Department');?>"><i class="fa fa-table fa-fw"></i> department</a><!-- tables.html  -->
                        </li>
                        <li>
                            <a href="<?php echo base_url('redirect/Editor_Pic');?>"><i class="fa fa-table fa-fw"></i> Editor Pic</a><!-- tables.html  -->
                        </li>
                        <li>
                            <a href="<?php echo base_url('redirect/Issues');?>"><i class="fa fa-table fa-fw"></i> issues</a><!-- tables.html  -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> Right Part<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url('redirect/Squiggles');?>">squiggles</a><!-- panels-wells.html  -->
                                </li>
                                <li>
                                    <a href="<?php echo base_url('redirect/Pic_Of_The_Week');?>">Pic of the week</a><!-- buttons.html  -->
                                </li>
                                <li>
                                    <a href="<?php echo base_url('redirect/Student_Paules');?>">student Paules</a><!-- notifications.html  -->
                                </li>
                                <li>
                                    <a href="<?php echo base_url('redirect/Video');?>">video</a><!-- typography.html  -->
                                </li>
                                <li>
                                    <a href="<?php echo base_url('redirect/Link');?>"> link</a><!-- icons.html  -->
                                </li>
                                <li>
                                    <a href="<?php echo base_url('redirect/Citizen_Journalism');?>">Citizen Jounalism</a><!-- grid.html  -->
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> comments & Questions<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url('redirect/Comment');?>">Comments</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('redirect/Question');?>">Questions</a>
                                </li>
                                <li>
                                    <a href="#">footer<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="<?php echo base_url('redirect/About');?>">About</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('redirect/Archieves');?>">Archieves</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('redirect/Events');?>">Events</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('redirect/Academic_Calender');?>">Academic Calender</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> profile<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url('redirect/User_Profile');?>">User Profile</a><!-- blank.html  -->
                                </li>
                                <li>
                                    <a href="<?php echo base_url('login/logout');?>">Logout Page</a><!-- login.html  -->
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav><!--end of nav-->

      

    </div>
    <!-- /#wrapper -->